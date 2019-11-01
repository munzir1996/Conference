<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Member;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MemberTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function can_add_member()
    {
        $this->withoutExceptionHandling();
        $this->loginUser();

        $this->post('admin/members',[
            'name' => 'user',
            'email' => 'user@example.com',
            'phone' => '0123456789',
            'country' => 'sudan',
            'education' => 'school',
            'type' => '1'
        ]);

        $this->assertDatabaseHas('members', [
            'name' => 'user',
            'email' => 'user@example.com',
            'phone' => '0123456789',
            'country' => 'sudan',
            'education' => 'school',
            'type' => '1'
        ]);

    }

    /** @test */
    public function  can_update_member(){

        $this->loginUser();

        $member = factory(Member::class)->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'phone' => '0123456789',
            'country' => 'sudan',
            'education' => 'school',
            'type' => '1'
        ]);

        $this->put("admin/members/{$member->id}", [
            'name' => 'member',
            'email' => 'user@example.com',
            'phone' => '0123456789',
            'country' => 'sudan',
            'education' => 'school',
            'type' => '1'
        ]);

        $this->assertDatabaseHas('members', [
            'name' => 'member',
        ]);
    }

    /** @test */
    public function can_delete_member(){

        $this->loginUser();

        $member = factory(Member::class)->create();

        $this->delete("admin/members/{$member->id}");

        $this->assertDatabaseMissing('members', [
            'name' => 'member',
        ]);
    }
}
