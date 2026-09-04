<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TbAreaParkir extends Model
{
    protected $table = 'tb_area_parkir';
    protected $primaryKey = 'id_area';
    protected $fillable = ['nama_area', 'kapasitas', 'terisi'];
}