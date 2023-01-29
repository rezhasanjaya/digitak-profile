<?php

use App\Models\Perusahaan;
use App\Models\User;
use App\Models\Portofolio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Super',
            'last_name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'role' => 1,
        ]);

        User::create([
            'first_name' => 'Adi',
            'last_name' => 'Maulia',
            'email' => 'admin2@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin456'),
        ]);

        User::create([
            'first_name' => 'Rezha',
            'last_name' => 'Sanjaya',
            'email' => 'admin3@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin212'),
        ]);

        Perusahaan::create([
            'id_prshn' => 1,
            'edited_by' => 1,
            'nama_workshop' => 'Digitak',
            'alamat' => 'Jl. Gn. Batu Dalam Komplek Citra Asri Permai No.C-26, Pasirkaliki, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40514',
            'tahun_berdiri' => '2014',
            'email_workshop' => 'info@digitak.id',
            'phone' => '(+62 22) 2028 0625',
            'whatsapp' => '+6282028062554',
            'facebook' => 'digitak.id',
            'twitter' => 'digitak.id',
            'instagram' => 'digitak.id',
            'latitude' => '-6.884670666134072',
            'longitude' => '107.57010316354963',
            'image' => 'digitak.png',
            'waktu_update' => now(),
        ]);

        Portofolio::create([
            'created_by' => 1,
            'nama_aplikasi' => 'Penghargaan Wahana Tata Nugraha',
            'kategori' => 'Website',
            'tahun_pembuatan' => '2019',
            'klien' => 'Kementrian Perhubungan',
            'link_demo' => '-',
            'keterangan' => 'Website Penghargaan Wahana Tata Nugraha Oleh Kementrian Perhubungan',
            'image' => '20230129203633.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
