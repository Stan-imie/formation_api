<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    $category= [
      "id" => $id,
      "name" => "Catégorie ".$id
    ];

    $jsonResponse = json_encode($category);

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
