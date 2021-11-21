<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    /**
     * @Route("/", name="bonjour")
     */
    public function index(): Response
    {
        $firstname = "Mustapha";

        return $this->render('bonjour/index.html.twig', ['firstname' => $firstname] );
    }
}
