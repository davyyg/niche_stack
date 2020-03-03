<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Contacts::class, 5)->create(); // create 5 contacts
        factory(App\Model\Groups::class, 5)->create(); // create 5 groups       
    }
}
