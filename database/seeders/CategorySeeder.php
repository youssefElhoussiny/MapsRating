<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->truncate();

        $category = new Category();
        $category->title = 'المطاعم';
        $category->slug = Str::slug('slug 1');
        $category->save();

        $category = new Category();
        $category->title = 'المستشفيات';
        $category->slug = Str::slug(' slug 2');
        $category->save();

        $category = new Category();
        $category->title = 'المقاهي';
        $category->slug = Str::slug(' slug 3');
        $category->save();
    }
}
