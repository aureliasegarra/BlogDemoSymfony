<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/register", name="security_register")
     */
    public function register(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        // parsing request
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // data form treatment
            
        } 

        return $this->render('security/index.html.twig', [
            'controller_name' => 'Inscription',
            'form' => $form->createView(),
        ]);
    }
}
