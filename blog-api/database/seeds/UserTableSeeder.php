<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

       	$faker=\Faker\Factory::create();
       	// lets hash password
       	$password= Hash::make('password');

       	User::create([
       		'name'=>'Adminstrator',
       		'email'=>'test@tes.com',
       		'password'=>$password

       	]);

       	for ($i=0; $i < 10 ; $i++) { 
       		# code...

       		User::create([

       		'name'=>$faker->name,
       		'email'=>$faker->email,
       		'password'=>$password

       		]);
       	}

    }
}
