<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => "Phone"
            ],
            [
                'name' => "Computer"
            ],
            [
                'name' => "Ipad"
            ]
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
