<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loai extends Model
{
    use HasFactory;
    //default
    /**
     *ánh xạ tới table: loai
     *khoá chính: id
     *auto increment
     */

     protected $table='loai';
     protected $primaryKey='maloai';
     protected $keyType='string';

     public $encrementing = false;
     public $timestamps= false;
}
