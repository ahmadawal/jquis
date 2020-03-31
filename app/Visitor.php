<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'nama', 'instansi', 'hp', 'alamat', 'tgl_lahir', 'temperature'
    ];
}
