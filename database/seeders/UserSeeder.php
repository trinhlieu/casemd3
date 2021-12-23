<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Son';
        $user->birthday = '1998-04-30';
        $user->email = 'hson@gmail.com';
        $user->role = 2;
        $user->password = Hash::make('123456');
        $user->phone = '0999999999';
        $user->avatar = '1.jpg';
        $user->save();

        $user = new User();
        $user->name = 'Ngoc';
        $user->birthday = '1998-09-15';
        $user->email = 'tnl@gmail.com';
        $user->role = 2;
        $user->password = Hash::make('123456');
        $user->phone = '0988888888';
        $user->avatar = '1.jpg';
        $user->save();
    }
}
