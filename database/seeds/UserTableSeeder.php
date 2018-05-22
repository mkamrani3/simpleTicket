<?php

use Illuminate\Database\Seeder;
use simpleTicket\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User([
            "name" => "Admin",
            "email" => "admin@a.com",
            "password" => bcrypt("123456"),
        ]);
        $u->save();

        $u = new User([
            "name" => "Hassan",
            "email" => "hassan@a.com",
            "password" => bcrypt("123456"),
        ]);
        $u->save();

        $u = new User([
            "name" => "Ali",
            "email" => "ali@a.com",
            "password" => bcrypt("123456"),
        ]);
        $u->save();
    }
}
