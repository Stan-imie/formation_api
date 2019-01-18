<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Films;

class CategoryController extends AbstractController
{
  /**
   * [getAllCategories description]
   * @return [type] [description]
   */
  function getAllCategories() {


    return $this->render('affichage/index.html.twig', [
            'name' => $jsonResponse,
        ]);
  }

    function getCategory($id) {


    return new Response($jsonResponse);
  }

    function getCategoryName($name) {


    return new Response($jsonResponse);
  }

  function deleteCategory($id){
    $jsonResponse = json_encode([]);
    //return new Response($jsonResponse);
    return $this->render('affichage/index.html.twig', [
            'name' => $jsonResponse,
        ]);
  }
}
