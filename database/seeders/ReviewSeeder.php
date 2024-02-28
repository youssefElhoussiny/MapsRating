<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->truncate();
        $review = new Review();
        $review->review = "مكان رائع";
        $review->service_rating = 3 ;
        $review->quality_rating = 5;
        $review->cleanliness_rating = 4;
        $review->pricing_rating = 5;
        $review->place_id = 1;
        $review->user_id = 1;
        $review->save();

        $review = new Review();
        $review->review = "مكان جيد";
        $review->service_rating = 3 ;
        $review->quality_rating = 2;
        $review->cleanliness_rating = 3;
        $review->pricing_rating = 1;
        $review->place_id = 2;
        $review->user_id = 2;
        $review->save();

        $review = new Review();
        $review->review = "مكان جميل";
        $review->service_rating = 5;
        $review->quality_rating = 5;
        $review->cleanliness_rating = 4;
        $review->pricing_rating = 4;
        $review->place_id = 3;
        $review->user_id = 3;
        $review->save();
    }
}
