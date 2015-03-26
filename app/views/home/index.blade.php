@extends('layout.master')

@section('content')
    <div class="container-picture">
        <img src="img/pagina_intro.png"/>
        <div class="ugly-circle"></div>
        <div class="text-intro"></div>
        <div class="text-intro-second">Momente speciale te asteapta la orice pas! Pregateste-te sa le surprinzi 
        si profita de discountul de 300 de Ron la achizitia unui obiectiv suplimentar. Parcurge aplicatia si 
        descopera obiectivul preferat!</div>
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
