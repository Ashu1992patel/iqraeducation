<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::orderby('id', 'asc')->simplePaginate(20);
        return view('backend.pages.student.index', compact('students'));
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
    public function store(Request $request)
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backend.pages.course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $categories = Category::get();
        return view('backend.pages.course.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
