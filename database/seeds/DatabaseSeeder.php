<?php

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
        $this->call(ImageCategorySeeder::class);
        $this->call(ProjectCategorySeeder::class);
        $this->call(ProjectLocationSeeder::class);

    }
}
