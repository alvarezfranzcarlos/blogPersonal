<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag=new \App\Models\Tag();
        $tag->name='Marketing';
        $tag->save();

        $tag=new \App\Models\Tag();
        $tag->name='Web';
        $tag->save();
    }
}
