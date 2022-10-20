@extends('layouts.app')
@section('metaTitle', 'corsi')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Elenco corsi:</h1>
            </div>
            <div class="col-4 text-left d-flex justify-content-end align-items-center">
                <a href="{{ route('admin.courses.create') }}" type="button" class="btn btn-primary btn-sm">Aggiungi
                    corso</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Periodo</th>
                            <th scope="col">
                                Anno
                            </th>

                            <th scope="col">CFU</th>
                            <th scope="col">Website</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $c)
                            <tr>
                                <td scope="row"> {{ $c->id }} </td>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->period }}</td>
                                <td>{{ $c->year }}</td>
                                <td>{{ $c->cfu }}</td>
                                <td>{{ $c->website }}</td>
                                <td>
                                    <a href="{{ route('admin.courses.show', $c) }}" type="button"
                                        class="btn btn-secondary btn-sm">vedi</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.courses.edit', $c) }}" type="button"
                                        class="btn btn-secondary btn-sm">edit</a>
                                </td>
                                <td>
                                    <form class="d-inline-block" action="{{ route('admin.courses.destroy', $c) }}"
                                        method="POST" onsubmit=" return confirm('Vuoi eliminare lo coursee?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Cancella</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
