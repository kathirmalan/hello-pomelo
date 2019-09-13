<?php
// src/Controller/main.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    public function index()
    {
         /**
          * @Route("/")
          */
        return $this->render("landingPage.html.twig");
    }

}

