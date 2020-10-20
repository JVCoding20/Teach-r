<?php

namespace App\Service;

class NextCoursesGenerator
{
    public function getRandomCourse()
    {
        $randomCourse = [
            
                'Prochain cours de Philosophie: le 13 décembre',
                'Prochain cours de Mathématiques: le 27 octobre',
                'Procahin cours de Physique: le 15 novembre',
                'Prochain cours d\'Anglais: le 4 novembre'
            ];
        return $randomCourse[mt_rand(0, count($randomCourse) -1)];
    }
}