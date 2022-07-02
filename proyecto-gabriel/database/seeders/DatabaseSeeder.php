<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
    }

    public function createAdmin(){
        $user = new User;
        (['William', 'Red', 'Lopez@gmail.com', '123456', '0241', 'España', 'ROLE_USER']);

        $user->save();
    }
}
