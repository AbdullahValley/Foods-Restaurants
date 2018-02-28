<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'username'   => 'Abdullah',
                'email'      => 'abdullah@gmail.com',
                'password'   => '$2y$10$oinDFLagsFhtE88Vehks3.LqWmcukGP0.Lq1OUIDrVsyZRydYLvIm',
                'phone'      => '01737312878',
                'role'       => 1,
                'member_id'  => 1,
            ],

            [
                'username'  => 'Noman',
                'email'     => 'noman19bd@yahoo.com',
                'password'  => '$2y$10$oinDFLagsFhtE88Vehks3.LqWmcukGP0.Lq1OUIDrVsyZRydYLvIm',
                'phone'     => '01558426194',
                'role'      => 1,
                'member_id' => 1,
            ]
        ];
        DB::table('users')->insert($users);
    }
}