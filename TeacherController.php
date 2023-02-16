<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('teacher/goToIndex', name: 'app_teacher_goToIndex')]
    public function goToIndex(): JsonResponse
    {
        return $this->redirectToRoute('app_student');
    }

    #[Route('/teacher', name: 'app_teacher')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TeacherController.php',
        ]);
    }

     #[Route('/ShowTeacher/{name}', name: 'ShowTeacher')]
    public function ShowTeacher($name): JsonResponse
    {
        return new JsonResponse("bonjour".$name);
    }
}


