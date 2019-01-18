<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Films;

class FilmController extends AbstractController
{


  function getAllFilm(){


  }

  function getFilm($id) {

    $film = $this->getDoctrine()
        ->getRepository(Films::class)
        ->find($id);

    $categoryName = $film->getCategory()->getName();


    //$products = $category->getProducts();

    return $this->render('affichage/index.html.twig', [
      'film' => $categoryName,
    ]);
  }


  function getFilmTitle($title) {


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
