<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Degree;
use App\Http\Controllers\Controller;
use App\Teacher;
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
        $degrees = Degree::orderBy('name', 'asc')->get();

        return view('admin.courses.create', compact('degrees'));
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
            'year' => ['required', Rule::in([1, 2, 3, 4, 5, 6])],
            'cfu' => 'required|max:50|min:1',
            'website' => 'url|nullable',
            'degree_id' => 'required|exists:degrees,id'
        ]);

        $course = Course::create($params);

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
        $attachedTeacherIds = $course->teachers->pluck('id')->all();

        $teachers = Teacher::whereNotIn('id', $attachedTeacherIds)->orderBy('surname', 'asc')->get();

        return view('admin.courses.edit', compact('course', 'teachers'));
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
            'year' => ['required', Rule::in([1, 2, 3, 4, 5, 6])],
            'cfu' => 'required|max:50|min:1',
            'website' => 'url|nullable',
            'teacher_id' => 'nullable|exists:teachers,id'
        ]);

        if (array_key_exists('teacher_id', $params)) {
            $course->teachers()->attach($params['teacher_id']);
        }

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

    public function detachTeacher(Request $request)
    {
        // dd($request->all());
        $params = $request->all();
        $course_id = $params['course'];

        $course = Course::where('id', $course_id)->first();

        // dd($course);

        $params = $request->validate([
            'teacher' => 'exists:teachers,id',

        ]);

        $teacher_id = $params['teacher'];

        $course->teachers()->detach($teacher_id);

        return redirect()->route('admin.courses.show', $course);
    }
}
