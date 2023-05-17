<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      // Category::factory(10)->create();
      $categories =[
        'Electronics',
        'Head Phone',
        'Televison',
        'Mobile',
        'laptop',
        'Computer Accessories',
      ];

      foreach ($categories as $item) {
        Category::create([
            'title' => $item,
            'slug' => Str::slug($item),
            'is_active' => 1
        ]);
      }


    }
}
