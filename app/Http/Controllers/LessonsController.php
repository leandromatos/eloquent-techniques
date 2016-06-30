<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\LessonFilters;

// use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function index(LessonFilters $filters)
    {
        return Lesson::filter($filters)->get();
    }

    // public function index(Request $request)
    // {
    //     $lesson = (new Lesson)->newQuery();

    //     if ($request->exists('popular')) {
    //         $lesson->orderBy('views', 'desc');
    //     }

    //     if ($request->has('difficulty')) {
    //         $lesson->where('difficulty', $request->difficulty);
    //     }

    //     return $lesson->get();
    // }
}
