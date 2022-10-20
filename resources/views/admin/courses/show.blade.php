@extends('layouts.app')
@section('metaTitle', 'course: ' . $course->name)
@section('content')
    <div class="container my-5">
        <div class="row py-5">
            <div class="col-8 m-auto bg-light p-5 ">
                <h3 class="py-3"><strong>Nome: </strong> {{ $course->name }}</h3>
                <div>
                    <ul>
                        <li>
                            <span><strong>Periodo: </strong> </span> {{ $course->period }}
                        </li>
                        <li>
                            <span><strong>Anno: </strong> </span> {{ $course->year }}
                        </li>
                        <li>
                            <span><strong>CFU: </strong> </span> {{ $course->cfu }}
                        </li>
                        <li>
                            <span><strong>Website: </strong> </span> {{ $course->website }}
                        </li>
                    </ul>
                </div>
                <div class="buttons mt-4 d-flex justify-content-between align-items-center">
                    <a class="btn btn-dark shadow " href="{{ route('admin.courses.index') }}">Torna indietro</a>
                    <a class="btn btn-primary shadow "
                        href="{{ route('admin.courses.edit', compact('course')) }}">Modifica</a>
                </div>
            </div>
        </div>
    </div>
@endsection
