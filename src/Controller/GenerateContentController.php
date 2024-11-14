<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GenerateContentController extends AbstractController
{
    #[Route('/', name: 'app_generate_content')]
    public function index(): Response
    {
        return $this->render('generate_content/index.html.twig', [
            'controller_name' => 'GenerateContentController',
        ]);
    }
}
