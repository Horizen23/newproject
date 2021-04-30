<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\User;
class Login extends Model
{
    use HasFactory;

    public function gettoei()
    {
        return $this->hasOne(User::class);
    }



}
