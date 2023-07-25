<?php

use App\User;
use App\DataOrtu;
use App\DataSantri;
use App\Gelombang1;
use App\NilaiTotal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'adadeh',
            'no_hp' => 'no_hp',
            'username' => 'admin',
            'level' => 'admin',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 2,
            'name' => 'santri',
            'email' => 'santri@santri.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'adadeh',
            'no_hp' => 'no_hp',
            'username' => 'santri',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 3,
            'name' => 'Fatma',
            'email' => 'fatma@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Batusangkar',
            'no_hp' => '0897643',
            'username' => 'fatma',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 4,
            'name' => 'test@gmail.com',
            'email' => 'tes@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'test',
            'no_hp' => '0897',
            'username' => 'testes',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 5,
            'name' => 'Rachmadani Zumaira',
            'email' => 'Rachmadani@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Aripan, X koto Singkarak',
            'no_hp' => '085234568913',
            'username' => 'Rachmadani Zumaira',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 6,
            'name' => 'Miftahul Jannah',
            'email' => 'miftahul@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Aripan, X koto Singkarak',
            'no_hp' => '082345654321',
            'username' => 'Miftahul Jannah',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 7,
            'name' => 'Muhammad Ridho',
            'email' => 'Muhammad@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Atar',
            'no_hp' => '082345676542',
            'username' => 'Muhammad Ridho',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 8,
            'name' => 'Arifah Aini',
            'email' => 'arifah@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Jln. Parak Jua, Lima Kaum',
            'no_hp' => '0987654321',
            'username' => 'Arifah Aini',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 9,
            'name' => 'Intan Nur Azizah',
            'email' => 'intan@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Tabek',
            'no_hp' => '082345654321',
            'username' => 'Intan Nur Azizah',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 10,
            'name' => 'Reisha Vira Purnama',
            'email' => 'reisha@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Kubu Rajo',
            'no_hp' => '0876543212',
            'username' => 'Reisha Vira Purnama',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 11,
            'name' => 'Fatya Miftahul',
            'email' => 'fatya@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Kotp Tuo',
            'no_hp' => '082345678764',
            'username' => 'Fatya Miftahul',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 12,
            'name' => 'Syahrul Ramadhan',
            'email' => 'syahrul@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Simpuruik',
            'no_hp' => '0876543276',
            'username' => 'Syahrul Ramadhan',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 13,
            'name' => 'Asna Taini',
            'email' => 'asna@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Koto baru',
            'no_hp' => '0823456798',
            'username' => 'Asna Taini',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 14,
            'name' => 'Hutrika Rahma Linda',
            'email' => 'hutrika@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Simpuruik',
            'no_hp' => '081234543212',
            'username' => 'Hutrika Rahma Linda',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 15,
            'name' => 'Putri Zatika',
            'email' => 'putri@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Koto baru',
            'no_hp' => '082345432123',
            'username' => 'Putri Zatika',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 16,
            'name' => 'Muzammir GIM Zaki',
            'email' => 'muzammir@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Kayu Binduak',
            'no_hp' => '081234543212',
            'username' => 'Muzammir GIM Zaki',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 17,
            'name' => 'Zikra',
            'email' => 'zikra@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Tabek',
            'no_hp' => '082345654321',
            'username' => 'Zikra',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 18,
            'name' => 'Zikri',
            'email' => 'zikri@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Tabek',
            'no_hp' => '082234543234',
            'username' => 'Zikri',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 19,
            'name' => 'Dea Nova Lianti',
            'email' => 'dea@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Tanjung Limau',
            'no_hp' => '082234543276',
            'username' => 'Dea Nova Lianti',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 20,
            'name' => 'Muhammad Ramadhani',
            'email' => 'ramadhani@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Tabek',
            'no_hp' => '08545678765',
            'username' => 'Muhammad Ramadhani',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 21,
            'name' => 'Talita Azmi',
            'email' => 'talita@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Sijunjung',
            'no_hp' => '08976543',
            'username' => 'Talita Azmi',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        User::create([
            'id' => 22,
            'name' => 'Wahyuni Azizah',
            'email' => 'wahyuni@gmail.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'alamat' => 'Padang Panjang',
            'no_hp' => '082345676543',
            'username' => 'Wahyuni Azizah',
            'level' => 'calon-santri',
            'remember_token' => NULL,
        ]);

        DataOrtu::create([
            'id' => 1,
            'nama_ayah' => 'Rudy Murazik',
            'tempat_lahir_ayah' => 'West Vicky',
            'tanggal_lahir_ayah' => '1981-03-17',
            'ket_ayah' => 'masih_hidup',
            'pekerjaan_ayah' => 'Timing Device Assemblers',
            'penghasilan_ayah' => '5jt-10jt',
            'nama_ibu' => 'Mrs. Yvonne Keebler V',
            'tempat_lahir_ibu' => 'Olsonberg',
            'tanggal_lahir_ibu' => '2019-01-18',
            'ket_ibu' => 'masih_hidup',
            'pekerjaan_ibu' => 'Telecommunications Facility Examiner',
            'penghasilan_ibu' => '10jt+',
            'alamat' => '664 Stevie Fords Suite 363\nEthamouth, RI 25905-9863',
            'user_id' => 2,
        ]);

        NilaiTotal::create([
            'id' => 1,
            'user_id' => 2,
            'baca_alquran' => '90',
            'sholat' => '90',
            'tahfidz' => '90',
            'ujian_tulisan' => '90',
        ]);

        DataSantri::create([
            'id' => 1,
            'nama_lengkap' => 'Julio Murray',
            'nisn' => '141576375999',
            'tempat_lahir' => 'Mantefurt',
            'tanggal_lahir' => '1992-05-13',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'Hahn and Sons',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '+1-795-921-7021',
            'file_name' => '28c61008-dfc6-3b94-a8c7-8fff96568d65.jpg',
            'user_id' => 2,
        ]);



        DataSantri::create([
            'id' => 2,
            'nama_lengkap' => 'Fatma',
            'nisn' => '9988',
            'tempat_lahir' => 'batusangkar',
            'tanggal_lahir' => '2023-07-21',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'SMP 1 Pekanbaru',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '0897643',
            'file_name' => 'xFZWopshdblEtTrOx0FkJkG4vIrmo2TFbWGxqwca.png',
            'user_id' => 3,
        ]);



        DataSantri::create([
            'id' => 3,
            'nama_lengkap' => 'Rachmadani Zumaira',
            'nisn' => '123',
            'tempat_lahir' => 'batusangkar',
            'tanggal_lahir' => '2007-02-22',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'Pondok Pesantren Thawalib Tanjung Limau',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '082145678765',
            'file_name' => 'me1m4TGxYy6aNpqrYmny3D4GCiML98p16gYSB444.jpg',
            'user_id' => 5,
        ]);



        DataSantri::create([
            'id' => 4,
            'nama_lengkap' => 'Miftahul Jannah',
            'nisn' => '1234',
            'tempat_lahir' => 'Singkarak',
            'tanggal_lahir' => '2007-01-30',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'Pondok Pesantren Thawalib Tanjung Limau',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '082345654321',
            'file_name' => '7oIKGUjWGolJCB7htq9mJGUpL9SthPOsSs1oTjCP.jpg',
            'user_id' => 6,
        ]);



        DataSantri::create([
            'id' => 5,
            'nama_lengkap' => 'Muhammad Ridho',
            'nisn' => '1234',
            'tempat_lahir' => 'Atar',
            'tanggal_lahir' => '2007-06-05',
            'jenkel' => 'laki-laki',
            'asal_sekolah' => 'Pondok Pesantren Thawalib Tanjung Limau',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '082345676542',
            'file_name' => 'uUvcvBy59i8nJEGoRky7jOMnYIwE4aP3UbNyscyi.jpg',
            'user_id' => 7,
        ]);



        DataSantri::create([
            'id' => 6,
            'nama_lengkap' => 'Arifah Aini',
            'nisn' => '1234',
            'tempat_lahir' => 'Jln. Parak Jua, Lima Kaum',
            'tanggal_lahir' => '2007-05-07',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'Pondok Pesantren Thawalib Tanjung Limau',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '0987654321',
            'file_name' => 'jauyXXDolfYAcqx8BgToOTuOZBLXzBtxjHr0tUHI.jpg',
            'user_id' => 8,
        ]);



        DataSantri::create([
            'id' => 7,
            'nama_lengkap' => 'Intan Nur Azizah',
            'nisn' => '1234',
            'tempat_lahir' => 'Tabek',
            'tanggal_lahir' => '2008-01-29',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'Pondok Pesantren Thawalib Tanjung Limau',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '082345654321',
            'file_name' => 'P1gEVslOQtOrnC8oNLp7wTWDCCLApRVLWgtbhiJY.jpg',
            'user_id' => 9,
        ]);



        DataSantri::create([
            'id' => 8,
            'nama_lengkap' => 'Reisha Vira Purnama',
            'nisn' => '9875',
            'tempat_lahir' => 'Kubu Rajo',
            'tanggal_lahir' => '2006-12-31',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'Pondok Pesantren Thawalib Tanjung Limau',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '0876543212',
            'file_name' => 'fUKTnFXIsUfEAQDM8csMG7fzBmQp2sNQtQH74j8o.jpg',
            'user_id' => 10,
        ]);



        DataSantri::create([
            'id' => 9,
            'nama_lengkap' => 'Fatya Miftahul',
            'nisn' => '8765',
            'tempat_lahir' => 'Koto Tuo',
            'tanggal_lahir' => '2007-11-15',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'Pondok Pesantren Thawalib Tanjung Limau',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '082345678764',
            'file_name' => 'B9fEe7ixp8krHp2b7hyFKsOm2S6VNtkhC4kvmcDY.jpg',
            'user_id' => 11,
        ]);



        DataSantri::create([
            'id' => 10,
            'nama_lengkap' => 'Syahrul Ramadhan',
            'nisn' => '7653',
            'tempat_lahir' => 'Simpuruik',
            'tanggal_lahir' => '2007-06-05',
            'jenkel' => 'laki-laki',
            'asal_sekolah' => 'Pondok Pesantren Thawalib Tanjung Limau',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '0876543276',
            'file_name' => '3YmFN3jkogLVCrGrybNLfkDXvNaMmrr9IfhAQHor.jpg',
            'user_id' => 12,
        ]);



        DataSantri::create([
            'id' => 11,
            'nama_lengkap' => 'Asna Taini',
            'nisn' => '9875',
            'tempat_lahir' => 'Koto baru',
            'tanggal_lahir' => '2007-06-05',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'SMPN 2 Padang Ganting',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '0823456798',
            'file_name' => 'Q6M4AE9D3PAMWrQppxHa23qhrb9pbHCZjCyKplLh.jpg',
            'user_id' => 13,
        ]);



        DataSantri::create([
            'id' => 12,
            'nama_lengkap' => 'Hutrika Rahma Linda',
            'nisn' => '7653',
            'tempat_lahir' => 'Simpuruik',
            'tanggal_lahir' => '2007-09-10',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'Pondok Pesantren Thawalib Tanjung Limau',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '081234543212',
            'file_name' => 'j41ERmFGoSjzxFCLkVq4IFqkdn6DDY7bohTBJiw6.jpg',
            'user_id' => 14,
        ]);



        DataSantri::create([
            'id' => 13,
            'nama_lengkap' => 'Putri Zatika',
            'nisn' => '9087',
            'tempat_lahir' => 'Simabur',
            'tanggal_lahir' => '2007-02-06',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'MTS Pembangunan Padang Panjang',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '082345432123',
            'file_name' => 'XoiGHcqzsp1jd4AIRqKBAKWoC9sF3VwNm4sA7g30.jpg',
            'user_id' => 15,
        ]);



        DataSantri::create([
            'id' => 14,
            'nama_lengkap' => 'Muzammir GIM Zaki',
            'nisn' => '7678',
            'tempat_lahir' => 'Kayu Binduak',
            'tanggal_lahir' => '2007-07-12',
            'jenkel' => 'laki-laki',
            'asal_sekolah' => 'MTS  Balimbing',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '081234543212',
            'file_name' => 'YfiqKCge41soBNM3OVdeMhhiTCK03hde8U09Qrb4.jpg',
            'user_id' => 16,
        ]);



        DataSantri::create([
            'id' => 15,
            'nama_lengkap' => 'Zikra',
            'nisn' => '8743',
            'tempat_lahir' => 'Tabek',
            'tanggal_lahir' => '2008-01-28',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'MTS Nurul Izzah',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '082345654321',
            'file_name' => 'K4MKQ1so969gI3YcEv68rqcwWJXnhCO7ygtPNfe8.jpg',
            'user_id' => 17,
        ]);



        DataSantri::create([
            'id' => 16,
            'nama_lengkap' => 'Zikri',
            'nisn' => '3454',
            'tempat_lahir' => 'Tabek',
            'tanggal_lahir' => '2007-06-05',
            'jenkel' => 'laki-laki',
            'asal_sekolah' => 'MTS Nurul Izzah',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '082234543234',
            'file_name' => 'hlHqB2v5iA8RxVPnD06OtWFGqNK8u4RbHaFtvT9P.jpg',
            'user_id' => 18,
        ]);



        DataSantri::create([
            'id' => 17,
            'nama_lengkap' => 'Dea Nova Lianti',
            'nisn' => '7890',
            'tempat_lahir' => 'Tanjung Limau',
            'tanggal_lahir' => '2007-10-18',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'MTS Balimbing',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '082234543276',
            'file_name' => 'CHFXAVNGWpqJt8nfeC6h8hGp5OQ9Dpawrpe37Qtx.jpg',
            'user_id' => 19,
        ]);



        DataSantri::create([
            'id' => 18,
            'nama_lengkap' => 'Muhammad Ramadhani',
            'nisn' => '9054',
            'tempat_lahir' => 'Simabur',
            'tanggal_lahir' => '2007-08-10',
            'jenkel' => 'laki-laki',
            'asal_sekolah' => 'MTS Nurul Iman',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '08545678765',
            'file_name' => '6ZalhIZ94c47Ow3xGKFx0ee4OGsob9GGHTkGj0WD.jpg',
            'user_id' => 20,
        ]);



        DataSantri::create([
            'id' => 19,
            'nama_lengkap' => 'Talita Azmi',
            'nisn' => '6542',
            'tempat_lahir' => 'Padang Panjang',
            'tanggal_lahir' => '2007-06-07',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'SMPN 05 Padang Panjang',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '8976543',
            'file_name' => 'reRMru3bfPuFrtpG94kBOXTXo2JCZPYGvxsm0Yv3.jpg',
            'user_id' => 21,
        ]);



        DataSantri::create([
            'id' => 20,
            'nama_lengkap' => 'Wahyuni Azizah',
            'nisn' => '9864',
            'tempat_lahir' => 'Padang Panjang',
            'tanggal_lahir' => '2005-06-15',
            'jenkel' => 'perempuan',
            'asal_sekolah' => 'SMP 05 Padang Panjang',
            'jalur_masuk' => 'Asrama',
            'hp_ayah' => '082345676543',
            'file_name' => 'buoN6StEB8406j3OsMDjz9rC8xTAEIP38WTdWfYy.jpg',
            'user_id' => 22,
        ]);
    }
}
