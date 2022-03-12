<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function dashboard()
    {
        if (auth()->check() && auth()->user()->role_id == 3) {
            $course = Course::paginate(5);
            $courseCount = Course::count();
            $category = sprintf("%02d", Category::count());
            $file = sprintf("%02d", File::count());
            $user = User::where('role_id', 2)->orderby('id', 'desc')->paginate(5);
            $userCount = User::where('role_id', 2)->count();
            $counter = [
                'course' => $course,
                'category' => $category,
                'file' => $file,
                'user' => $user,
                'userCount' => $userCount,
                'courseCount' => $courseCount
            ];
            return view('backend.pages.dashboard', compact('counter'));
        } elseif (auth()->check() && auth()->user()->role_id == 2) {
            return view('dashboard');
        }
    }
}
