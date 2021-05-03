<p align="center" style="borhp der:20px solid;"><a href="https://laravel.com" target="_blank"><img src="https://avatars.githubusercontent.com/u/64632531?s=400&u=6598846a0e117d6f1c6363a2e80b59b00a12cea5&v=4" width="90"></a></p>
</p>






##  **[เทคนิคการใช้เสริม](/)**
### ดูคำสั่ง ใน laravel
    php artisan list
    php artisan make:controller
    php artisan make: -h
    php artisan make: help

### สร้าง model controller migration
    php artisan make:model name -mc
    php artisan tinker ทดสอบ  model

## **[Migration สร้าง database สร้างแบบ Migration เพราะ ว่าจะได้ทำงานแก้ไขง่ายกับเพื่อน](/)**
### โดยสร้าง Migration หริอตาราง ผ่าน 
  
    cmd-> php artisan make:migration create_nametable_table

### โดยสร้าง Migration หริอตาราง ผ่าน 
    cmd-> php artisan make:migration create_nametable_table  

### หากต้องการเพิ่ม file หรือ colum  row ตารางเพิ่มที่หลัง
    cmd-> php artisan make:migration add_name_to_nametable_table
 or
    cmd-> php artisan make:migration add_name_to_nametable_update --table="nametable"


### หากต้องการลบข้อมูลในตารางทั้งหมด- เพื่อเทสหรือทดสอบ
    cmd-> php artisan migrate:fresh
    cmd-> php artisan migrate:reset

### สร้าง คอลัมต่อจากอันไหน
  ->after-(namecolum)
### migration ทั้งหมดที่ยังไม่เคย
    php artisan migration

### drop ตาราง ทั้งหมด
    php artisan db:wipe

### seeder การทดสอบตาราง
####  เริ่มสร้าง seeder เพิ่มทดสอบเพิ่มข้อมูลในตาราง
    php artisan make:seeder Createlogin
####  รัน  seeder
    php artisan db:seed --class=Createlogin

## **[แจ้งเตือนจาก php flash massage](/)**
### blade php 
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
### laravel php 
    Session::flash('message', 'This is a message!'); 
    Session::flash('alert-class', 'alert-danger'); 
            or
    ->with(message,'This is a message!')

