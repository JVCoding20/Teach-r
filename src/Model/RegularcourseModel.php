<?php

namespace App\Model;

class RegularcourseModel 
{
    public static function getRegularcourseData()
    {
        return self::$regularcourseData;
    }

    public static function getRegularcourseByChoiceIndex($index) 
    {
        if (!isset(self::$regularcourseData[$index])) {
            return false;
        }

        return self::$regularcourseData[$index];
    }

    private static $regularcourseData = [
        [
            'course' => 'Cours régulier de Philosophie',
            'planning' => 'Lundi, Mardi, Mercredi, Jeudi, Vendredi, Samedi, Dimanche',
            'schedule' => '1h30/jour',
            'teacher' => 'Rodolphe',
        ],

        [
            'course' => 'Cours régulier de Mathématiques',
            'planning' =>
            'Lundi, Mardi, Mercredi, Jeudi, Vendredi, Samedi, Dimanche',
            'schedule' => '4h30/jour',
            'teacher' => 'Luc',
        ],

        [
            'course' => 'Cours régulier d\'Anglais',
            'planning' => 'Lundi, Mardi, Mercredi, Jeudi, Vendredi, Samedi, Dimanche',
            'schedule' => '1h30/jour',
            'teacher' => 'Marion',
        ],

        [
            'course' => 'Cours régulier de Physique',
            'planning' => 'Lundi, Mardi, Mercredi, Jeudi, Vendredi, Samedi, Dimanche',
            'schedule' => '1h30/jour',
            'teacher' => 'Stéphane',
        ]
    ];
}