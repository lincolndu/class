<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([RolesTableSeeder::class,UsersTableSeeder::class,ProductTableSeeder::class]);
        // factory('App\User',10)->create();
    }
}
