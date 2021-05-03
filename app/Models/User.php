<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;
    public function login()
    {
        return $this->belongsTo(User::class);
    }

    public static function login_ho(){
        return  User::with('login')->get()->toArray();
    }

    public static function joinuser(){
        return Login::leftJoin('users','logins.id','=','users.login_id')->get();
    }



}
