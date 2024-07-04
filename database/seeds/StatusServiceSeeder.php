<?php

use Illuminate\Database\Seeder;
use App\Models\Systems\Erp\StatusService;

class StatusServiceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        StatusService::firstOrCreate([
            'name' => 'No prazo'
        ]);

        StatusService::firstOrCreate([
            'name' => 'Concluído'
        ]);

        StatusService::firstOrCreate([
            'name' => 'Atrasado'
        ]);

        StatusService::firstOrCreate([
            'name' => 'Iniciado'
        ]);

        StatusService::firstOrCreate([
            'name' => 'Parado'
        ]);
    }
}
