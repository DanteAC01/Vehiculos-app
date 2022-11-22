<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::create(['name'=>'Administrador','email'=>'administrador@gmail.com','password'=>bcrypt('12345678')]);
        $user = new User();
        $user->name = "jose";
        $user->email = "jose@gmail.com";
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
