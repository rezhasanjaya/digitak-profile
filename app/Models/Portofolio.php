<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    public $table = "portofolio";
    public $remember_token = false;

    protected $fillable = [
        'nama_aplikasi', 'tahun_pembuatan', 'kategori', 'klien', 'link_demo', 'keterangan', 'gambar',
    ];


    protected $guarded = ['id_portofolio', 'craeted_by'];
}
