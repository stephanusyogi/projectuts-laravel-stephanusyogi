<?php

use Illuminate\Database\Seeder;
use App\Camping;
class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 3; $i++) {
        	Camping::create([
        		"nama_barang" => "Tenda ".$i,
        		"merk_barang" => "Eiger" . $i,
        		"harga_barang" => "Rp. 300.000"
        	]);
        }
    }
}
