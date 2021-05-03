<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\User;
Use App\Models\Login;
class Createlogin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logins = [
            ['username' => 'froy1d3', 'password' => 0, 'roles' => ' '],
            ['username' => 't', 'password' => 0, 'roles' => ' '],
        ];
        $Users = [
            ['name' => 'froy123', 'email' => 'g@','login_id'=>3],
            ['name' => 'toei123', 'email' => 'g@','login_id'=>4],
        ];
        foreach ($logins  as $key => $login) {
            Login::create($login);
        }
      
        foreach ($Users  as $key => $User) {
            User::create( $User);
        }
      
     
    }
}
