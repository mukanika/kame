<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Favorite;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this ->call([
            CategoriesTableSeeder::class,
            CommentsTableSeeder::class,
            ContactsTableSeeder::class,
            FavoritesTableSeeder::class,
            ProductcategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            StatusesTableSeeder::class, 
        ]);
    }
}
