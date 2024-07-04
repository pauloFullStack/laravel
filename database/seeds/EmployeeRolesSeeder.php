<?php

use Illuminate\Database\Seeder;
use App\Models\Systems\Erp\EmployeeRoles;

class EmployeeRolesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        EmployeeRoles::firstOrCreate([
            'name' => 'Gerente'
        ]);

        EmployeeRoles::firstOrCreate([
            'name' => 'Operador'
        ]);

        EmployeeRoles::firstOrCreate([
            'name' => 'Auxiliar1'
        ]);
    }
}
