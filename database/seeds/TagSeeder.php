<?php

use App\TagModel;
use Illuminate\Database\Seeder;


class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(TagModel::class,10)->create();
    }
}
