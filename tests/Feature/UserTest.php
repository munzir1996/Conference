<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function can_add_user()
    {
        // $this->withoutExceptionHandling();
        $this->loginUser();

        $this->post('admin/users',[
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => 'password',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'user',
            'email' => 'user@example.com'
        ]);


    }

    /** @test */
    public function can_update_user(){

        $this->loginUser();

        $user = factory(User::class)->create([
            'name' => 'user',
            'email' => 'user@example.com',
            ]);

        $this->put("admin/users/{$user->id}",[
            'name' => 'update',
            'email' => 'update@example.com',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'update',
            'email' => 'update@example.com',
        ]);
    }

    /** @test */
    public function can_delete_user(){

        $this->loginUser();

        $user = factory(User::class)->create();

        $this->delete("admin/users/{$user->id}");

        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
        ]);
    }

    /** @test */
    public function cannot_add_user_if_email_is_not_unique(){

        // $this->withoutExceptionHandling();

        $this->loginUser();
        $user = factory(User::class)->create();

        $response = $this->post('admin/users', [
            'name' => 'user',
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertDatabaseMissing('users', [
            'name' => 'user',
        ]);

    }

}
