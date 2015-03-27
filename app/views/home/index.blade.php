@extends('layout.master')

@section('content')
    <div class="container-picture">
        <img src="img/pagina_intro.png"/>
        <div class="ugly-circle"></div>
        <div class="text-intro"></div>
        <div class="text-intro-second">Momente speciale te aşteaptă la orice pas! Pregăteşte-te 
        să le surprinzi şi profită de discountul de 300 de Ron la achiziţia unui obiectiv suplimentar. 
        Parcurge aplicaţia şi descoperă obiectivul preferat!</div>
        <button type="button" class="button-descopera">Intră în aplicaţie aici!</button>
    </div>

    <input type="submit" class="submit-button" value="Submit"/>

    <!--Obiective-->
    <div class="obiective5">
        <img src="/img/obiective5.png" />
    </div>
    <!--/Obiective-->
@stop

@section('js')
    <script src="/js/home/index.js"></script>
@stop
