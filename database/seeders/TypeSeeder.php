<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'type' => 'short'
        ]);

        Type::create([
            'type' => 'medium'
        ]);

        Type::create([
            'type' => 'long'
        ]);
    }
}
