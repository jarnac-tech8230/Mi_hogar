<?php


namespace App\Controller\web;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function inicio(){

        return $this->render( 'vistas/home.html.twig' );
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(){

        return $this->render( 'vistas/login.html.twig' );
    }

}