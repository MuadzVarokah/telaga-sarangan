<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKM extends Model
{
    use HasFactory;
    protected $table = 'umkm';
    protected $guarded = ['id_umkm'];
    public $timestamps = false;
    protected  $primaryKey = 'id_umkm';
    // protected $fillable = [

    // ];

}
