<?php

use Illuminate\Database\Seeder;

use App\Models\Flower\Flower;

class FlowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Flower::class,10)->create();
    }
}
