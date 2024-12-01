<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Size::factory()->create([
            'name' => 'Small',
        ]);

        Size::factory()->create([
            'name' => 'Medium',
        ]);

        Size::factory()->create([
            'name' => 'Large',
        ]);

        Size::factory()->create([
            'name' => 'Extra Large',
        ]);

        Size::factory()->create([
            'name' => '2XL',
        ]);

        Size::factory()->create([
            'name' => '3XL',
        ]);
    }
}
