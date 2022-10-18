@extends('layouts.app')

@section('content')

<section>

  <div class="container">
    <h1>{{ $student->name}} {{ $student->surname}}</h1>

  <div>
    <ul>
      <li>
        <span><strong>Data di nascita: </strong> </span> {{ $student->date_of_birth }}
      </li>
      <li>
        <span><strong>Cod. Fiscale: </strong> </span> {{ $student->fiscal_code }}
      </li>
      <li>
        <span><strong>Data di iscrizione: </strong> </span> {{ $student->enrollment_date }}
      </li>
      <li>
        <span><strong>Num. di registrazione: </strong> </span> {{ $student->registration_number }}
      </li>
      <li>
        <span><strong>Email: </strong> </span> {{ $student->email }}
      </li>
    </ul>
  </div>
</div>
<div class="container">
  <a href="{{ route('students.edit',$student) }}">Modifica Studente</a>

  <form action="{{ route('students.destroy',$student) }}" method="POST">
    @csrf
    @method('DELETE')
    
    <input type="submit" value="Elimina">
  </form>
</div>
</section>

<section>
  <div class="container">
    <h2>Elenco dei corsi di laurea</h2>
  </div>
</section>

@endsection