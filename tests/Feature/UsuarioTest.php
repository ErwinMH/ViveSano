<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function createUser()
    {
        $user = new User();
        $user->name = 'Brenda';
        $user->email = 'brenda@gmail.com';
        $user->email_verified_at = null;
        $user->password = 'brenda123';

        $result = $user->save();

        $this->assertEquals('Brenda', $result);

    }
}
