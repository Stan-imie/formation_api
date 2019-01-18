<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FilmController extends AbstractController
{


  function getAllFilms(){

    $films = $this->getDoctrine()
        ->getRepository(Films::class);
        //->find($id);

    // if (!$films) {
    //     throw $this->createNotFoundException(
    //         'No product found for id '.$id
    //     );
    // }

    return new Response('Check out this great product: '.$product->getName());

    // or render a template
    // in the template, print things with {{ product.name }}
    // return $this->render('product/show.html.twig', ['product' => $product]);






    return $this->render('affichage/index.html.twig', [
      'film' => $films,
    ]);
  }




}
