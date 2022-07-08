<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Listing::factory(6)->create();
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, Ma',
        //     'email' => 'emali@example.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'test',
        // ]);
    }
}
