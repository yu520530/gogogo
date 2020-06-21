<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(ContactTableSeeder::class);
        factory(member::class,5)->create();
    }
}
