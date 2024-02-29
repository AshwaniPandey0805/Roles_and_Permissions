<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisterAdmin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ([
                [
            // 'role_id' => '101',
            'role_name' => 'Admin'
            ],
            [
            // 'role_id' => '102',
            'role_name' => 'Sub-Admin'
            ],
            [
            // 'role_id' => '103',
            'role_name' => 'User01'
            ],
            [            // 'role_id' => '104',
            'role_name' => 'User02'
            ],
            [
            // 'role_id' => '104',
            'role_name' => 'User03'
            ],
        ] as $role) {
            Role::create($role);
        }
        // Role::create(

        // );

        User::create([
            'first_name' => 'Ashwani',
            'last_name' => 'Pandey',
            'email' => 'ashwanipandey679@gmail.com',
            'phone_number' => '8081466560',
            'password' => bcrypt("@Ashwani09"),
            'role_id' => 1
        ]);


        foreach([

            [
                // 'permission_id' => '01',
                'permission_name' => 'Create',
            ],
            [
                // 'permission_id' => '02',
                'permission_name' => 'Read',
            ],
            [
                // 'permission_id' => '03',
                'permission_name' => 'Delete',
            ],
            [
                // 'permission_id' => '04',
                'permission_name' => 'Update',
            ]
        ] as $permissions){
            Permission::create($permissions);
        }
        

    }
}
