<?php

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
        $currentDateTime = Carbon::now();
        User::create([
            'first_name' => 'Super',
            'last_name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'jurusan' => 'admin',
            'tingkat' => 'Admin',
            'tanggal_masuk' => $currentDateTime,
            'tanggal_berakhir' => null,
            'skill_id' => null,
            'isActive' => 1,
            'keahlian' => 'Admin',
            'role' => 0,
        ]);
    }
}
