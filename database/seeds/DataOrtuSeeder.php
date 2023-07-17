<?php

use App\User;
use App\DataOrtu;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

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

        for ($i = 0; $i < 1; $i++) {
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
                'user_id' => User::all()->random()->id,
            ];

            DataOrtu::create($validatedData);
        }
    }
}
