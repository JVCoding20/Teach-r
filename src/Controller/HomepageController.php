<?php

namespace App\Controller;

use App\Model\CourseModel;
use App\Service\NextCoursesGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{

    private $nextCoursesGenerator;

    public function __construct(NextCoursesGenerator $nextCoursesGenerator)
    {
        $this->nextCoursesGenerator = $nextCoursesGenerator;
    }
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
    
        // Récupérer depuis le NextCoursesGenerator des cards de cours aléatoire
        $courses = CourseModel::getCourseData();
        $nextCourses = $this->nextCoursesGenerator->getRandomCourse();
        
        
        return $this->render(
            'homepage/homepage.html.twig',
            [
                "courses" => $courses,
                "nextCourses" => $nextCourses
            ]
        );
    }
}
