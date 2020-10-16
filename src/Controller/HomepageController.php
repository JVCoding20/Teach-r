<?php

namespace App\Controller;

use App\Model\CourseModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        $courses = CourseModel::getCourseData();
        
        return $this->render(
            'homepage/homepage.html.twig',
            [
                "courses" => $courses
            ]
        );
    }
}
