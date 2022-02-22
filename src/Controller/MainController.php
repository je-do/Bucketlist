<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('main/home.html.twig', [
            'titre' => 'Home Page',
        ]);
    }

    
    /**
     * @Route("/about/", name="about")
     */
    public function about(): Response
    {
        return $this->render('main/about.html.twig', [
            'titre' => 'About us',
        ]);
    }
}
