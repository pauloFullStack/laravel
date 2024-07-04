<?php

use Illuminate\Database\Seeder;
use App\Models\Systems\Erp\PaymentStatus;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        PaymentStatus::firstOrCreate([
            'name' => 'A pagar'
        ]);

        PaymentStatus::firstOrCreate([
            'name' => 'Pago'
        ]);

        PaymentStatus::firstOrCreate([
            'name' => 'Pendente'
        ]);
    }
}
