<?php

use App\Role;
use App\User;
use App\Permission;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developer = Role::where('slug', 'developer')->first();
        $admin = Role::where('slug', 'admin')->first();
        $manager = Role::where('slug', 'manager')->first();
        $operator = Role::where('slug', 'operator')->first();
        $manageUser = Permission::where('slug', 'manage-users')->first();
        $manageContent = Permission::where('slug', 'manage-content')->first();
        $manageOrder = Permission::where('slug', 'manage-orders')->first();
        $manageRole = Permission::where('slug', 'manage-roles')->first();

        $user1 = new User();
        $user1->name = 'Турбанов Валерий';
        $user1->email = 'tur@ukmig.com.ua';
        $user1->password = bcrypt('P@ssw0rd');
        $user1->save();
        $user1->roles()->attach($developer);
        $user1->permissions()->attach($manageRole);
        $user1->permissions()->attach($manageUser);
        $user1->permissions()->attach($manageContent);
        $user1->permissions()->attach($manageOrder);

        $user2 = new User();
        $user2->name = 'Мовчан Владимир';
        $user2->email = 'mv@tv7.ua';
        $user2->password = bcrypt('Qwerty098');
        $user2->save();
        $user2->roles()->attach($manager);
        $user2->permissions()->attach($manageOrder);

        $user2 = new User();
        $user2->name = 'Пилипенко Вадим';
        $user2->email = 'pilipenko@tv7.com.ua';
        $user2->password = bcrypt('Qwerty098');
        $user2->save();
        $user2->roles()->attach($operator);
        $user2->permissions()->attach($manageContent);
    }
}
