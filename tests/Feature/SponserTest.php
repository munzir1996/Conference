<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Sponser;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SponserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function can_add_sponser()
    {

        $this->loginUser();
        $this->withoutExceptionHandling();
        $this->post('admin/sponsers', [
            'name' => 'sponser',
            'photo' => UploadedFile::fake()->image('avatar.jpg'),
        ]);

        $this->assertDatabaseHas('sponsers', [
            'name' => 'sponser',
        ]);
    }

    /** @test */
    public function can_update_sponser(){

        $this->loginUser();
        $sponser = factory(Sponser::class)->create();

        $this->put("admin/sponsers/{$sponser->id}", [
            'name' => 'image',
        ]);

        $this->assertDatabaseHas('sponsers', [
            'name' => 'image',
        ]);

    }

    /** @test */
    public function can_delete_sponser(){

        $this->loginUser();
        $sponser = factory(Sponser::class)->create();

        $this->delete("admin/sponsers/{$sponser->id}");

        $this->assertDatabaseMissing('sponsers', [
            'id' => $sponser->id,
        ]);
    }
}
