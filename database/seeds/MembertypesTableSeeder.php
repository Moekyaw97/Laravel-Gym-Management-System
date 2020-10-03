<?php

use Illuminate\Database\Seeder;
use App\Membertype;

class MembertypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $membertypes=['diamond','gold','standard'];
       foreach ($membertypes as $row) {
        	Membertype::create (['name'=>$row]);
        } 
    }
}
