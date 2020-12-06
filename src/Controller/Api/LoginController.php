<?php


namespace App\Controller\Api;


use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @param Request $request
     * @Route("/loginApi", name="login-api", methods={"POST"})
     * @return Response
     */
    public function loginAcceso(Request $request)
    {

        try {
            $ar=[];

            $email = $request->get('email');
            $passcode = $request->get('password');


            array_push($ar, array(
                'email' => $email,
                'password'=>$passcode
            ));

            $this->addFlash('notice_ok', $email);

        }catch (Exception $exception){
            $this->addFlash('notice_error','Revice el formato documento.');
        }

//        return $this->json($ar);
        return $this->redirectToRoute('homepage');
    }


}