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
        	'name'		=> 'Admin',  	
        	'email'		=>	'admin@gmail.com',
        	'password'	=>	Hash::make('123456'),
        	
        ]);
        $admin->assignRole('admin');

          $member = User::create([
            'name'      => 'Member1',
            'email'     =>  'member1@gmail.com',
            'password'  =>  Hash::make('123456'),
            
        ]);
        $member->assignRole('member');
    }
}
