<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey='id';
    protected $fillable = [
        'id','user_id','bank','nama','slug','lampiran'];
}
