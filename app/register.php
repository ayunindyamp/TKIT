<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable = ['name','alamat','no_hp','pekerjaan','email', 'password','role','user_id'];
}
