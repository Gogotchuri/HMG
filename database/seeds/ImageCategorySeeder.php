<?php

use App\Models\References\ImageCategory;
use Illuminate\Database\Seeder;

class ImageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (ImageCategory::$stringRepresentation as $key => $value){
            $cat = new ImageCategory();
            $cat->id = $key;
            $cat->name = $value;
            $cat->save();
        }
    }
}
