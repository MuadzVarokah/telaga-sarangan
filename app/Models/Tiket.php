<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $table = 'tiket';
    protected $guarded = ['id_tiket'];
    public $timestamps = false;
    protected  $primaryKey = 'id_tiket';
    // protected $fillable = [
    //     'id_harga_tiket',
    //     'waktu_beli',
    //     'waktu_kunjungan',
    //     'jumlah_tiket',
    //     'jenis_pembayaran',
    //     'harga_jasa',
    //     'harga_total',
    //     'kode_pembayaran',
    //     'id_user',
    //     'status'

    // ];

}
