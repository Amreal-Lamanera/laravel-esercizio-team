@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <h2>
                Modifica dati studente
            </h2>
        </div>
        <div class="container">
            <form action=" {{ route('admin.students.update', $student) }} " method="POST">
                @csrf
                @method('PUT')
                <p>
                    <label for="name">
                        Nome
                    </label>
                    <input
                        type="text"
                        style="@error('name') border-color: red; @enderror"
                        name="name"
                        id="name"
                        placeholder="Nome studente"
                        {{-- posso usare l'helper old per ricordarmi il valore inserito in caso di errore, che mi rimanda alla pagina, così da non perderlo --}}
                        value="{{ old('name', $student->name) }}"
                    >
                    {{-- SE voglio un errore singolo --}}
                    @error('name')
                        <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </p>
                <p>
                    <label for="surname">
                        Cognome
                    </label>
                    <input
                        type="text"
                        name="surname"
                        id="surname"
                        placeholder="Cognome studente"
                        value="{{ old('surname', $student->surname) }}"
                    >
                </p>
                {{-- SE voglio un errore singolo --}}
                @error('surname')
                    <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                @enderror
                <p>
                    <label for="date_of_birth">
                        Data di nascita
                    </label>
                    <input
                        type="date"
                        name="date_of_birth"
                        id="date_of_birth"
                        placeholder="Data di nascita studente"
                        value="{{ old('date_of_birth', $student->date_of_birth) }}"
                    >
                </p>
                {{-- SE voglio un errore singolo --}}
                @error('date_of_birth')
                    <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                @enderror
                <p>
                    <label for="address">
                        CF
                    </label>
                    <input
                        type="text"
                        name="fiscal_code"
                        id="fiscal_code"
                        placeholder="Codice fiscale studente"
                        value="{{ old('fiscal_code', $student->fiscal_code) }}"
                    >
                </p>
                {{-- SE voglio un errore singolo --}}
                @error('fiscal_code')
                    <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                @enderror
                <p>
                    <label for="enrollment_date">
                        Data iscrizione
                    </label>
                    <input
                        type="date"
                        name="enrollment_date"
                        id="enrollment_date"
                        placeholder="Data iscrizione"
                        value="{{ old('enrollment_date', $student->enrollment_date) }}"
                    >
                </p>
                {{-- SE voglio un errore singolo --}}
                @error('enrollment_date')
                    <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                @enderror
                <p>
                    <label for="email">
                        Email
                    </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Email studente"
                        value="{{ old('email', $student->email) }}"
                    >
                </p>
                {{-- SE voglio un errore singolo --}}
                @error('email')
                    <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                @enderror
                <p>
                    <input type="submit" value="Salva">
                </p>
            </form>
        </div>
    </section>
@endsection