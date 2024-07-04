<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UsersRepository;
use App\Services\Systems\Erp\ErpEmployeesService;
use DateTime;
use Hash;

class CreatePasswordController extends Controller
{


    /**
     * @var UsersRepository
     */
    protected $usersRepository;

    /**
     * @var ErpEmployeesService
     */
    protected $erpEmployeesService;


    public function __construct(
        UsersRepository $usersRepository,
        ErpEmployeesService $erpEmployeesService
    ) {
        $this->usersRepository = $usersRepository;
        $this->erpEmployeesService = $erpEmployeesService;
    }


    /**
     * @param int $id
     * @param string $email
     * @return array
     */
    public function index($id, $email)
    {

        return view('create-password', [
            'id' => $id,
            'email' => $email
        ]);
    }


    /**
     * @param Illuminate\Http\Request $request;
     * @return array
     */
    public function createPasswordUser(Request $request)
    {

        if (str_replace(' ', '', $request->password) && str_replace(' ', '', $request->confirm_password)) {
            if ($request->password == $request->confirm_password) {


                $dataUser = $this->usersRepository->findWhere([
                    'id' => $request->id_user,
                    'email' => $request->email_user,
                    'email_verified_at' => null
                ])->first();

                if (isset($dataUser) && $dataUser) {

                    $date = new DateTime();

                    $dataUser->update([
                        'password' => Hash::make($request->password),
                        'email_verified_at' => $date->format('Y-m-d H:i:s')
                    ]);

                    if ($dataUser) {
                        return $this->messageReturn($request, 'Senha criada com sucesso!', '#008000');
                    }
                } else {
                    return $this->messageReturn($request, 'Dados incorretos!');
                }
            } else {
                return $this->messageReturn($request, 'Erro ao confirmar senha!');
            }
        } else {
            return $this->messageReturn($request, 'Preencha todos os campos!');
        }
    }


    /**
     * @param int $request;
     * @param string $mensage;
     * @param string $colorMessage;
     * @return mix
     */
    public function messageReturn($request, $mensage, $colorMessage = false)
    {
        if (!$colorMessage) {
            $colorMessage = '#ff0000';
        }

        if ($colorMessage == '#008000') {
            return redirect()->route('login');
        }

        return view('create-password', [
            'id' => $request->id_user,
            'email' => $request->email_user,
            'msg' => '<div style="text-align: center;color:' . $colorMessage . ';padding:0 0 30px 0"><h6>' . $mensage . '</h6></div>'
        ]);
    }


    /**
     * @param Illuminate\Http\Request $request;
     * @return array
     */
    public function resetPasswordUser(Request $request)
    {

        $dataUser = $this->usersRepository->findWhere([
            'email' => $request->email,
        ])->first();

        if (isset($dataUser) && $dataUser) {

            $dataUser->update([
                'email_verified_at' => null
            ]);

            $sendEmail = [
                'name' => $dataUser->name,
                'email' => $dataUser->email,
                'id_user' => $dataUser->id
            ];

            $resultSendEmail = $this->erpEmployeesService->sendEmailNewUser($sendEmail);

            if ($resultSendEmail) {
                return view('auth.passwords.email', [
                    'msg' => '<div style="text-align: center;color:#008000;padding:20px;"><h4>Link enviado com sucesso!</h4></div>'
                ]);
            } else {
                return view('auth.passwords.email', [
                    'msg' => '<div style="text-align: center;color:#ff0000;padding:20px;"><h4>Erro ao enviar link!</h4></div>'
                ]);
            }
        }
    }
}
