@extends('layout.master')

@section('content')
    <div class="container-picture">
        <img src="img/pagina_intro.png"/>
        <div class="text-intro">Descopera obiectiviele Canon STM si poti castiga unul gratuit</div>
        <div class="text-intro-second">Plimba-te cu mouse-ul si afla ce obiectiv ti se potriveste</div>
        <button type="button" class="button-descopera">Descopera</button>
    </div>

    <!--Obiective-->

    <input type="submit" class="submit-button" value="Submit"/>

    <div class="obiectiv_unu obiective obiective-submit"><img src="img/Obiective/obiectiv2.png"/></div>

    <div class="obiectiv_doi obiective obiective-submit"><img src="img/Obiective/obiectiv1.png"/></div>

    <div class="obiectiv_trei obiective obiective-submit"><img src="img/Obiective/obiectiv4.png"/></div>

    <div class="obiectiv_patru obiective obiective-submit"><img src="img/Obiective/obiectiv3.png"/></div>

    <!--Obiective-->
@stop

@section('js')
    <script src="/js/home/index.js"></script>
@stop
