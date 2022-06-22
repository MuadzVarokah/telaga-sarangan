<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KatUMKM extends Model
{
    use HasFactory;
    protected $table = 'kat_umkm';
    protected $guarded = ['id_kat_umkm'];
    public $timestamps = false;
    protected  $primaryKey = 'id_kat_umkm';
    // protected $fillable = [

    // ];

}
