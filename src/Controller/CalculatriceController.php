<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculatriceController extends AbstractController
{
    #[Route('/calculatrice/accueil', name: 'app_calculatrice_index')]
    public function index(): Response {

        return $this->render(
        //definition du .html.twig utilisée pour le rendu
            'calculatrice/index.html.twig',
            
            [
            //Variables reportées dans le .html.twig à afficher
            'controller_name' => 'CalculatriceController',
            ]
        );
    }

    #[Route('/calculatrice/additionner/{x}/{y}', name: 'app_calculatrice_additionner')]

    public function additionner($x, $y) : Response {

        $result = $x + $y;

        return $this->render('calculatrice/additionner.html.twig', [
            'result' => $result, 'x' => $x, 'y' => $y,
        ]);
    }

    #[Route('/calculatrice/soustraire/{x}/{y}', name: 'app_calculatrice_soustraire')]

    public function soustraire($x, $y) : Response {
        
        $result = $x - $y;


        return $this->render (
            'calculatrice/soustraire.html.twig', 
            [
            'result' => $result, 'x' => $x, 'y' => $y,
            ]
        );
    }

    #[Route('/calculatrice/multiplier/{x}/{y}', name: 'app_calculatrice_multiplier')]

    public function multiplier($x, $y) : Response {
        
        $result = $x * $y;


        return $this->render('calculatrice/multiplier.html.twig', [
            'result' => $result, 'x' => $x, 'y' => $y,
        ]);
    }

    #[Route('/calculatrice/diviser/{x}/{y}', name: 'app_calculatrice_diviser')]

    public function diviser($x, $y) : Response {
        
        $result = $x / $y;


        return $this->render('calculatrice/diviser.html.twig', [
            'result' => $result, 'x' => $x, 'y'=>$y,
        ]);
    }
}
