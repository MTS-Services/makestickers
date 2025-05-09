<?php

namespace Database\Seeders;

use App\Models\StickerCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StickerCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StickerCategory::factory()->count(10)->create();
    }
}
