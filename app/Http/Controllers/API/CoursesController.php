<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Course;
        $course->name = $request->name;

        //to be continued
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $courses = Course::find($id);

        if(!empty($courses)) {
            return response()->json($courses);
        } else {
            return response()->json([
                "message" => "El curso no se encuentra"
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
