<?php

namespace App\Models;
use App\Models\nhaxb;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sach extends Model
{
    use HasFactory;
    protected $table='sach';
    protected $primaryKey='masach';
    protected $keyType='string';
    protected $fillable =['masach','tensach','gia','mota','hinh','maloai','manxb'];
    public $encrementing = false;
    public $timestamps= false;
    public function nhaxb(){
        return $this->belongsTo(nhaxb::class,'manxb','manxb');
    }
    public function loai(){
        return $this->belongsTo(loai::class,'maloai','maloai');
    }
}
