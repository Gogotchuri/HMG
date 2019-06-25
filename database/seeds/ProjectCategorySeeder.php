<?php

use App\Models\References\ProjectCategory;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (ProjectCategory::$stringRepresentation as $key => $value){
            $cat = new ProjectCategory();
            $cat->id = $key;
            $cat->name = $value;
            $cat->save();
        }
    }
}
