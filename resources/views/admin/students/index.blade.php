@extends('layouts.app')

@section('metaTitle', 'Studenti')

@section('content')

<section>
  <div class="container" style="display: flex; justify-content: flex-end;">
    <a href="{{ route('admin.students.create') }}">Aggiungi Studente</a>
  </div>
</section>

<div class="container">
  <div class="row">
    <div class="col-12">
      
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Data di nascita</th>
            <th>Data di iscrizione</th>
            <th>Num. di registrazione</th>
            <th>Email</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $s)
          
              <tr>
                <td>
                  <a href="{{ route('admin.students.show',$s) }}">
                    {{ $s->name }}
                  </a>
                </td>
                <td>{{ $s->surname }}</td>
                <td>{{ $s->date_of_birth }}</td>
                <td>{{ $s->enrollment_date }}</td>
                <td>{{ $s->registration_number }}</td>
                <td>{{ $s->email }}</td>
                <td>
                  <a href="{{ route('admin.students.edit',$s) }}">edit</a>
                </td>
                <td>
                  <form action="{{ route('admin.students.destroy',$s) }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    
                    <input type="submit" value="Elimina">
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