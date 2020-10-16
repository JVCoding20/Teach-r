<?php

namespace App\Controller;

use App\Model\MycoursesModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
    /**
     * @Route("/course", name="course")
     */
    public function course()
    {
        $mycourses = MycoursesModel::getMycoursesData();
        return $this->render(
            'course/myCourses.html.twig',
        [
            "mycourses" => $mycourses
        ]
            );
    }

    /**
     * @Route("/select/{id}", name="select_course", requirements={"id"="\d+"})
     */
    public function selectCourse(int $id, SessionInterface $session)
    {
        // récupérer les données du cours
        $mycourses = MycoursesModel::getMycoursesByProfilIndex($id);

        // mettre les données en session
        $session->set('widget_course', $mycourses);

        // rediriger le navigateur vers le profil de l'étudiant

        return $this->redirectToRoute('course');


        
    }


}
