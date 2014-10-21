@extends('layout.master')

@section('content')
    <div class="picture-container"></div>

    <div class="grey-container">
        <img class="grey-overlay" src="/img/op-greylayer.png" />
        <span class="grey-text">Incadreaza mai mult</span>
        <img class="arrow-left" src="/img/op-arrowleft.png" />
        <img class="arrow-right" src="/img/op-arrowright.png" />
    </div>

    <img class="obiectiv-kit" src="/img/obiectiv-kit1.png">
    <div class="text-container">
        <span class="text-container-title">
            Canon EF-S
        </span><br />
        <span class="text-container-description">
            Texte despre acest obiectiv si descrierea acestuia.Texte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuia
        </span>
    </div>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
