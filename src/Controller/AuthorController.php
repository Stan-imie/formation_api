<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController
{
    function getAllAuthors() {
        $authors= [
            ["name" => "Author 1"],
            ["name" => "Author 2"],
            ["name" => "Author 3"],
        ];
        $jsonResponse = json_encode($authors);

        return new Response($jsonResponse);
    }

    function getAuthor($id) {
        $author= [
            "id" => $id,
            "name" => "Auhtor ".$id
        ];

        $jsonResponse = json_encode($author);

        return new Response($jsonResponse);
    }

    function deleteAuthor($id){
        $jsonResponse = json_encode([]);
        return new Response($jsonResponse);
    }
}
