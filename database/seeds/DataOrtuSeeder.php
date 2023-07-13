<?php

use App\DataOrtu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Faker\Factory as Faker;

class DataOrtuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 1000; $i++) {
            $validatedData = [
                'nama_ayah' => $faker->name,
                'tempat_lahir_ayah' => $faker->city,
                'tanggal_lahir_ayah' => $faker->date(),
                'ket_ayah' => $faker->randomElement(['masih_hidup', 'sudah_wafat']),
                'pekerjaan_ayah' => $faker->jobTitle,
                'penghasilan_ayah' => $faker->randomElement(['1jt-3jt', '3jt-5jt', '5jt-10jt', '10jt+']),
                'nama_ibu' => $faker->name,
                'tempat_lahir_ibu' => $faker->city,
                'tanggal_lahir_ibu' => $faker->date(),
                'ket_ibu' => $faker->randomElement(['masih_hidup', 'sudah_wafat']),
                'pekerjaan_ibu' => $faker->jobTitle,
                'penghasilan_ibu' => $faker->randomElement(['1jt-3jt', '3jt-5jt', '5jt-10jt', '10jt+']),
                'alamat' => $faker->address,
            ];

            $user2 = Auth::user();
            $validatedData['user_id'] = 'admin';

            DataOrtu::create($validatedData);
        }
    }
}
