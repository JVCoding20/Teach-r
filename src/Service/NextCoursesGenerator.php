<?php

namespace App\Service;

class NextCoursesGenerator
{
    public function getRandomCourse()
    {
        $randomCourse = [
            
                ["salut"],
                ["les jeunes"],
                ["course3"],
                ["course4"]
            ];
        return $randomCourse[mt_rand(0, count($randomCourse) -1)];
    }
}