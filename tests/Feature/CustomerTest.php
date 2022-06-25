<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Paulo Renato',
            'email' => 'johndoe@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    public function test_delete_user()
    {
        $user = User::factory()->count(1)->make();
        $user = User::first();

        if ($user) {
            $user->delete();
        }

        $this->assertTrue(true);
    }

    public function test_bd_get()
    {
        $event = Event::findOrFail(1);
        $this->assertTrue(!empty($event) && $event->title == 'evento phpunit');
    }

    public function test_registro_user()
    {
        $response = $this->post('/register', [
            'name' => 'Geissana',
            'email' => 'geissana@gmail.com',
            'password' => 'geissana123456'
        ]);

        $response->assertRedirect('/dashboard');
    }
}
