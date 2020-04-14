<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 101; $i++) { 
            Mahasiswa::create([
                "name" => "Mahasiswa ".$i,
                "nim" => "1831407141110".$i,
                "address" => "Malang",
                "foto" => "foto 1"
            ]);
        }
        
    }
}
