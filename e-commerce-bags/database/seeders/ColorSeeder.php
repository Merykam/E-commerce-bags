<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            'Red',
            'Green',
            'Blue',
            'Yellow',
            'Purple',
            'Pink',
            'Orange',
            'Brown',
            'Black',
            'White',
            'Gray',
            'Teal',
            'Magenta',
            'Cyan',
            'Maroon',
            'Navy',
            'Olive',
            'Turquoise',
            'Lavender',
            'Indigo',
        ];
    
        foreach ($colors as $color) {
            DB::table('colors')->insert([
                'name' => $color,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
