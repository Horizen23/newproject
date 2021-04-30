<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('login_id');
            $table->foreign('login_id')->references('id')->on('logins');
        });
        DB::table('logins')->insert([
            ['username' => 'froy123', 'password' => 0, 'roles' => 'admin'],
            ['username' => 'toei123', 'password' => 0, 'roles' => 'admin'],
        ]);

        DB::table('users')->insert([
            ['name' => 'froy123', 'email' => 'g@','login_id'=>1],
            ['name' => 'toei123', 'email' => 'g@','login_id'=>2],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
