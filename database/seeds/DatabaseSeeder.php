<?php

use App\DataOrtu;
use App\Gelombang1;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class, 3)
        //     ->create();
        Gelombang1::create([
            'batas_waktu_pendaftaran' => now(),
            'ujian_lisan' => now()->addDays(7),
            'ujian_tulisan' => now()->addDays(7),
            'pengumuman_hasil' => now()->addDays(7),
            'daftar_ulang' => now()->addDays(7),
        ]);

        $this->call(UsersSeeder::class);
        $this->call(DataSantriSeeder::class);
        $this->call(DataOrtuSeeder::class);
        $this->call(PersyaratanSeeder::class);
    }
}
