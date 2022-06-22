<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wahana extends Model
{
    use HasFactory;
    protected $table = 'wahana';
    protected $guarded = ['id_wahana'];
    public $timestamps = false;
    protected  $primaryKey = 'id_wahana';
    // protected $fillable = [

    // ];

}
