<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class UserCoursesController extends Controller
{
    public function index()
    {
        $categories = Category::with(['courses', 'files'])->get();
        $courses = Course::with('category')->get();
        return view('frontend.pages.courses', compact('categories', 'courses'));
    }

    public function show(Course $course)
    {
        return view('frontend.pages.course-description', compact('course'));
    }
}
