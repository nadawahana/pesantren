<?php

use App\User;
use App\DataSantri;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DataSantriSeeder extends Seeder
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
            $filename = $faker->uuid . '.jpg';
            $fileContents = 'Gambar1'; // Replace with your desired file contents

            // Save the file to the target directory
            $filePath = storage_path('app/public/files/' . $filename);
            file_put_contents($filePath, $fileContents);

            $fileUrl = Storage::url($filePath);
            // $user = Auth::user();

            DataSantri::create([
                'nama_lengkap' => $faker->name,
                'nisn' => $faker->numerify('############'),
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date(),
                'jenkel' => $faker->randomElement(['laki-laki', 'perempuan']),
                'asal_sekolah' => $faker->company,
                'jalur_masuk' => $faker->randomElement(['asrama', 'non-asrama']),
                'hp_ayah' => $faker->phoneNumber,
                'file_name' => $filename,
                'user_id' => User::all()->random()->id,
            ]);
        }
    }
}
