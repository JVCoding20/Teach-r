<?php

namespace App\Model;

class CourseModel
{
    public static function getCourseData()
    {
        return self::$courseData;
    }

    public static function getCourseByStudentIndex($index)
    {
        if (!isset(self::$courseData[$index])) {
            return false;
        }

        return self::$courseData[$index];
    }

    private static $courseData = [
        [
            'course' => 'Cours régulier de Philosophie',
            'nextCourse' => 'aujourd\'hui',
            'icon1' => 'bag',
            'student' => 'Thomas',
            'icon2' => 'planner',
            'planning' => 'Lundi, Mardi, Mercredi, Jeudi, Vendredi, Samedi, Dimanche',
            'startOfTheCourse' => 'samedi 3 octobre',
            'icone3' => 'clock',
            'schedule' => '1h30/jour',
            'courseTime' => 'A partir de 14:38',
            'icon4' => 'mortarCap',
            'teacher' => 'Rodolphe',
        ],

        [
            'course' => 'Cours régulier de Mathématiques',
            'nextCourse' => 'demain',
            'icon1' => 'bag',
            'student' => 'Solène',
            'icon2' => 'planner',
            'planning' => 'Lundi, Mardi, Jeudi, Vendredi',
            'startOfTheCourse' => 'lundi 19 octobre',
            'icone3' => 'clock',
            'schedule' => '4h30/jour',
            'courseTime' => 'A partir de 09:30',
            'icon4' => 'mortarCap',
            'teacher' => 'Luc',
        ],

        [
            'course' => 'Cours régulier d\'Anglais',
            'nextCourse' => 'aujourd\'hui',
            'icon1' => 'bag',
            'student' => 'Thibault',
            'icon2' => 'planner',
            'planning' => 'Lundi, Mercredi, Jeudi, Vendredi',
            'startOfTheCourse' => 'mercredi 15 octobre',
            'icone3' => 'clock',
            'schedule' => '1h00/jour',
            'courseTime' => 'A partir de 10:40',
            'icon4' => 'mortarCap',
            'teacher' => 'Marion',
        ],

        [
            'course' => 'Cours régulier de Physique',
            'nextCourse' => 'demain',
            'icon1' => 'bag',
            'student' => 'Blandine',
            'icon2' => 'planner',
            'planning' => ' Samedi, Dimanche',
            'startOfTheCourse' => 'samedi 24 octobre',
            'icone3' => 'clock',
            'schedule' => '3h00/jour',
            'courseTime' => 'A partir de 13:30',
            'icon4' => 'mortarCap',
            'teacher' => 'Stéphane',
        ]
    ];
}