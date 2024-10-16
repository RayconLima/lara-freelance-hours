<?php

namespace Database\Seeders;

use App\Enums\TechnologyEnum;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // case JavaScript = 'javascript';
        // case Laravel    = 'laravel';
        // case PHP        = 'php';
        // case React      = 'react';
        // case Tailwind   = 'tailwind';
        // case Vue        = 'vue';

        foreach(TechnologyEnum::cases() as $technology) {
            Technology::factory()->create([
                'key'   => $technology->value,
                'label' => $technology->name,
            ]);
        }
    }
}
