<?php

namespace App\Controller;

use App\Model\RegularcourseModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegularCourseController extends AbstractController
{
    /**
     * @Route("/regular", name="regular_course")
     */
    public function regularcourse()
    {
        $regularcourse = RegularcourseModel::getRegularcourseData();

        return $this->render(
            'regular_course/course.html.twig', 
        [
            "regularcourse" => $regularcourse
        ]);
    }
}
