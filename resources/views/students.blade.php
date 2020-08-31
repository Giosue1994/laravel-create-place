@extends('layouts.layout')

@section('main_content')
  <h1>Lista studenti</h1>

  <div>
    @foreach ($students as $student)
      <ul>
        <li>Nome: {{ $student->nome }}</li>
        <li>Cognome: {{ $student->cognome }}</li>
        <li>Voto: {{ $student->voto }}</li>
      </ul>
    @endforeach
  </div>
@endsection
