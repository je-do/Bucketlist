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
                0 => ["pays" => "Japon", "activite" => "escalader le Mont Fuji"],
                1 =>["pays" => "USA", "activite" => "visiter le Grand Canyon"],
                2 =>["pays" => "Suisse", "activite" => "manger du chocolat en short"],

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
            'titre' => 'Detail',
        ]);
    }




}
