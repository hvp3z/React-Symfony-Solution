<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    /**
     * @Route("/test/{slug}", name="test")
     */
    public function index($slug)
    {
        return $this->render('default/index.html.twig');
    }
}
