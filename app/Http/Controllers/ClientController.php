<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{

    public function getAllPosts() {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getPostsId($id) {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }

    public function getHello($name) {
        return "hello " . $name;
    }

    public function addPost() {
        $addPost = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => "add post number 1",
            'body' =>'body add post'
        ]);
        return $addPost->json();
    }

    public function updatePost($id) {
        $updatePost = Http::put('https://jsonplaceholder.typicode.com/posts/'.$id,[
            'title' => 'Day la title updated',
            'body' => 'Day la body updated'
        ]);
        return $updatePost->json();
    }

    public function deletePost($id) {
        $deletePost = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $deletePost->json();
    }
}
