<?php


namespace App\Controller;

use App\Controller\Service\HelperUtility;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\DBAL\DBALException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Validator\Constraints\Date;

class SecurityController extends AbstractController
{
    /**
     * @var HelperUtility
     */
    private $helperUtility;

    public function __construct(HelperUtility $helperUtility)
    {

        $this->helperUtility = $helperUtility;
    }


    /**
     * @Route("/login", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('vistas/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }


    /**
     * @Route("/api/registrar", name="api_account")
     * @param Request $request
     * @param UserRepository $userRepository
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return mixed
     */
    public function createUSer(Request $request, UserRepository $userRepository, UserPasswordEncoderInterface $passwordEncoder)
    {
        try {

            if (empty($request->get('nombre')) && empty($request->get('apellido')) && empty($request->get('email')) && empty($request->get('telefono')) && empty($request->get('password'))) {
                $this->helperUtility->prepararStatus('500', 'Llene todo los campos del formulario');
            } else {

//                $user = $this->getDoctrine()->getRepository(User::class)->findAll();
                $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['correo' => $request->get('email')]);

                if (is_null($user)) {

                    $entitymanager = $this->getDoctrine()->getManager();

                 $usuario = new User();

                 $usuario->setNombre($request->get('nombre'))
                     ->setApellido($request->get('apellido'))
                     ->setCorreo($request->get('email'))
                     ->setTelefono($request->get('telefono'))
                     ->setFechaCreado(new \DateTime('now'))
                     ->setEstado(1)
                     ->setPassword( $passwordEncoder->encodePassword($usuario, $request->get('password')));


                    $entitymanager->persist($usuario);
                    $entitymanager->flush();
                    $this->helperUtility->prepararStatus('200', 'ok');

                } else {
                    $this->helperUtility->prepararStatus('500', 'se encontro registro de esa cuenta.');
                }
            }

        }catch (\Doctrine\DBAL\DBALException $ex) {
            $this->helperUtility->prepararStatus('500', $ex);
        }

        return $this->json($this->helperUtility->status);


    }

}