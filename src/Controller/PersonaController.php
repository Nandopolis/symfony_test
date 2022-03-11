<?php

namespace App\Controller;

use App\DTO\Persona;
use App\Form\PersonaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonaController extends AbstractController
{
    /**
     * @Route("/persona", name="persona")
     */
    public function index(): Response
    {
        return $this->render('persona/index.html.twig', [
            'controller_name' => 'PersonaController',
        ]);
    }

    /**
     * @Route("/persona/new", name="persona_new")
     */
    public function new(Request $request): Response
    {
        $persona = new Persona();
        $form = $this->createForm(PersonaType::class, $persona);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var PersonaModel $personaModel */
            $personaModel = $form->getData();

            return $this->render('persona/show.html.twig', [
                'controller_name' => 'PersonaController',
                'persona' => $personaModel
            ]);

        }
        return $this->render('persona/new.html.twig', [
            'controller_name' => 'PersonaController',
            'form' => $form->createView()
        ]);
    }
}
