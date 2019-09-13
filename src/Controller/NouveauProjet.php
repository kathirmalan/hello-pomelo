<?php
// src/Controller/main.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NouveauProjet extends AbstractController
{
    public function entrepriseExistante()
    {
        /**
        * @Route("/entrepriseExistante")
        */
        return $this->render("entrepriseExistante.html.twig");
    }

    public function nouvelleEntreprise()
    {
        /**
        * @Route("/nouvelleEntreprise")
        */
        return $this->render("nouvelleEntreprise.html.twig");
    }
}

