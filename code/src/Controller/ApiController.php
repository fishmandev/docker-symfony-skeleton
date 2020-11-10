<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class ApiController
 * @package App\Controller
 * @route("/api", name="api")
 */
class ApiController extends AbstractController
{
    /**
     * @Route("/default", name="api_default")
     * @return JsonResponse
     */
    public function index()
    {
        return new JsonResponse('Hello to default API controller!');
    }
}
