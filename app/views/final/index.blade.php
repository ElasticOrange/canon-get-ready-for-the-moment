@extends('layout.master')

@section('content')
    <div class="container-picture">
        <div class="ugly-circle"></div>
        <img src="img/pagina_intro.png"/>
        <div class="text-intro text-intro-final">Multumim pentru participare!</div>
        <div class="text-intro-second"></div>
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
    <script src="/js/final/index.js"></script>
@stop
