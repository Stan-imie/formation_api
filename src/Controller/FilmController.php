<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FilmController extends AbstractController
{


  function getAllFilm(){
    

    return $this->render('affichage/index.html.twig', [
      'film' => $film,
    ]);
  }

      function getFilm($id) {
    

    return new Response($jsonResponse);
  }
    function getFilmTitle($Title) {
    

    return new Response($jsonResponse);
  }

  function deleteFilm($id){
    $jsonResponse = json_encode([]);
    //return new Response($jsonResponse);
    return $this->render('affichage/index.html.twig', [
            'Film' => $jsonResponse,
        ]);
  }
}
    





}
