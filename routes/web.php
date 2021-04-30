<?php

use Illuminate\Support\Facades\Route;
use App\Models\Login;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    
    return view('admin/page/dashboard');
});

Route::get('/', function () {
  $a = Login::with('gettoei')->get();
  
    Debugbar::info(  $a);
    return view('admin/page/richmanu');
});
Route::get('/test', function () {
    return view('admin/page/test');
});


/* Migration สร้าง database สร้างแบบ Migration เพราะ ว่าจะได้ทำงานแก้ไขง่ายกับเพื่อน

โดยสร้าง Migration หริอตาราง ผ่าน 
  cmd-> php artisan make:migration create_nametable_table  

หากต้องการเพิ่ม file หรือ colum ตารางเพิ่มที่หลัง
  cmd-> php artisan make:migration add_name_to_nametable_table
  or
  cmd-> php artisan make:migration add_name_to_nametable_update --table="nametable"

หากต้องการลบข้อมูลในตารางทั้งหมด- เพื่อเทสหรือทดสอบ
  cmd-> php artisan migrate:fresh
  cmd-> php artisan migrate:reset

สร้าง คอลัมต่่อจากอันไหน
  ->after-(namecolum)
migration ทั้งหมดที่ยังไม่เคย
php artisan migration


สุดยอด 
php artisan list
php artisan help make:controller

สร้าง model controller migration
    php artisan make:model name -mc

    php artisan tinker ทดสอบ  model

*/