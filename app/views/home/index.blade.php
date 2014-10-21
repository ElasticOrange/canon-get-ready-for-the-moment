@extends('layout.master')

@section('content')
    <div class="container-picture">
        <img src="img/pagina_intro.png"/>
        <div class="text-intro">Descopera obiectiviele Canon STM si poti castiga unul gratuit</div>
        <div class="text-intro-second">Plimba-te cu mouse-ul si afla ce obiectiv ti se potriveste</div>
        <button type="button" class="button-descopera">Descopera</button>
    </div>
@stop

@section('js')
    <script src="/js/home/index.js"></script>
@stop
