<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TbTarif extends Model
{
    protected $table = 'tb_tarif';
    protected $primaryKey = 'id_tarif';
    protected $fillable = ['jenis_kendaraan', 'tarif_per_jam'];
}