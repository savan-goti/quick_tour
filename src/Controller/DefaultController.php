<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    #[Route('/dashboard', name: 'index')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig');
    }


    #[Route('/simplicity', methods: ['GET'])]
    public function simple(): Response
    {
        return new Response('Simple! Easy! Great!');
    }
}
