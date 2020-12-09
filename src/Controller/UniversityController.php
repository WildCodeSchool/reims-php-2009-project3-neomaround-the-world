<?php

namespace App\Controller;

use App\Entity\University;
use App\Repository\UniversityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UniversityController extends AbstractController
{
    /**
     * @Route("/university", name="university")
     */
    public function index(UniversityRepository $universityRepository): Response
    {
        $universities = $universityRepository->findAll();

        return $this->render('university/index.html.twig', [
            'universities' => $universities,
        ]);
    }
}
