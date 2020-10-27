<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,18)->create();

        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'username' => 'admin',
                'password' => bcrypt('admin123'),
                'email_verified_at' => Carbon::now(),
                'is_admin' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'username' => 'user',
                'password' => bcrypt('user123'),
                'email_verified_at' => Carbon::now(),
                'is_admin' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        \App\User::insert($users);
    }
}
