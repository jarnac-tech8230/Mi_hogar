<?php


namespace App\Controller\web;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class HeaderController
 * @package App\Controller\web
 * @Route("/web")
 */
class HeaderController extends AbstractController
{




    /**
     * @Route("/acerca", name="acerca")
     */
    public function acerca(){

        return $this->render( 'vistas/acerca.html.twig' );
    }

    /**
     * @Route("/categoria", name="categoria")
     */
    public function categoria(){

        return $this->render( 'vistas/categoria.html.twig' );
    }


    /**
     * @Route("/servicio", name="servicio")
     */
    public function servicio(){

        return $this->render( 'vistas/servicio.html.twig' );
    }





}