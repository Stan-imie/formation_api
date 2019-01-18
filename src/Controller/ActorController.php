<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActorController extends AbstractController
{

    function getAllActor(){
    
    return $this->render('affichage/index.html.twig', [
      'actor' => $actor,
    ]);
  }

    function getActor($id) {
    

    return new Response($jsonResponse);
  }
    function getActorName($name) {
    

    return new Response($jsonResponse);
  }

  function deleteActor($id){
    $jsonResponse = json_encode([]);
    //return new Response($jsonResponse);
    return $this->render('affichage/index.html.twig', [
            'Actor' => $jsonResponse,
        ]);
  }
    public function index()
    {
        return $this->render('actor/index.html.twig', [
            'controller_name' => 'ActorController',
        ]);
    }




}
