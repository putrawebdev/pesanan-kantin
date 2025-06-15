<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [
                'nama_user' => 'Si Botak',
                'nama_product' => 'Mie ayam',
                'harga_product' => '12',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table('products')->insert($product);
    }
}
