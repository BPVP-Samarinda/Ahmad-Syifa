<?php

namespace Database\Seeders;
use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data = [
            ['nama' => 'bolu peca',
            'deskripsi' => 'kue bolu disiran gulmer',
            'harga' => 10_000,
            'stok' => 20,],
    
           ['nama' => 'bolu kacang',
            'deskripsi' => 'kue bolu toping kacang',
            'harga' => 15_000,
            'stok' => 30,],
    
            ['nama' => 'bolu keju',
            'deskripsi' => 'kue bolu toping keju',
            'harga' => 20_000,
            'stok' => 20,],
            ['nama' => 'bolu coklat',
            'deskripsi' => 'kue bolu rasa coklat',
            'harga' => 20_000,
            'stok' => 20,],
           ];
    
           foreach($data as $item){
            Produk::create($item);
           }

    }
}
