<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\File;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderby('id', 'desc')->get();
        return view('backend.pages.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.pages.course.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        try {
            $course = Course::create($request->validated());
            $images = [
                $request->thumbnail,
                $request->image
            ];
            $path = 'frontend/images/courses/';
            uploadMorphManyImage($images, $path, $course);

            return redirect()->route('course.index')->with('success', 'Yeah! New course has been added successfully.');
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('course.create')->with('error', 'Oops! Something went wrong, Please try again later.');
            // dd($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('backend.pages.course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = Category::get();
        return view('backend.pages.course.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(CourseUpdateRequest $request, Course $course)
    {
        try {
            $course->update($request->validated());

            if ($request->has('thumbnail') and $request->has('image')) {
                $images = [
                    $request->thumbnail,
                    $request->image
                ];
                $path = 'frontend/images/courses/';
                uploadUpdateMorphManyImage($images, $path, $course);
            }
            return redirect()->route('course.index')->with('success', 'Yeah! Course details has been updated successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
