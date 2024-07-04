<?php


namespace App\Services\Systems\Erp;

use App\Repositories\Systems\Erp\ErpEmployeesRepository;
use App\Repositories\Systems\Erp\ErpPermissionsRepository;
use App\Repositories\UsersRepository;
use App\Services\Systems\Erp\ErpCustomersServicesService;
use App\Services\ServiceAbstract;
use App\Models\User;
use Hash;

class ErpEmployeesService extends ServiceAbstract
{

    /**
     * @var ErpEmployeesRepository
     */
    protected $repository;


    /**
     * @var ErpPermissionsRepository
     */
    protected $erpPermissionsRepository;


    /**
     * @var ErpCustomersServicesService
     */
    protected $erpCustomersServicesService;


    /**
     * @var UsersRepository
     */
    protected $usersRepository;


    public function __construct(
        ErpEmployeesRepository $repository,
        ErpPermissionsRepository  $erpPermissionsRepository,
        ErpCustomersServicesService $erpCustomersServicesService,
        UsersRepository $usersRepository
    ) {
        $this->repository = $repository;
        $this->erpPermissionsRepository = $erpPermissionsRepository;
        $this->erpCustomersServicesService = $erpCustomersServicesService;
        $this->usersRepository = $usersRepository;
    }

    public function repository()
    {
        return $this->repository;
    }

    public function store(array $data)
    {

        $data['permissions'] = $this->handlePermission($data);
        if (!isset($data['permissions'])) {
            return [
                'errors' => [
                    'permissions' => [
                        0 => 'O campo permissões é obrigatório!'
                    ]
                ]
            ];
        }

        $user = $this->usersRepository->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['name'] . '123456789'),
        ]);

        $data['user_key'] = $user->id;
        $sendEmail = [
            'name' => $data['name'],
            'email' => $data['email'],
            'id_user' => $user->id
        ];

        $createUserResult = $this->repository()->create($data);
        if ($createUserResult) {
            if ($this->sendEmailNewUser($sendEmail)) {
            return $createUserResult;
            }
        }

        return null;
    }

    public function sendEmailNewUser($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $id = $data['id_user'];
        $subjectMatter = 'Email de criação de senha';
        $message = "<a href=" . url('/') . '/systems/create-password/' . $id . '/' . $email . '' . " >Criar nova senha</a>";

        $url = "https://api.sendinblue.com/v3/smtp/email";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "accept: application/json",
            "api-key: API_KEY",
            "content-type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = <<<DATA

{
     "sender": {
          "name": "Sistema Basico Erp - Teste",
          "email": "paulofullstack@hotmail.com"
     },
     "to": [
          {
               "email": "%email_customer%",
               "name": "%name_customer%"
          }
     ],     
     "htmlContent": "<!DOCTYPE html> <html> <body> <h2>Criar nova senha</h2><br><h4>Bem vindo(a) %name_customer%</h4><h4>Acesse o link abaixo para criar sua senha de acesso.</h4><h3> %message%</h3> </body> </html>",
     "textContent": "Criador por Paulo Renato Dev",
     "subject": "%subject_matter%",
     "tags": [
          "tag1"
     ]
}

DATA;

        $data = str_replace("%email_customer%", $email, $data);
        $data = str_replace("%name_customer%", $name, $data);
        $data = str_replace("%message%", $message, $data);
        $data = str_replace("%subject_matter%", $subjectMatter, $data);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($resp, true);

        if ($result['messageId']) {
            return true;
        }

        return false;
    }

    public function all($paginate = null)
    {
        $search = request()->input('q');
        $maxResults = request()->input('max_results');

        if (!empty($search)) {
            return $this->repository()->findBySearch($search)->getLimit($maxResults)->all();
        } else if (!empty($maxResults)) {
            return $this->repository()->findByDataAll()->getLimit($maxResults)->all();
        } else {
            return $this->repository()->findByDataAll()->paginate(5);
        }
    }


    public function delete($id)
    {

        $userId = $this->repository()->find($id);
        if (isset($userId->responsible)) {
            $allServices = $this->erpCustomersServicesService->repository()->findWhere(['responsible_collaborator' => $userId->responsible->responsible_collaborator]);

            foreach ($allServices as $service) {
                $service->update([
                    'responsible_collaborator' => 1
                ]);
            }
        }
        $deleteUserEmployee = $this->repository()->findOrFail($id)->delete();
        if ($deleteUserEmployee) {
            $this->usersRepository->find($userId->user_key)->delete();
        }
        return $deleteUserEmployee;
    }

    public function update(array $data)
    {
        $update = $this->repository()->findByData($data['id']);

        if ((isset($data['permissions']) && $data['permissions'])) {
            $data['permissions'] = $this->handlePermission($data);

            if (!isset($data['permissions'])) {
                return [
                    'errors' => [
                        'permissions' => [
                            0 => 'O campo permissões é obrigatório!'
                        ]
                    ]
                ];
            }
        }


        if (isset($data['email'])) {
            $resultDuplicateEmail = User::where('id', '!=', $update->userKey->id)
                ->where('email', $data['email'])->first();

            if (!isset($resultDuplicateEmail) && !$resultDuplicateEmail) {
                if (isset($data['name']) || isset($data['email'])) {
                    $this->usersRepository->find($update->userKey->id)
                        ->update(['name' => $data['name'], 'email' => $data['email']]);
                }
            } else {
                return [
                    'errors' => [
                        'email' => [
                            0 => 'Esse email já esta cadastrado!'
                        ]
                    ]
                ];
            }
        }

        $id = $data['id'];
        unset($data['id']);
        if ($update->update($data)) {
            return $this->repository()->find($id);
        }
    }

    

    public function getEmployeeRoles()
    {
        $permissions = $this->repository()->findWhere(['user_key' => auth()->user()->id])->first();

        if (isset($permissions) && $permissions) {
            return $this->repository()->findWhere(['user_key' => auth()->user()->id])->first()->permissions;
        }

        return null;
    }

    public function handlePermission($data)
    {
        $a = 0;
        $arrayPermissions = null;
        foreach (json_decode($data['permissions']) as $permissionId) {
            $arrayPermissions[$a]['name'] = $this->erpPermissionsRepository->find($permissionId)->name;
            $arrayPermissions[$a]['id'] = $permissionId;
            $a++;
        }
        return $arrayPermissions;
    }
}
