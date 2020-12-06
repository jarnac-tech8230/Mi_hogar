<?php


namespace App\Controller\web;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/categria/list", name="categriaList")
     */
    public function listcategoria()
    {

       return $this->render('vistas/listCategoria.html.twig');


    }
    /**
     * @Route("/item/detalle", name="item")
     */
    public function detalleItem()
    {

       return $this->render('vistas/item.html.twig');


    }

}