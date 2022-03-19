<?php
namespace App;

class Post {

    public function getPost($session){
        if(!session->has('post')){
            this->createDummyData($session);
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
    }
}
