@extends('layouts.app')

@section('content')

{{-- <section>
  <div class="container" style="display: flex; justify-content: flex-end;">
    <a href="{{ route('admin.departments.create') }}" type="button" class="btn btn-primary btn-sm">Aggiungi dipartimento</a>
  </div>
</section> --}}

<section>
  <div class="container">
    <h1>Elenco dipartimenti:</h1>
    <div class="row">
      <div class="col-12">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Indirizzo</th>
              <th scope="col">Telefono</th>
              <th scope="col">Email</th>
              <th scope="col">Sito Web</th>
              <th scope="col">Capo dip.</th>
              <th colspan="2">
                <a href="{{ route('admin.departments.create') }}" type="button" class="btn btn-primary btn-sm">Aggiungi dipartimento</a>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($departments as $d)
                <tr>
                  <td>{{ $d->id }}</td>
                  <td>
                    <a href="{{ route('admin.departments.show',$d) }}">
                      {{ $d->name }}
                    </a>
                  </td>
                  <td>{{ $d->address }}</td>
                  <td>{{ $d->phone }}</td>
                  <td>{{ $d->email }}</td>
                  <td>{{ $d->website }}</td>
                  <td>{{ $d->head_of_department }}</td>
                  <td>
                    <a href="{{ route('admin.departments.edit',$d) }}" type="button"
                    class="btn btn-secondary btn-sm">Modifica</a>
                  </td>
                  <td>
                    <form action="{{ route('admin.departments.destroy',$d) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      
                      <input type="submit" value="Elimina" class="btn btn-danger btn-sm">
                    </form>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>



@endsection