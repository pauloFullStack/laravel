<?php

use Illuminate\Database\Seeder;
use App\Models\Systems\Erp\ErpPermissions;

class PermissionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ErpPermissions::firstOrCreate([
            'name' => 'Clientes'
        ]);

        ErpPermissions::firstOrCreate([
            'name' => 'Colaboradores'
        ]);

        ErpPermissions::firstOrCreate([
            'name' => 'Todos os trabalhos'
        ]);

        ErpPermissions::firstOrCreate([
            'name' => 'Serviços fornecidos'
        ]);

        ErpPermissions::firstOrCreate([
            'name' => 'Meus trabalhos'
        ]);
    }
}
