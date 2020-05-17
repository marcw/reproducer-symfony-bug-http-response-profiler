<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/bug", name="demo")
     */
    public function index()
    {
        $response = new BinaryFileResponse(__FILE__, 200);

        $response->setPublic();
        $response->headers->addCacheControlDirective("immutable");
        $response->setMaxAge(3600);

        return $response;
    }
}
