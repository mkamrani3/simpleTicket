<?php

use Illuminate\Database\Seeder;
use simpleTicket\User;
use simpleTicket\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = new Role(['name' => 'admin', 'label' => 'مدیر کل']);
        $roleAdmin->save();

        $roleGuest = new Role(['name' => 'expert', 'label' => 'کارشناس']);
        $roleGuest->save();

        $roleGuest = new Role(['name' => 'user', 'label' => 'کاربر']);
        $roleGuest->save();

        $userAdmin = User::where("email", "admin@test.com")->first();
        $userAdmin->Roles()->save($roleAdmin);

    }
}
