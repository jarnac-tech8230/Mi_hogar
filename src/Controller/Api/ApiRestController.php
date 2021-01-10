<?php


namespace App\Controller\Api;


use App\Entity\Item;
use mysql_xdevapi\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ApiRestController
 * @package App\Controller\Api
 * @Route("/v1")
 */

class ApiRestController extends AbstractController
{

    //all items

    /**
     * @Route("/allDetails")
     * @param Repository $repository
     */
    public function AllThings()
    {

        $repository = $this->getDoctrine()->getRepository(Item::class);

        $items=$repository->findAll();
        dump($items); die();


    }

    // looking for by id

//    /**
//     * @Route("/search/{id}", methods={"POST","GET"})
//     * @param Request $request
//     */
//    public function searchId(Request $request, $id=null)
//
//    {
//
//        try {
//            if (!($id ==  null || empty($id))){
//                $repository = $this->getDoctrine()->getRepository(Item::class);
//                $item = $repository->find($id);
//                dump($item);die();
//            }
//
//        }catch (Exception $exception){
//
//        }
//
//
//
//    }
//



}