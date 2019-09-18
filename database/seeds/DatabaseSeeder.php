<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Setting;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'email' => 'admin@admin.com',
            'name' => 'admin',
        ]);
        factory(Setting::class, 1)->create();

    }
}
