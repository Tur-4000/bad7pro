<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Developer role */
        $developer = new Role();
        $developer->name = 'Разработчик';
        $developer->slug = 'developer';
        $developer->save();

        /* Administrator role */
        $admin = new Role();
        $admin->name = 'Администратор';
        $admin->slug = 'admin';
        $admin->save();

        /* Manager role */
        $manager = new Role();
        $manager->name = 'Менеджер';
        $manager->slug = 'manager';
        $manager->save();

        /* Operator role */
        $operator = new Role();
        $operator->name = 'Оператор';
        $operator->slug = 'operator';
        $operator->save();
    }
}
