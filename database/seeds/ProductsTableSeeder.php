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
        ])->categories()->attach(1);
        Product::create([
            'name' => 'Aglaonema Silver Bay',
            'slug' => 'White_Aglaonema-Silver-Bay',
            'details' => '✓ Nationwide shipping
            ✓ Includes Aglaonema: Low Light Spaces
            ✓ Stands 1 – 2 tall',
            'price' => 650,
            'description' =>'Aglaonema is one of the easiest indoor plants to own and is tolerant of low light conditions and infrequent watering. Native to the Philippines, Aglaonema has beautiful, slow-growing foliage that makes a wonderful accent to any space. This is one of only a few plants that can survive under florescent lighting alone making is a great choice for any low light space.'
        ])->categories()->attach(1);
        Product::create([
            'name' => 'Fiddle Leaf Fig Tree',
            'slug' => 'fiddle-leaf-fig-tree',
            'details' => '✓ Includes Fiddle Leaf Fig: high light spaces',
            'price' => 730,
            'description' =>'The fiddle ­leaf fig tree, or Ficus lyrata, is a species of plant within the fig genus native to the lowland tropical rainforests of Western Africa. It has a broad canopy with large, rigid leaves and prefers a high light space. When cared for properly, fiddle leafs grow quickly, and a small tree can double in size in as few as six months.'
        ])->categories()->attach(1);
        Product::create([
            'name' => 'Lime Green Pothos Macramé Hanging Plant',
            'slug' => 'Lime-Green',
            'details' => 'One 6in Lime Green Pothos Plant',
            'price' => 650,
            'description' =>'Lime Green is one of the easiest indoor plants to own and is tolerant of low light conditions and infrequent watering. Native to the Philippines, Aglaonema has beautiful, slow-growing foliage that makes a wonderful accent to any space. This is one of only a few plants that can survive under florescent lighting alone making is a great choice for any low light space.'
        ]);
        Product::create([
            'name' => 'Pink Prayer Plant',
            'slug' => 'Pink-Prayer-Plant',
            'details' => '✓ Nationwide shipping
            ✓ Includes Aglaonema: Low Light Spaces
            ✓ Stands 1 – 2 tall',
            'price' => 550,
            'description' =>'Take their home and style to new heights with a pink prayer plant on a trendy mid century modern plant stand.'
        ])->categories()->attach(1);
       

        Product::create([
            'name' => 'Border Fork by Sneeboer',
            'slug' => 'Border-Fork-by-Sneeboer',
            'details' => 'Size-

            Length: 44 inches
            
            Blade: 6” wide X 7.5” long
            
            Approx. Weight: 3 lbs., 14 oz.',
            'price' => 550,
            'description' =>'This border fork with its smaller head size is simply a joy to use. While a larger size tool might get the job done quicker, you will enjoy the job more and be less tired afterwards with this border fork. Great for digging, aeration, and soil amending in those smaller areas such as beds and raised beds...loved by ladies and gents alike'
        ])->categories()->attach(4);

        Product::create([
            'name' => 'Ferm Hexagon Pot XL | Blue',
            'slug' => 'Ferm-Hexagon-Pot-XL',
            'details' => 'Size-

            Length: 44 inches
            
            Blade: 6” wide X 7.5” long
            
            Approx. Weight: 3 lbs., 14 oz.',
            'price' => 550,
            'description' =>'The Hexagon Pot from Ferm Living is made from powder coated metal with a matte polish. These beautiful planters are the perfect accent piece to beautify a table top, desk or shelf.'
        ])->categories()->attach(6);



    }
}
