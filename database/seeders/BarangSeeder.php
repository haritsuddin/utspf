<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => '011',
                'nama_barang' => 'beras sunco',
                'harga_barang' => 56000,
                'deskripsi_barang' => 'sunco 5 kg',
                'satuan_id' => 1
            ],
            [
                'kode_barang' => '012',
                'nama_barang' => 'Beras BULOG',
                'harga_barang' => 1000000,
                'deskripsi_barang' => 'Beras bulog 100 kg',
                'satuan_id' => 2
            ]
            ]);

    }
}
