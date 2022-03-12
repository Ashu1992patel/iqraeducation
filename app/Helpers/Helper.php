<?php

use App\Models\Category;
use App\Models\Course;
use App\Models\File;
use App\Models\Setting;

if (!function_exists('getCategories')) {
    function getCategories()
    {
        $categories = Category::with('courses')->get();
        return $categories;
    }
}

if (!function_exists('getCourses')) {
    function getCourses()
    {
        $courses = Course::with('category')->orderby('updated_at', 'desc')->get();
        return $courses;
    }
}

if (!function_exists('getSetting')) {
    function getSetting()
    {
        $setting = Setting::get();
        return $setting;
    }
}

if (!function_exists('active')) {
    function active($uri = '')
    {
        $active = '';
        if (request()->routeIs($uri)) {
            $active = 'active';
        }
        return $active;
    }
}

if (!function_exists('uploadMorphOneImage')) {
    function uploadMorphOneImage($image, $path, $model)
    {
        $file_name = time() . $image->getClientOriginalExtension();
        $image->move(public_path($path), $file_name);
        $image = public_path($path) . $file_name;

        $model->file()->create(['file' => $image]);
        return $image;
    }
}

if (!function_exists('uploadMorphManyImage')) {
    function uploadMorphManyImage($images, $path, $model)
    {
        if (is_array($images)) {
            foreach ($images as $key => $image) {
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path($path), $imageName);
                $model->files()->create([
                    'path' => $path . '/' . $imageName
                ]);
            }
        }
        return true;
    }
}

if (!function_exists('uploadUpdateMorphManyImage')) {
    function uploadUpdateMorphManyImage($images, $path, $model)
    {
        foreach ($model->files as $file) {
            // call the File delete()
            // unlink($file->path);
            $file->delete();
        }
        if (is_array($images)) {
            foreach ($images as $key => $image) {
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path($path), $imageName);
                $model->files()->create([
                    'path' => $path . '/' . $imageName
                ]);
            }
        }
        return true;
    }
}
