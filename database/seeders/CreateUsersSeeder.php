<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'name' => 'admin',
                'email'=> 'admin@admin.com',
                'is_admin'=>'1',
                'password'=> bcrypt('1234'),
            ],
            [
                'name' => 'user',
                'email'=> 'user@user.com',
                'is_admin'=>'0',
                'password'=> bcrypt('1234'),
            ]
            ];
            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
