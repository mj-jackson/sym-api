<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController {

    /**
     * @Route("/api/")
     */
    public function index() {
        $json = ['api', 'lala'];

        return $this->json($json);
    }

    /**
     * @Route("/api/get")
     */
    public function apiGet() {
        $json = ['api', 'get'];

        return $this->json($json);
    }
}