<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class TbUser extends Authenticatable
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'nama_lengkap',
        'username',
        'password',
        'role',
        'status_aktif',
    ];

    protected $hidden = [
        'password',
    ];
}