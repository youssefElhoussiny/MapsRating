<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('places')->truncate();
        $place = new Place();
        $place->name = "سوق مكة";
        $place->slug = "سوق-مكة";
        $place->image = "1.png";
        $place->category_id = 3;
        $place->overview = " لا يمكنني تصفح الإنترنت أو توفير روابط مباشرة إلى مقالات أخبارية باللغة العربية. ومع ذلك";
        $place->address = "مختبر التطبيقات الرقمية";
        $place->user_id = 1;
        $place->latitude = 21.3924513;
        $place->longitude = 39.8226124;
        $place->view_count = 3;
        $place->save();

        $place = new Place();
        $place->name = "الصيدلية";
        $place->slug = "الصيدلية";
        $place->image = "2.png";
        $place->category_id = 2;
        $place->overview = " لا يمكنني تصفح الإنترنت أو توفير روابط مباشرة إلى مقالات أخبارية باللغة العربية. ومع ذلك";
        $place->address = "بيئة الاختبار التكنولوجية";
        $place->user_id = 2;
        $place->latitude = 25.3924513;
        $place->longitude = 31.8226124;
        $place->view_count = 2;
        $place->save();

        $place = new Place();
        $place->name = "مكتبة";
        $place->slug = "مكتبة";
        $place->image = "3.png";
        $place->category_id = 6;
        $place->overview = " لا يمكنني تصفح الإنترنت أو توفير روابط مباشرة إلى مقالات أخبارية باللغة العربية. ومع ذلك";
        $place->address = "بيئة  التكنولوجية";
        $place->user_id = 3;
        $place->latitude = 21.3924513;
        $place->longitude = 39.8226124;
        $place->view_count = 1;
        $place->save();
    }
}
