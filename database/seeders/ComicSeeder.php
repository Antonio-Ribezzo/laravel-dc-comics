<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //porto i dati del config
        $datiComics = config('comics');

        foreach( $datiComics as $el){
            $newComic = new Comic();

            $newComic->title = $el['title'];
            $newComic->description = $el['description'];
            $newComic->thumb = $el['thumb'];
            $newComic->price = $el['price'];
            $newComic->series = $el['series'];
            $newComic->sale_date = $el['sale_date'];
            $newComic->type = $el['type'];

            $newComic->save();
        }
    }
}
