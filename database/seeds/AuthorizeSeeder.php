<?php

use Illuminate\Database\Seeder;

class AuthorizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = [
            "slug" => "admin",
            "name" => "Admin",
            "permissions" => [
                "admn" => true
            ]
        ];
        Sentinel::getRoleRepository()->createModel()->fill($role_admin)->save();
        $adminRole = Sentinel::findRoleByName('Admin');

        $user_admin = ['first_name'=>'Bangbang','last_name'=>'1','email'=>'bangbang@gmail.com','password'=>'12345678'];
        $adminuser = Sentinel::registerAndActivate($user_admin);
        $adminuser->roles()->attach($adminRole);

        //this for seed data pelamar
        $role_pelamar = [
            "slug" => "pelamar",
            "name" => "Pelamar",
            "permissions" => [
                "pelamar" =>true
            ]
        ];

        Sentinel::getRoleRepository()->createModel()->fill($role_pelamar)->save();
        $pelamarRole = Sentinel::findRoleByName('Pelamar');

        $user_pelamar = ['first_name'=>'Asep','last_name'=>'Purnama','email'=>'asep.p@gmail.com','password'=>'12345678'];
        $pelamaruser = Sentinel::registerAndActivate($user_pelamar);
        $pelamaruser->roles()->attach($pelamarRole);
    }
}
