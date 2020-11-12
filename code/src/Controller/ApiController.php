<?php

namespace App\Controller;

use App\Entity\User;
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
        /**
         * @var User $user
         */
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        return new JsonResponse('Hello ' . $user->getUsername() . '! Welcome to default API controller!');
    }
}
