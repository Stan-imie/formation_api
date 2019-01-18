<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FilmController extends AbstractController
{

  function getAllFilms(){
    $films = [
      ["titre" => "La Planète au trésor",
      "annee" => "2002",
      "poster" => "https://radiodisneyclub.fr/wp-content/uploads/2018/04/treasure-planet-700x933.jpg",
      "synopsis" => "Jim Hawkins, un garçon de 15 ans, vit paisiblement avec sa mère dans une ville portuaire. Un jour, il tombe sur un homme gravement blessé, mais il ne peut le sauver d'une mort certaine. L'homme, du nom de Billy Bones, lui remet un orbe précieux qui contient une carte. Celle-ci mène à un fabuleux trésor de pirates, le légendaire 'butin des mille mondes'. Le docteur Doppler organise rapidement une expédition à bord du RLS Legacy, un magnifique galion de l'espace.",],

      ["titre" => "Le Livre de la Jungle",
      "annee" => "1968",
      "poster" => "https://images-na.ssl-images-amazon.com/images/I/91Tkd1W6MZL.jpg",
      "synopsis" => "Le retour dans la jungle du tigre Shere Khan inquiète les loups. Le félin mangeur d'hommes risque de s'attaquer à Mowgli, l'enfant qu'ils ont recueilli et élevé. La panthère Bagheera, sa protectrice, décide donc de ramener le jeune garçon chez les siens, parmi lesquels il sera en sécurité. Mowgli, quant à lui, n'a aucune envie de quitter la jungle et suit Bagheera à contre-coeur.",],

      ["titre" => "Shrek",
      "annee" => "2001",
      "poster" => "https://is1-ssl.mzstatic.com/image/thumb/Video118/v4/88/3b/de/883bdec3-4072-841d-e2d0-6609fdc19544/mzm.jqiredrw.lsr/268x0w.jpg",
      "synopsis" => "Shrek, un ogre verdâtre, découvre de petites créatures agaçantes qui errent dans son marais. Shrek se rend alors au château du seigneur Lord Farquaad, qui aurait soi-disant expulsé ces êtres de son royaume. Ce dernier souhaite épouser la princesse Fiona, mais celle-ci est retenue prisonnière par un abominable dragon. Il lui faut un chevalier assez brave pour secourir la belle. Shrek accepte d'accomplir cette mission.",],

      ["titre" => "Mulan",
      "annee" => "1998",
      "poster" => "https://is2-ssl.mzstatic.com/image/thumb/Video122/v4/52/65/a1/5265a10a-e616-4471-3bc2-9883d6d2e986/pr_source.lsr/268x0w.png",
      "synopsis" => "Mulan est une belle jeune fille qui vit dans un village chinois. Malgré son amour et son respect pour sa famille, son mépris des conventions l'éloigne des rôles dévolus aux filles devouées. Quand son pays est envahi par les Huns, Mulan, n'écoutant que son courage, s'engage à la place de son père dans le but de lui sauver la vie. Elle va devenir, avec l'aide d'un dragon en quète de réhabilitation, un guerrier hors du commun.",],

      ["titre" => "Wall-e",
      "annee" => "2008",
      "poster" => "https://www.telerama.fr/sites/tr_master/files/d6f54523-071b-40d4-854c-d967932ddd3e_2.jpg",
      "synopsis" => "Wall E, un petit robot, est le dernier être sur Terre ! 700 ans plus tôt, l'humanité a déserté notre planète en lui laissant le soin de nettoyer la Terre. Mais Wall E a développé un petit défaut technique : une forte personnalité ! Curieux et indiscret, il est surtout très seul. Sa vie va être bouleversée avec l'arrivée d'Eve, une petite robote. Wall E va tout mettre en uvre pour la séduire.",]
    ];

    return $this->render('affichage/index.html.twig', [
      'film' => $films,
    ]);
  }




}
