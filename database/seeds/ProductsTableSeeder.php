<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::create([
        //     'name' => '',
        //     'slug' => '',
        //     'details' => '',
        //     'price' => 500,
        //     'description' =>'',
        // ]);
        Product::create([
            'name' => 'Adenium',
            'slug' => 'Adenium',
            'details' => 'Shrub',
            'price' => 500,
            'description' =>'Perennial',
        ]);
        // Product::create([
        //     'name' => 'Lilly',
        //     'slug' => 'Flower',
        //     'details' => 'Flower',
        //     'price' => 500,
        //     'description' =>'Annual'
        // ]);
    }
}
