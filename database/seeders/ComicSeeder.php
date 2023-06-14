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
        $comic = config('comics.comic');

        foreach ($comic as $elem){
            $newcomic = new Comic();
            $newcomic->title = $elem['title'];
            $newcomic->description = $elem['description'];
            $newcomic->thumb = $elem['thumb'];
            $newcomic->price = $elem['price'];
            $newcomic->series = $elem['series'];
            $newcomic->sale_date = $elem['sale_date'];
            $newcomic->type = $elem['type'];
            $newcomic->artists = json_encode($elem['artists']);
            $newcomic->writers = json_encode($elem['writers']);
            $newcomic->save();

        }
    }
}
