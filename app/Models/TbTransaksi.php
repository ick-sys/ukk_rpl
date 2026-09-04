<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TbTransaksi extends Model
{
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'id_parkir';

    protected $fillable = [
        'id_kendaraan', 'waktu_masuk', 'waktu_keluar', 'id_tarif',
        'durasi_jam', 'biaya_total', 'status', 'id_user', 'id_area',
    ];

    public function kendaraan()
    {
        return $this->belongsTo(TbKendaraan::class, 'id_kendaraan', 'id_kendaraan');
    }

    public function area()
    {
        return $this->belongsTo(TbAreaParkir::class, 'id_area', 'id_area');
    }

    public function tarif()
    {
        return $this->belongsTo(TbTarif::class, 'id_tarif', 'id_tarif');
    }

    public function user()
    {
        return $this->belongsTo(TbUser::class, 'id_user', 'id_user');
    }
}