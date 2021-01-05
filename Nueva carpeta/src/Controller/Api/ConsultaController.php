<?php


namespace App\Controller\Api;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ConsultaController extends AbstractController
{

    /**
     * @Route("/contact", name="contacto", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function contacto(Request $request)
    {
        try {
            $respuesta="";

            $email =$this->validar_datos($request->get('emailContact'));
            $message =$this->validar_datos($request->get('messageContact'));
            $nombre = $this->validar_datos($request->get('nameContact'));



            if (!(empty($email) ) && !(empty($nombre)) && !(empty($message))){
                $respuesta="Recibimos su message, lo más pronto que posible, le contactaremos. ";
            }else {
                $respuesta="error";
            }


        }catch (\Exception $exception){
        }

        return $this->json($respuesta);
//        return $this->redirectToRoute('homepage');
    }

    function validar_datos($validar)
    {
        $validar = trim($validar);
        $validar = strtolower($validar);
        $validar = stripslashes($validar);
        return $validar;
    }

}