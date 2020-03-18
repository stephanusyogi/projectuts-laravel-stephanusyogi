<?php

use Illuminate\Database\Seeder;
use App\Pelanggan;
class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 3; $i++) {
        	Pelanggan::create([
        		"nama" => "Ammar ".$i,
        		"agama" => "Islam" . $i,
        		"alamat" => "Arjosari" . $i,
        		"notelp" => "089678905"
        	]);
        }
    }
}
