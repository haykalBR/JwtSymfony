<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
//        $user=$this->getuser();
        $token = [
            'user_id' =>1,
            'user_name' => 'haikel',
            'exp' => time() + 60
        ];
        $token = \Firebase\JWT\JWT::encode($token, getenv('JWTSECRET'));
        dump($token);die;
        return $this->render('default/index.html.twig', [

        ]);
    }
}
