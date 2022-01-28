<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
    $posts = [
        [
            "userId" => 1, 
            "id" => 1, 
            "title" => "primo post dal controller", 
            "body" => "quia et suscipit
            suscipit recusandae consequuntur expedita et cum
            reprehenderit molestiae ut ut quas totam
            nostrum rerum est autem sunt rem eveniet architecto" 
        ], 
        [
            "userId" => 1, 
            "id" => 2, 
            "title" => "fuori ormai è buio", 
            "body" => "est rerum tempore vitae
            sequi sint nihil reprehenderit dolor beatae ea dolores neque
            fugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis
            qui aperiam non debitis possimus qui neque nisi nulla" 
        ], 
        [
            "userId" => 1, 
            "id" => 3, 
            "title" => "devo finire entro domenica", 
            "body" => "et iusto sed quo iure
            voluptatem occaecati omnis eligendi aut ad
            voluptatem doloribus vel accusantium quis pariatur
            molestiae porro eius odio et labore et velit aut" 
        ], 
        [
            "userId" => 1, 
            "id" => 4, 
            "title" => "il progetto finale sarà difficile", 
            "body" => "ullam et saepe reiciendis voluptatem adipisci
            sit amet autem assumenda provident rerum culpa
            quis hic commodi nesciunt rem tenetur doloremque ipsam iure
            quis sunt voluptatem rerum illo velit" 
        ], 
        [
            "userId" => 1, 
            "id" => 5, 
            "title" => "non ci saranno ticket", 
            "body" => "repudiandae veniam quaerat sunt sed
            alias aut fugiat sit autem sed est
            voluptatem omnis possimus esse voluptatibus quis
            est aut tenetur dolor neque" 
        ], 
        [
            "userId" => 1, 
            "id" => 6, 
            "title" => "ma ce la faremo", 
            "body" => "ut aspernatur corporis harum nihil quis provident sequi
            mollitia nobis aliquid molestiae
            perspiciatis et ea nemo ab reprehenderit accusantium quas
            voluptate dolores velit et doloremque molestiae" 
        ], 
    ]; 
        return $posts;
    }
}
 
