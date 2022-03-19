<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{


    protected $fillable = ['title', 'content'];

    public function getPosts($session){
        if(!$session->has('posts')){
            $this->createDummyData($session);
        }
        return $session->get('posts');
    }

    //Cuando llega por URL post/id
    public function getPost($session, $id){
        if(!$session->has('posts')){
            $this->createDummyData($session);
        }
        return $session->get('posts')[$id];
    }

    public function addPost($session, $title, $content)
    {
        if(!$session->has('posts')){
            $this->createDummyData($session);
        }
        $posts = $session->get('posts');
        array_push($posts,['title' => $title, 'content' => $content]);
        $session->put('posts', $posts);

    }
    public function editPost($session, $id, $title, $content)
    {
        $posts = $session->get('posts');
        $posts[$id] = ['title' => $title, 'content' => $content];
        $session->put('posts', $posts);
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
