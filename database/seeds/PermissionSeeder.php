<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageUser = new Permission();
        $manageUser->name = 'Управление пользователями';
        $manageUser->slug = 'manage-users';
        $manageUser->save();

        $manageContent = new Permission();
        $manageContent->name = 'Управление контентом';
        $manageContent->slug = 'manage-content';
        $manageContent->save();

        $manageOrder = new Permission();
        $manageOrder->name = 'Управление заявками';
        $manageOrder->slug = 'manage-orders';
        $manageOrder->save();

        $manageRole = new Permission();
        $manageRole->name = 'Управление ролями и разрешениями';
        $manageRole->slug = 'manage-roles';
        $manageRole->save();
    }
}
