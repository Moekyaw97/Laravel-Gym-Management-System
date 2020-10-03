<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
        	'name'		=> 'admin',  	
        	'email'		=>	'admin@gmail.com',
        	'password'	=>	Hash::make('123456789'),
        	
        ]);
        $admin->assignRole('admin');

        $member = User::create([
        	'name'		=> 'Mg Mg',
        	'email'		=>	'mgmg@gmail.com',
        	'password'	=>	Hash::make('123456789'),
        	
        ]);
        $member->assignRole('member');
    }
}
