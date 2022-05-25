<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'pressure_create',
            ],
            [
                'id'    => 18,
                'title' => 'pressure_edit',
            ],
            [
                'id'    => 19,
                'title' => 'pressure_show',
            ],
            [
                'id'    => 20,
                'title' => 'pressure_delete',
            ],
            [
                'id'    => 21,
                'title' => 'pressure_access',
            ],
            [
                'id'    => 22,
                'title' => 'travel_create',
            ],
            [
                'id'    => 23,
                'title' => 'travel_edit',
            ],
            [
                'id'    => 24,
                'title' => 'travel_show',
            ],
            [
                'id'    => 25,
                'title' => 'travel_delete',
            ],
            [
                'id'    => 26,
                'title' => 'travel_access',
            ],
            [
                'id'    => 27,
                'title' => 'travel_tool_access',
            ],
            [
                'id'    => 28,
                'title' => 'trip_create',
            ],
            [
                'id'    => 29,
                'title' => 'trip_edit',
            ],
            [
                'id'    => 30,
                'title' => 'trip_show',
            ],
            [
                'id'    => 31,
                'title' => 'trip_delete',
            ],
            [
                'id'    => 32,
                'title' => 'trip_access',
            ],
            [
                'id'    => 33,
                'title' => 'booking_create',
            ],
            [
                'id'    => 34,
                'title' => 'booking_edit',
            ],
            [
                'id'    => 35,
                'title' => 'booking_show',
            ],
            [
                'id'    => 36,
                'title' => 'booking_delete',
            ],
            [
                'id'    => 37,
                'title' => 'booking_access',
            ],
            [
                'id'    => 38,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
