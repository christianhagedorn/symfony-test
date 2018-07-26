<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneratedController extends Controller
{
    /**
     * @Route("/generated", name="generated")
     */
    public function index()
    {
        return $this->render('generated/index.html.twig', [
            'controller_name' => 'GeneratedController',
        ]);
    }
}
