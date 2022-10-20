@extends('layouts.app')

@section('metaTitle', 'Add course')

@section('content')



    <div class="container">
        <h1 class="font-weight-bolder">Crea nuovo corso</h1>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.courses.update', $course) }}" method="POST">

                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        value="{{ old('name',$course->name) }}" name="name" placeholder="Inserisci il nome del corso.">
                        @error('name')
                            <div id="name" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description" class="font-weight-bold">Contenuto</label>
                        <textarea class="form-control" id="description" name="description" rows="20" placeholder="Inserisci il contenuto del post" required @error('description') is-invalid @enderror>{{ old('description', $course->description) }}</textarea>
                    </div>
                    @error('description')
                        <div id="description" class="invalid-feedback">
                            {{ $message }}
                        </div>
                     @enderror

                    <div class="form-group">
                        <label for="period" class="font-weight-bold">Periodo</label>
                        <select class="form-control" name="period" id="period" @error('period') is-invalid @enderror>
                            <option value="I semestre">I semestre</option>
                            <option value="II semestre">II semestre</option>
                            <option value="Annuale">Annuale</option>
                        </select>
                        
                        @error('period')
                            <div id="period" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="year" class="font-weight-bold">Anno</label>
                        <input type="number" min="1" max="6" class="form-control" @error('year') is-invalid @enderror id="year"
                            value="{{ old('year',$course->year) }}" name="year" placeholder="Inserisci l'anno del corso.">
                        @error('year')
                            <div id="year" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="cfu" class="font-weight-bold">Crediti dormativi (CFU)</label>
                        <select class="form-control" name="cfu" id="cfu" @error('cfu') is-invalid @enderror>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="18">18</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                            <option value="27">27</option>
                            <option value="30">30</option>
                        </select>
                        @error('cfu')
                            <div id="cfu" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="website" class="font-weight-bold">Sito Web</label>
                        <input type="text" class="form-control @error('website') is-invalid @enderror" id="website"
                            value="{{ old('website') }}" name="website" placeholder="https://home-del-corso.it">
                        @error('website')
                            <div id="website" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    

                    <div class="buttons mt-4 d-flex justify-content-between align-items-center">
                        <a class="btn btn-dark shadow" href="{{route('admin.courses.index')}}">Torna indietro</a>
                        <button type="submit" class="btn btn-primary shadow">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection