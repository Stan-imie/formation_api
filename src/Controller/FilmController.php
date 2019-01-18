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

    $title = $film->getTitle();
    $year = $film->getYear();
    $poster = $film->getPoster();
    $synopsis = $film->getSynopsis();


    //$products = $category->getProducts();

    return $this->render('affichage/index.html.twig', [
      'title' => $title,
      'annee' => $year,
      'poster' => $poster,
      'synopsis' => $synopsis,
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
