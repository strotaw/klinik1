<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = "hero";
    protected $fillable = [
        'judul1',
        'judul2',
        'judul3',
        'url_img',
        'aktif'
    ];
}
