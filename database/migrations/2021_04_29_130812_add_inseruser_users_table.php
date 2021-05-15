<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInseruserUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(
            [    
                [
                    'username' => 'admin',
                    'name' => 'admin',
                    'sex' => 'admin',
                    'email' => 'admin',
                    'telephone' => 'admin',
                    'address' => 'admin',
                    'proto' => 'admin',
                    'parent_ training' => 1,
                    'Birthday' => 'admin',
                ],
                [
                    'username' => 'admin1',
                    'name' => 'admin',
                    'sex' => 'admin',
                    'email' => 'admin',
                    'telephone' => 'admin',
                    'address' => 'admin',
                    'proto' => 'admin',
                    'parent_ training' => 1,
                    'Birthday' => 'admin',
                ],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
