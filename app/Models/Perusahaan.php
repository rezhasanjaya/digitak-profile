<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    public $table = "perusahaan";
    public $remember_token = false;
    public $incrementing = false;

    protected $fillable = [
        'nama_pt', 'nama_studio', 'tahun_berdiri', 'alamat', 'email', 'phone', 'whatsapp', 'facebook', 'instagram', 'twitter', 'latitude', 'longitude', 'logo'
    ];

    protected $hidden = [
        'portofolio_id', 'perusahaan_id',
    ];
}
