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

        $roleExpert = new Role(['name' => 'expert', 'label' => 'کارشناس']);
        $roleExpert->save();

        $roleUser = new Role(['name' => 'user', 'label' => 'کاربر']);
        $roleUser->save();

        $userAdmin = User::where("email", "admin@a.com")->first();
        $userAdmin->Roles()->save($roleAdmin);

        $userHassan = User::where("email", "hassan@a.com")->first();
        $userHassan->Roles()->save($roleExpert);

        $userAli = User::where("email", "ali@a.com")->first();
        $userAli->Roles()->save($roleUser);

    }
}
