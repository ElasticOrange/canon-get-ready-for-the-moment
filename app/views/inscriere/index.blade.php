@extends('layout.master')

@section('content')
    <img src="/img/pagina_intro.png" />
    <div id="intrebare-container">
        <div class="text-intro text-intro3">Care a fost obiectivul ce ti-a placut cel mai mult?</div>

        <div class="radio-container">
            <form>
                <input type="radio" name="Obiectiv" id="obiectiv-1" class="obiectiv-margin">
                <label for="obiectiv-1">EF-S 10-18mm</label>
                <br />

                <input type="radio" name="Obiectiv" id="obiectiv-2" class="obiectiv-margin">
                <label for="obiectiv-2">EF-S 18-135mm</label>
                <br />

                <input type="radio" name="Obiectiv" id="obiectiv-3" class="obiectiv-margin">
                <label for="obiectiv-3">EF-S 55-250mm</label>
                <br />

                <input type="radio" name="Obiectiv" id="obiectiv-4" class="obiectiv-margin">
                <label for="obiectiv-4">EF 50mm</label>
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
        <div class="text-intro text-intro2">Felicitari ai intrat automat in tragerea la sorti pentru un obiectiv Canon</div>
        <div class="text-intro-second text-intro-second2">Lasa-ne adresa ta de email pentru a fi inregistrat pe lista de candidati</div>
        <input type="email" class="adress-email" placeholder="e-mail" />
        <input id="submit-email" type="submit" class="submit-button" value="Submit" />
    </script>
@stop

@section('js')
    <script src="/js/inscriere/index.js"></script>
@stop
