<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class UserController extends AbstractController
{
  /**
   * [user_login description]
   * @param  [type] $username [description]
   * @param  [type] $password [description]
   * @return [type]           [description]
   */
  function user_login($username,$password) {
    $users = [
      "username" => "john",
      "password" => "1234"
    ];

    foreach($users as $user){
      if ($username == $user["username"] && $password == $user["password"]) {
        $token = ["token" => "isJohn"];
        $jsonResponse = json_encode($token);
      }else{
        $error = ["error" => "bas credentials"];
        $jsonResponse = json_encode($error);
      }
    }

    //return new Response($jsonResponse, 400);
    return $this->render('affichage/index.html.twig', [
            'name' => $name,
        ]);
  }

}
