<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use App\Blog;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BlogTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function can_add_blog(){

        $this->loginUser();
        // $this->withoutExceptionHandling();

        $this->post('admin/blogs', [
            'title_ar' => 'Title_ar',
            'description_ar' => 'Description_ar',
            'title_en' => 'Title_en',
            'description_en' => 'Description_en',
            'photo' => UploadedFile::fake()->image('avatar.jpg'),
        ]);

        $this->assertDatabaseHas('blogs', [
            'title_ar' => 'Title_ar',
            'description_ar' => 'Description_ar',
            'title_en' => 'Title_en',
            'description_en' => 'Description_en',
        ]);
    }

    /** @test */
    public function can_update_blog(){

        $this->loginUser();
        $blog = factory(Blog::class)->create();

        $this->put("admin/blogs/{$blog->id}", [
            'title_ar' => 'update',
            'description_ar' => 'Description_ar',
            'title_en' => 'Title_en',
            'description_en' => 'Description_en',
        ]);

        $this->assertDatabaseHas('blogs', [
            'title_ar' => 'update',
        ]);
    }

    /** @test */
    public function can_delete_blog(){

        $this->loginUser();

        $blog = factory(Blog::class)->create();

        $this->delete("admin/blogs/{$blog->id}");
        $this->assertDatabaseMissing('blogs', [
            'id' => $blog->id,
        ]);
    }
}
