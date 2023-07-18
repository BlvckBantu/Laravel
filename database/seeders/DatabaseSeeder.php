<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

    //    Listing::create([
    //     'title' => 'Laravel Senior Developer',
    //     'tags' => 'Laravel, JavaScript',
    //     'company' => 'Bvntu.org',
    //     'location' => 'Nairobi, Kenya',
    //     'email' => 'bvntu@email.com',
    //     'website' => 'http://www.bvntu.com',
    //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
    //     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
    //     ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
    //     ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
    //     velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
    //     cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 
    //     laborum.', 
    //    ]);

    //    Listing::create([
    //     'title' => 'Backend Developer',
    //     'tags' => 'Php, JavaScript',
    //     'company' => 'Bvntu.org',
    //     'location' => 'Nairobi, Kenya',
    //     'email' => 'bvntu@email.com',
    //     'website' => 'http://www.bvntu.com',
    //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
    //     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
    //     ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
    //     ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
    //     velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
    //     cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 
    //     laborum.',
    //    ]);
    }
}
