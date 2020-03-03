<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model\Groups::class, 5)->create(); // create 5 group   
    }
}
