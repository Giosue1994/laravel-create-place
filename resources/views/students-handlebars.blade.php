@extends('layouts.layout')

@section('main_content')
  <h1>Lista studenti handlebars</h1>

  <div class="div">

  </div>

  <script id="entry-template" type="text/x-handlebars-template">
    <div class="entry">
      <ul>
        <li>Nome: @{{ nome }}</li>
        <li>Cognome: @{{ cognome }}</li>
        <li>Voto: @{{ voto }}</li>
      </ul>
    </div>
  </script>

@endsection
