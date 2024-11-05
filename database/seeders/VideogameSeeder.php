<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Videogame;
use Faker\Generator as Faker;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = app(Faker::class);

        for ($i = 0; $i < 500; $i++) {
            $videogame = new Videogame();
            $videogame->title = $faker->words(3, true);
            $videogame->description = $faker->paragraph();
            $videogame->publisher = $faker->company();
            $videogame->developer = $faker->company();
            $videogame->release_date = $faker->dateTimeBetween('-10 years', 'now');
            $videogame->genre = $faker->randomElement(['Action', 'Adventure', 'RPG', 'Strategy', 'Sports', 'Racing', 'Simulation', 'Puzzle']);
            $videogame->platform = $faker->randomElement(['PC', 'PlayStation 5', 'Xbox Series X', 'Nintendo Switch', 'PlayStation 4', 'Xbox One']);
            $videogame->price = $faker->randomFloat(2, 19.99, 69.99);
            $videogame->rating = $faker->numberBetween(1, 10);
            $videogame->cover_image = $faker->optional()->imageUrl(640, 480, 'games');
            $videogame->multiplayer = $faker->boolean();
            $videogame->max_players = $faker->optional()->numberBetween(2, 64);
            $videogame->language = $faker->randomElement(['English', 'Italian', 'Spanish', 'French', 'German']);
            $videogame->age_rating = $faker->randomElement(['E', 'E10+', 'T', 'M', 'AO']);
            $videogame->storage_required = $faker->numberBetween(5, 150);
            $videogame->save();
        }
    }
}
