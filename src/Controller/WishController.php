<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function list(): Response
    {

        $bucketlist = [
                0 => ["pays" => "Japon", "activite" => "escalader le Mont Fuji","budget" => "3000", "date"=> "05/03/22"],
                1 =>["pays" => "USA", "activite" => "visiter le Grand Canyon", "budget" => "2500", "date"=> "20/05/22"],
                2 =>["pays" => "Suisse", "activite" => "manger du chocolat en short", "budget" => "1000", "date"=> "25/12/22"],

            ];
        

        return $this->render('wish/list.html.twig', [
            'titre' => 'Liste',
            'bucketlist' => $bucketlist
        ]);
    }
    /**
     * @Route("/detail", name="detail")
     */
    public function detail(): Response
    {
        return $this->render('wish/detail.html.twig' , [
            'titre' => 'Voici les détails !',
        ]);
    }




}
