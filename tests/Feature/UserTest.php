<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function testCreateUser()
    {
        $user = new User();
        $user->name = 'Brenda';
        $user->email = 'brenda@gmail.com';
        $user->email_verified_at = null;
        $user->password = 'brenda123';
        $user->rol = '1';

        $result = $user->save();

        $this->assertEquals('Brenda', $result);
    }
}
