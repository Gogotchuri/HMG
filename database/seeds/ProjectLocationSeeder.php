<?php

use App\Models\References\ProjectLocation;
use Illuminate\Database\Seeder;

class ProjectLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (ProjectLocation::$stringRepresentation as $key => $value){
            $loc = new ProjectLocation();
            $loc->id = $key;
            $loc->name = $value;
            $loc->save();
        }
    }
}
