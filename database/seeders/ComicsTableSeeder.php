<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\comic;
use App\Functions\Helper;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');
        foreach ($comics as $product) {
            $new_comic = new comic();
            $new_comic->title = $product['title'];
            $new_comic->slug = Helper::generateSlug($new_comic->title, new comic());
            $new_comic->description = $product['description'];
            $new_comic->thumb = $product['thumb'];
            $new_comic->price = $product['price'];
            $new_comic->series = $product['series'];
            $new_comic->sale_date = $product['sale_date'];
            $new_comic->type = $product['type'];
            $new_comic->artists = json_encode($product['artists']);
            $new_comic->writers = json_encode($product['writers']);

            $new_comic->save();
        }
    }
}
