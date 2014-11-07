@extends('layout.master')

@section('content')
    <img src="/img/pagina_intro.png" />
    <div id="intrebare-container">
        <div class="ugly-circle"></div>
        <div class="text-intro text-intro3">
            Acum e timpul să alegi obiectivul preferat și să intri în competiția pentru a câștiga unul din obiectivele noastre Canon.
        </div>

        <div class="radio-container">
            <form>
                <input type="radio" value="1" name="Obiectiv" id="obiectiv-1" class="obiectiv-margin">
                <label for="obiectiv-1">EF-S 18-135mm f/3.5-5.6 IS STM</label>
                <br />

                <input type="radio" value="2" name="Obiectiv" id="obiectiv-2" class="obiectiv-margin">
                <label for="obiectiv-2">EF-S 10-18mm f/4.5-5.6 IS STM</label>
                <br />

                <input type="radio" value="3" name="Obiectiv" id="obiectiv-3" class="obiectiv-margin">
                <label for="obiectiv-3">EF 50mm f/1.8 II</label>
                <br />

                <input type="radio" value="4" name="Obiectiv" id="obiectiv-4" class="obiectiv-margin">
                <label for="obiectiv-4">EF-S 55-250mm f/4-5.6 IS STM</label>
                <br />
            </form>
        </div>

        <input id="submit-obiectiv" type="submit" class="submit-button" value="Mai departe" />
    </div>

    <!--Obiective-->
    <div class="obiectiv_unu obiective obiective-submit"><img src="/img/Obiective/obiectiv2.png"/></div>
    <div class="obiectiv_doi obiective obiective-submit"><img src="/img/Obiective/obiectiv1.png"/></div>
    <div class="obiectiv_trei obiective obiective-submit"><img src="/img/Obiective/obiectiv4.png"/></div>
    <div class="obiectiv_patru obiective obiective-submit"><img src="/img/Obiective/obiectiv3.png"/></div>
    <!--Obiective-->

    <script type="text/template" id="intrebare-final">
        <div class="ugly-circle"></div>
        <div class="text-intro text-intro2">Felicitări! Ai intrat automat în cursa pentru a câştiga un obiectiv Canon!</div>
        <div class="text-intro-second text-intro-second2">Te rugăm să ne laşi datele tale de contact pentru autentificare.</div>
        <input type="email" class="adress-email" placeholder="e-mail" />
        <input id="submit-email" type="submit" class="submit-button" value="Submit" />
    </script>
@stop

@section('js')
    <script src="/js/inscriere/index.js"></script>
@stop
