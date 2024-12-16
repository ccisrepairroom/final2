<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            
            'Beverages',
            'Snacks',
            'Wines and Liquors',
            'Sweets',
            'Milk & Milk Products',
            'Formula Milk & Baby Foods',
            'Cigars',
            'Condiments Sauces & Dress',
            'Canned Goods',
            'Grocery Staples',
            'Fruits and Vegetables',
            'Seafoods',
            'Meat',
            'Poultry',
            'Bakery',
            'Rice & Sugar',
            'Delicatessen',
            'Dairy & Deli',
            'Baby Care',
            'Health & Beauty Care',
            'Household Maintenance',
            'Health Care',
            'Appliance',
            'Hardware',
            'Furniture',
            'Plasticware',
            'Kitchenware',
            'Glassware',
            'Linen',
            'Apparels',
            'Infants',
            'Footwear',
            'Bags & Wallets',
            'Fashion',
            'Gadgets',
            'Toys',
            'School & Office Supplies',




        ];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category,   
                'slug' => \Illuminate\Support\Str::slug($category),   
            ]);
        }
    }
}
