<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Paulo',
            'email' => 'paulofullstack@hotmail.com',
            'password' => Hash::make('davi91445129'),
        ]);
    }
}
