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
        $color_classes = [
            'danger',
            'success',
            'primary',
            'warning',
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
    
        foreach ($colors as $key => $color) {
            DB::table('colors')->insert([
                'name' => $color,
                'classe_bs' => $color_classes[$key],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
