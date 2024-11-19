<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MenuController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function __invoke(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/feedback', name: 'app_feedback')]
    public function feedback(): Response
    {
        return $this->render('Feedback/feedback.html.twig');
    }
}
