<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Contact;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ContactTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function can_delete_contact()
    {

        $this->loginUser();

        $contact = factory(Contact::class)->create();
        $this->delete("admin/contacts/{$contact->id}");

        $this->assertDatabaseMissing('contacts', [
            'name' => 'contact',
        ]);
    }
}
