<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signup extends Model
{
    protected $fillable=['name','gender','mobile','email','password'];
}
