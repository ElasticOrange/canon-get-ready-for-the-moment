@extends('layout.master')

@section('content')
    <div class="picture-container">
        <!-- Portrait -->
        <div class="girl-head"></div>
        <div class="circle-girl-container">
            <img class="circle-girl" src="/img/circle-girl.png" />
            <span class="circle-girl-text">Vrei mai clar?</span>
        </div>
        <!-- /Portrait -->

        <!-- Tele -->
        <div class="boy-head"></div>
        <div class="circle-boy-container">
            <img class="circle-boy" src="/img/circle-boy.png" />
            <span class="circle-boy-text">Vrei mai aproape?</span>
        </div>
        <!-- /Tele -->
    </div>

    <div class="picture-portrait">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Inapoi</span>
        </div>
    </div>

    <div class="picture-tele">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Inapoi</span>
        </div>
    </div>

    <div class="grey-container">
        <img class="grey-overlay" src="/img/op-greylayer.png" />
        <span class="grey-text">Incadreaza mai mult</span>
        <img class="arrow-left" src="/img/op-arrowleft.png" />
        <img class="arrow-right" src="/img/op-arrowright.png" />
    </div>

    <img class="obiectiv-kit" id="obiectiv-kit" src="/img/Obiective/obiectiv2.png">
    <img class="obiectiv-kit" id="obiectiv-wide" src="/img/Obiective/obiectiv1.png">
    <img class="obiectiv-kit" id="obiectiv-portrait" src="/img/Obiective/obiectiv4.png">
    <img class="obiectiv-kit" id="obiectiv-tele" src="/img/Obiective/obiectiv3.png">
    <div class="text-container">
    </div>

    <script type="text/template" id="texts-kit">
        <span class="text-container-title">
            Canon EF-S 18-135mm f/3.5-5.6 IS STM
        </span><br />
        <span class="text-container-description">
            Texte despre acest obiectiv si descrierea acestuia.Texte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuia KIT
        </span>
    </script>

    <script type="text/template" id="texts-wide">
        <span class="text-container-title">
            Canon EF-S 10-18mm f/4.5-5.6 IS STM
        </span><br />
        <span class="text-container-description">
            Texte despre acest obiectiv si descrierea acestuia.Texte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuia WIDE
        </span>
    </script>

    <script type="text/template" id="texts-portrait">
        <span class="text-container-title">
            Canon EF 50mm f/1.8 II
        </span><br />
        <span class="text-container-description">
            Texte despre acest obiectiv si descrierea acestuia.Texte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuia PORTRAIT
        </span>
    </script>

    <script type="text/template" id="texts-tele">
        <span class="text-container-title">
            Canon EF-S 55-250mm f/4-5.6 IS STM
        </span><br />
        <span class="text-container-description">
            Texte despre acest obiectiv si descrierea acestuia.Texte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuia TELE
        </span>
    </script>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
