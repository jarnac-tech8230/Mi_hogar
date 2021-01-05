<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class DefaultController extends AbstractController
{

    /**
     * @Route("/{valor}", name="homepage", methods={"GET"})
     */
    public function inicio(Request $request, $valor= null){

 if ($valor != null){
     $this->addFlash('notice_ok',$valor);
 }
        return $this->render( 'vistas/home.html.twig');
    }

    /**
     * @Route("/login/sesion", name="login")
     */
    public function login(){
        $nombre = "pepe";


        return $this->render( 'vistas/login.html.twig',
        [
            'login'=> $nombre
        ]

        );
    }


    /**
     * @Route("/registrarse/registro", name="registro")
     */
    public function registrar(){

        return $this->render( 'vistas/registrar.html.twig' );
    }

}