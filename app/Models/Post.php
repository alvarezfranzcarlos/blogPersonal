<?php
namespace App\Models;

class Post {

    public function getPosts($session){
        if(!$session->has('posts')){
            $this->createDummyData($session);
        }
        return $session->get('posts');
    }

    private function createDummyData($session){
        $posts=[
            [
                'title'=> 'Titulo agregado',
                'content'=> 'Contenido agregado'
            ],
            [
                'title'=> 'Titulo agregado opcional',
                'content'=> 'Contenido agregado opcional'
            ]
        ];
        $session->put('posts', $posts);
    }
}
