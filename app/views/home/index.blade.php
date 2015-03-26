@extends('layout.master')

@section('content')
    <div class="container-picture">
        <img src="img/pagina_intro.png"/>
        <div class="ugly-circle"></div>
        <div class="text-intro">Aparatul foto reprezintă jumătate din povestea unei fotografii!</div>
        <div class="text-intro-second">Cealaltă jumătate o
reprezintă obiectivele. Descoperă ce obiectiv ţi se potriveşte şi intră
automat în competiţie pentru a câştiga un obiectiv CANON</div>
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
