<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post=new \App\Models\Post(
            [
                'title' => 'Posteo Agregdo del seeder',
                'content' => 'Este es el prmer posteo del seeder'
            ]
            );
            $post->save();

        $post=new \App\Models\Post(
            [
                'title' => 'Posteo Agregdo del seeder 2',
                'content' => 'Este es el prmer posteo del seeder 2'
            ]
            );
            $post->save();
    }
}
