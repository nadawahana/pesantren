<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Persyaratan;
use App\User;

class PersyaratanSeeder extends Seeder
{
    public function run()
    {
        // Validate and store files
        $smt2File = Storage::putFile('public/persyaratan', $this->getDummyFile());
        $smt1File = Storage::putFile('public/persyaratan', $this->getDummyFile());
        $kkFile = Storage::putFile('public/persyaratan', $this->getDummyFile());
        $penghargaanFile = Storage::putFile('public/persyaratan', $this->getDummyFile());

        // Get a random user
        $user = User::inRandomOrder()->first();

        // Create Persyaratan record
        Persyaratan::create([
            'smt2-kls5' => basename($smt2File),
            'smt1-kls6' => basename($smt1File),
            'KK' => basename($kkFile),
            'tingkat' => 'kota', // Replace with desired value or remove if nullable
            'penghargaan' => basename($penghargaanFile),
            'user_id' => $user->id,
            'ijazah' => '90', // Replace with desired value or remove if nullable
            'akta_kelahiran' => '90', // Replace with desired value or remove if nullable
            'pas_foto' => '90', // Replace with desired value or remove if nullable
            '1kls5_agama' => '90', // Replace with desired value
            '1kls5_pkn' => '90', // Replace with desired value
            '1kls5_bIndo' => '90', // Replace with desired value
            '1kls5_mtk' => '90', // Replace with desired value
            '1kls5_ipa' => '90', // Replace with desired value
            '1kls5_ips' => '90', // Replace with desired value
            '1kls5_senbud' => '90', // Replace with desired value
            '1kls5_penjas' => '90', // Replace with desired value
            '1kls5_rata2' => '90', // Replace with desired value
            '2kls5_agama' => '90', // Replace with desired value
            '2kls5_pkn' => '90', // Replace with desired value
            '2kls5_bIndo' => '90', // Replace with desired value
            '2kls5_mtk' => '90', // Replace with desired value
            '2kls5_ipa' => '90', // Replace with desired value
            '2kls5_ips' => '90', // Replace with desired value
            '2kls5_senbud' => '90', // Replace with desired value
            '2kls5_penjas' => '90', // Replace with desired value
            '2kls5_rata2' => '90', // Replace with desired value
            '1kls6_agama' => '90', // Replace with desired value
            '1kls6_pkn' => '90', // Replace with desired value
            '1kls6_bIndo' => '90', // Replace with desired value
            '1kls6_mtk' => '90', // Replace with desired value
            '1kls6_ipa' => '90', // Replace with desired value
            '1kls6_ips' => '90', // Replace with desired value
            '1kls6_senbud' => '90', // Replace with desired value
            '1kls6_penjas' => '90', // Replace with desired value
            '1kls6_rata2' => '90', // Replace with desired value
        ]);
    }

    private function getDummyFile()
    {
        $dummyFilePath = 'storage\app\public\persyaratan\3mjgv1CqnxcnbyCDh3P3jbFe2GbCLrAxq1DgHFCp.jpg'; // Replace with the actual path to your dummy file
        return new \Illuminate\Http\UploadedFile($dummyFilePath, '3mjgv1CqnxcnbyCDh3P3jbFe2GbCLrAxq1DgHFCp.jpg');
    }
}
