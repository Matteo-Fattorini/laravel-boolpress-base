<?php

use Illuminate\Database\Seeder;
use App\PostModel;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PostModel::class,500)->create()->each(function($id){
            $id->save();
        });
    }
}
