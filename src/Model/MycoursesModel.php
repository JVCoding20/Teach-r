<?php

namespace App\Model;

class MycoursesModel
{
    public static function getMycoursesData()
    {
        return self::$mycoursesData;
    }

    public static function getMycoursesByProfilIndex($index)
    {
        if (!isset(self::$mycoursesData[$index])) {
            return false;
        }

        return self::$mycoursesData[$index];
    }

    private static $mycoursesData = [

        [
            'date' => 'Le lundi 19 octobre',
            'mycourse' => 'Cours de philosophie avec Rodolphe'
        ],

        [
            'date' => 'Le samedi 3 octobre',
            'mycourse' => 'Cours de matématiques avec Luc'
        ],

        [
            'date' => 'Le mercredi 15 octobre',
            'mycourse' => 'Cours d\'anglais avec Marion'
        ],

        [
            'date' => 'Le samedi 24 octobre',
            'mycourse' => 'Cours de physique avec Stéphane'
        ],
    ];
}