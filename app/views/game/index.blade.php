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
    <img class="obiectiv-wide" src="/img/obiectiv-kit1.png">
    <img class="obiectiv-portret" src="/img/obiectiv-kit1.png">
    <img class="obiectiv-tele" src="/img/obiectiv-kit1.png">
    <div class="text-container">
    </div>

    <script type="text/template" id="texts-kit">
        <span class="text-container-title">
            Canon EF-S
        </span><br />
        <span class="text-container-description">
            Texte despre acest obiectiv si descrierea acestuia.Texte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuia
        </span>
    </script>

    <script type="text/template" id="texts-wide">
        <span class="text-container-title">
            Canon EF-S Wide
        </span><br />
        <span class="text-container-description">
            Texte despre acest obiectiv si descrierea acestuia.Texte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuia WIDE
        </span>
    </script>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
