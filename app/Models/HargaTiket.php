<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaTiket extends Model
{
    use HasFactory;
    protected $table = 'harga_tiket';
    protected $guarded = ['id_harga_tiket'];
    public $timestamps = false;
    protected  $primaryKey = 'id_harga_tiket';
    // protected $fillable = [

    // ];

}
