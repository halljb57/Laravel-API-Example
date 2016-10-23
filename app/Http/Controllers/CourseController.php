<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests;
use App\Http\Requests\CourseForm;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return response()->json(['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CourseForm $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CourseForm $request)
    {
        if ($request->ajax()) {
            $course = new Course();
            $course->author = $request->input('author');
            $course->name = $request->input('name');
            $course->description = $request->input('description');
            $course->price = $request->input('price');
            $course->save();
            return response()->json(['message' => 'Course saved']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return response()->json(['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Requests\CourseForm $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CourseForm $request, $id)
    {
        if($request->ajax())
        {
            $course = Course::find($id);
            $course->author = $request->input('author');
            $course->name = $request->input('name');
            $course->description = $request->input('description');
            $course->price = $request->input('price');
            $course->save();
            return response()->json(['message' => 'Course updated']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return response()->json(['message' => 'Course removed']);
    }
}
