<?php

use App\DataOrtu;
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
        $this->call(UsersSeeder::class);
        $this->call(DataSantriSeeder::class);
        $this->call(DataOrtuSeeder::class);
        $this->call(PersyaratanSeeder::class);
    }
}
