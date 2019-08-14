<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        // Membuat sample admin
        $admin = new User();
        $admin->name = "Admin";
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt ('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        // Membuat sample member
        $member = new User();
        $member->name = "Member";
        $member->email = 'member@gmail.com';
        $member->password = bcrypt ('rahasia');
        $member->save();
        $member->attachRole($memberRole);
    }
}
