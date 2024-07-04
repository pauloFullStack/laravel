<?php

use Illuminate\Database\Seeder;
use App\Models\Systems\Erp\ErpEmployees;

class EmployeeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ErpEmployees::firstOrCreate([
            'user_key' => '1',
            'telephone' => '34992245739',
            'permissions' => [0 => ["id" => "1", "name" => "Clientes"], 1 => ["id" => "2", "name" => "Colaboradores"], 2 => ["id" => "3", "name" => "Todos os trabalhos"], 3 => ["id" => "4", "name" => "Serviços fornecidos"], 4 => ["id" => "5", "name" => "Meus trabalhos"]],
            'street' => 'Av indaia',
            'number' => '1575',
            'district' => 'Planalto',
            'city' => 'Uberlândia',
            'state' => 'Minas Gerais',
            'employee_roles_id' => '1',
            'cpf' => '09532626697',
            'bill' => '1',
            'agency' => '2',
            'operation' => '3',
        ]);
    }
}
