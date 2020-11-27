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


    /**
     * @Route("/registrarse", name="registro")
     */
    public function registrar(){

        return $this->render( 'vistas/registrar.html.twig' );
    }

}