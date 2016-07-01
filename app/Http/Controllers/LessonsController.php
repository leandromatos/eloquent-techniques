<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\LessonFilters;

class LessonsController extends Controller
{
    public function index(LessonFilters $filters)
    {
        return Lesson::filter($filters)->get();
    }

    public function beginners()
    {
        return Lesson::beginner()->get();
    }
}
