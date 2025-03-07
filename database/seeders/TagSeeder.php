<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            'Elettronica',
            'Veicoli',
            'Immobili',
            'Lavoro e Servizi',
            'Abbigliamento e Moda',
            'Sport e Tempo Libero',
            'Arredamento e Casa',
            'Giochi e Bambini',
            'Collezionismo e Hobby',
            'Animali'
        ];

        foreach ($tags as $tag) {
            Tag::create(['name' => $tag]);
        }
    }
}
