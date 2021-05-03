<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\User;
class Login extends Model
{
    // protected $visible = ['id','username','password','roles','user','รหัสเข้าใช้','พาสเวิด','บทบาท'];

    use HasFactory;
    public $timestamps = false;
    protected $maps =[
        'username' => 'customer_id',
        'password' => 'customer_name',
      ];
    public function user()
    {
        return $this->hasOne(User::class)
            ;
    }

   
    public static function user_ho(){
        return Login::with(['user'=>function($q)
                {
                    $q->select('login_id','name as ชื่อ','email as อีเมล');
                }])->select('id','username as รหัสเข้าใช้','password as พาสเวิด','roles as บทบาท')->get()->toArray();
    }

    public static function joinuser(){
        
        return Login::leftJoin('users','logins.id','=','users.login_id')
        ->select('logins.id as ไอดี','logins.username as รหัสเข้าใช้','logins.password as พาสเวิด','logins.roles as บทบาท','users.name as ชื่อ','users.email as อีเมล')
        ->get()
        ->toArray();
    }

   


}
