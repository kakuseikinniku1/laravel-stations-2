<?php

namespace Database\Seeders;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class movieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::truncate();  // 既存データがある場合邪魔なので

        for ($i = 1; $i <= 100; $i++) {
            // ②
            $movie = new Movie();
            $movie->id = $i;
            $movie->title = "test";
            $movie->image_url = "https://picsum.photos/200/300";
            $movie->published_year = date("2026");
            $movie->description = "ミステリー映画です";
            $movie->save();
        }
    }
}
