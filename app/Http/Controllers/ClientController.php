<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Termwind\Components\Hr;

class ClientController extends Controller
{
    public function getPosts()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getPostbyId($id)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $response->json();
    }

    public function addPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => '12',
            'body' => 'Added description',
            'title' => 'Added title'
        ]);
        return $post->json();
    }

    public function updatePost($id)
    {
        $post = Http::put('https://jsonplaceholder.typicode.com/posts/' . $id, [
            'body' => 'Updated description',
            'title' => 'Updated title'
        ]);
        return $post->json();
    }

    public function getProperty($id)
    {

        $property = Http::withToken('{xA1uNvEKgkmKGzN5HySnK5xeY8x3EFs3}')->get('https://jumba.nl/v1/properties/' . $id);
        return $property->json();
    }
}
