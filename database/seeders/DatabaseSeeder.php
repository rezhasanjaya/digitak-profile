<?php

use App\Models\Perusahaan;
use App\Models\User;
use App\Models\Skill;
use Database\Seeders\AdminUserSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Perusahaan::create([
            'id' => 1,
            'edited_by' => 1,
            'nama_workshop' => 'Digitak',
            'alamat' => 'Jl. Gn. Batu Dalam Komplek Citra Asri Permai No.C-26, Pasirkaliki, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40514',
            'tahun_berdiri' => '2014',
            'email' => 'info@digitak.com',
            'phone' => '(+62 22) 2028 0625',
            'whatsapp' => '(+62 22) 2028 0625',
            'facebook' => 'facebook',
            'twitter' => 'twitter',
            'instagram' => 'instagram',
            'latitude' => '-6.884670666134072',
            'longitude' => '107.57010316354963',
            'logo' => 'digitak.png',
        ]);

        User::create([
            'first_name' => 'Super',
            'last_name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
        ]);
    }
}
