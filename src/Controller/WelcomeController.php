<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function welcome()
    {
        $userName = "Maciej M.";


        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
            'userName' => $userName,
        ]);
    }
}
