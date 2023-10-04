<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'code'=>'0001',
            'name'=>'Kodomo Sikat Gigi',
            'price'=> 8000
        ]);
        Product::create([
            'code'=>'0002',
            'name'=>'Kodomo Pasta Gigi',
            'price'=> 6000
        ]);
        Product::create([
            'code'=>'0003',
            'name'=>'Mie Sedap',
            'price'=> 2600
        ]);
        Product::create([
            'code'=>'0004',
            'name'=>'Soklin 700ml',
            'price'=> 12000
        ]);
        Product::create([
            'code'=>'0005',
            'name'=>'Sedaap Kecap 550ml',
            'price'=> 23000
        ]);
    }
}
