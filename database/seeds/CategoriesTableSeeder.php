<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now=Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Plants','slug' => 'plants','created_at' => $now,'updated_at' => $now], 
            ['name' => 'Containers','slug' => 'containers','created_at' => $now,'updated_at' => $now],
            ['name' => 'Smart Products','slug' => 'smart','created_at' => $now,'updated_at' => $now],
            ['name' => 'Fertilizers','slug' => 'fertilizers','created_at' => $now,'updated_at' => $now],
            ['name' => 'Pesticides','slug' => 'pesticides','created_at' => $now,'updated_at' => $now],
            ['name' => 'Tools','slug' => 'tools','created_at' => $now,'updated_at' => $now],
            ['name' => 'Seeds','slug' => 'seeds','created_at' => $now,'updated_at' => $now],
            
            
    ]);
    }
}
