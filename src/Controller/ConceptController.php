<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConceptController extends Controller
{
    /**
     * @Route("/concept", name="concept")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to the concept API!',
            'path' => 'src/Controller/ConceptController.php',
        ]);
    }


}
