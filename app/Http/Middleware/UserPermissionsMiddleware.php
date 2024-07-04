<?php

namespace App\Http\Middleware;

use Closure;
use App\Repositories\Systems\Erp\ErpEmployeesRepository;

class UserPermissionsMiddleware
{

    /**
     * @var ErpEmployeesRepository
     */
    protected $erpEmployeesRepository;


    public function __construct(ErpEmployeesRepository $erpEmployeesRepository)
    {
        $this->erpEmployeesRepository = $erpEmployeesRepository;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\View\View
     */
    public function handle($request, Closure $next)
    {
        $user = auth()->user();
        $userPermissions = $this->erpEmployeesRepository->findWhere(['user_key' => $user->id])->first()->permissions;
        $rotaCurrent = explode('/', $request->getRequestUri());

        $termoAllWorks = 'all-works';
        $termoServices = 'services';
        $termoCustomers = 'customers';
        $termoEmployees = 'employees';
        $termoMyWorks = 'my-works';

        $freeAccess = false;
        foreach ($userPermissions as $userPermission) {
            if ($userPermission['id'] == 4 &&  preg_match('/' . $termoServices . '/', $rotaCurrent[3])) {
                $freeAccess = true;
            } else if ($userPermission['id'] == 1 && preg_match('/' . $termoCustomers . '/', $rotaCurrent[3])) {
                $freeAccess = true;
            } else if ($userPermission['id'] == 2 && preg_match('/' . $termoEmployees . '/', $rotaCurrent[3])) {
                $freeAccess = true;
            } else if ($userPermission['id'] == 3 && preg_match('/' . $termoAllWorks . '/', $rotaCurrent[3])) {
                $freeAccess = true;
            } else if ($userPermission['id'] == 5 && preg_match('/' . $termoMyWorks . '/', $rotaCurrent[3])) {
                $freeAccess = true;
            }
        }

        if ($freeAccess) {
            return $next($request);
        }

        return redirect('/systems/erp');
    }
}
