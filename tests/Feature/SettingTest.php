<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Setting;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SettingTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function setting_seeder_is_created()
    {
        $setting = factory(Setting::class)->create();

        $this->assertDatabaseHas('settings', [
            'id' => $setting->id,
        ]);
    }

    /** @test */
    public function can_update_setting(){

        $this->loginUser();
        // $this->withoutExceptionHandling();
        $setting = factory(Setting::class)->create();

        $this->put("admin/settings/{$setting->id}", [
            'logo_ar' => 'logo-ar',
            'logo_en' => 'logo-en',
            'about_ar' => 'about-ar',
            'about_en' => 'about-en',
            'phone' => '0123456789',
            'location_ar' => 'location-ar',
            'location_en' => 'location-en',
            'email' => 'update@example.com',
        ]);

        $this->assertDatabaseHas('settings', [
            'email' => 'update@example.com'
        ]);
    }
}
