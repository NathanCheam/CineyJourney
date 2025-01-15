<?php

namespace Database\Seeders;

use App\Models\Voyage;
use Illuminate\Database\Seeder;

class VoyagesSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {


        Voyage::create([
            'titre' => "Les grandes villes du nord de l'Europe",
            'description' => "Quelques-unes des plus grandes villes du nord de l'Europe.
            J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite.
            Mais que vous, je ne peux m'en empêcher.
            Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails.... ",
            'resume' => "Quelques-unes des plus grandes villes du nord de l'Europe.
            J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite.
            Mais que vous, je ne peux m'en empêcher.
            Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails....",
            'continent' => "STAR WARS",
            'en_ligne' => true,
            'visuel' => env('APP_URL')."/storage/user1/europe-nord.png",
            'user_id' => 1,
        ]);

        Voyage::create([
            'titre' => "Les grandes villes du nord de l'Europe",
            'description' => "Quelques-unes des plus grandes villes du nord de l'Europe.
            J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite.
            Mais que vous, je ne peux m'en empêcher.
            Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails.... ",
            'resume' => "Quelques-unes des plus grandes villes du nord de l'Europe.
            J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite.
            Mais que vous, je ne peux m'en empêcher.
            Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails....",
            'continent' => "HARRY POTTER",
            'en_ligne' => true,
            'visuel' => env('APP_URL')."/storage/user1/europe-nord.png",
            'user_id' => 1,
        ]);

        Voyage::create([
            'titre' => "Les grandes villes du nord de l'Europe2",
            'description' => "Quelques-unes des plus grandes villes du nord de l'Europe.
            J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite.
            Mais que vous, je ne peux m'en empêcher.
            Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails.... ",
            'resume' => "Quelques-unes des plus grandes villes du nord de l'Europe.
            J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite.
            Mais que vous, je ne peux m'en empêcher.
            Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails....",
            'continent' => "STAR WARS",
            'en_ligne' => true,
            'visuel' => env('APP_URL')."/storage/user1/europe-nord.png",
            'user_id' => 1,
        ]);

        Voyage::create([
            'titre' => "Les grandes villes du nord de l'Europe2",
            'description' => "Quelques-unes des plus grandes villes du nord de l'Europe.
            J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite.
            Mais que vous, je ne peux m'en empêcher.
            Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails.... ",
            'resume' => "Quelques-unes des plus grandes villes du nord de l'Europe.
            J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite.
            Mais que vous, je ne peux m'en empêcher.
            Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails....",
            'continent' => "HARRY POTTER",
            'en_ligne' => false,
            'visuel' => env('APP_URL')."/storage/user1/europe-nord.png",
            'user_id' => 1,
        ]);

    }
}
