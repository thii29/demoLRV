<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhaxb extends Model
{
    use HasFactory;
    protected $table = 'nhaxb';
    protected $primaryKey ='manxb';
    protected $keyType ='string';
    protected $fillable =['manxb','tennxb'];
    public $timestamps = false;
    protected $encrementing = false;
    public function sach(){
        return $this->hasMany(Sach::class,'manxb','manxb');
    }
}
