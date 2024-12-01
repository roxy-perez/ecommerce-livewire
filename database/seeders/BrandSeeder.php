<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::factory()->create([
            'name' => 'Apple',
        ]);

        Brand::factory()->create([
            'name' => 'Samsung',
        ]);

        Brand::factory()->create([
            'name' => 'Google',
        ]);

        Brand::factory()->create([
            'name' => 'Microsoft',
        ]);

        Brand::factory()->create([
            'name' => 'Lenovo',
        ]);

        Brand::factory()->create([
            'name' => 'Asus',
        ]);

        Brand::factory()->create([
            'name' => 'HP',
        ]);

        Brand::factory()->create([
            'name' => 'Dell',
        ]);

        Brand::factory()->create([
            'name' => 'Acer',
        ]);

        Brand::factory()->create([
            'name' => 'AMD',
        ]);

        Brand::factory()->create([
            'name' => 'Intel',
        ]);

        Brand::factory()->create([
            'name' => 'LG',
        ]);
    }
}
