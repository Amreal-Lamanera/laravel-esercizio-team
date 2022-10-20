<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'name' => 'required|max:255|min:3',
            'description' => 'nullable',
            'period' => ['required', Rule::in(['I semestre', 'II semestre', 'Annuale'])],
            'year' => ['required', Rule::in([1,2,3,4,5,6])],
            'cfu' => 'required|max:50|min:1',
            'website' => 'url|nullable',
        ]);

        $course = course::create($params);

        return redirect()->route('admin.courses.show', $course);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        // dd($request->all());
        $params = $request->validate([
            'name' => 'required|max:255|min:3',
            'description' => 'nullable',
            'period' => ['required', Rule::in(['I semestre', 'II semestre', 'Annuale'])],
            'year' => ['required', Rule::in([1,2,3,4,5,6])],
            'cfu' => 'required|max:50|min:1',
            'website' => 'url|nullable',
        ]);

        $course->update($params);

        return redirect()->route('admin.courses.show', $course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        
        return redirect()->route('admin.courses.index');
    }
}
