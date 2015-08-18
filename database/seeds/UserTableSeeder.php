<?php 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use KingsVilleApp\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        
        User::create([
            'id' => str_random(25),
        	'email' => 'foo@bar.com' ,
        	'firstname' => 'foo',
        	'middlename' => 'at',
        	'lastname' => 'bar',
        	'password' => bcrypt('foo'),
        	'gender' => 'Female',
        	'mobile' => '69',
        	'landline'=> '69',
        	'address' => 'red district',
            'usergroup' => 'admin',
            'status' => 'active',
            'linktoken' => str_random(25)

        	]);
        User::create([
            'id' => str_random(25),
            'email' => 'bar@foo.com' ,
            'firstname' => 'bar',
            'middlename' => 'at',
            'lastname' => 'f00',
            'password' => bcrypt('foo'),
            'gender' => 'male',
            'mobile' => '69',
            'landline'=> '69',
            'address' => 'red district',
            'usergroup' => 'homeowner',
            'status' => 'active',
            'linktoken' => str_random(25)
            ]);
    }
}