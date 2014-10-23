@extends('layout.master')

@section('content')
    <img src="/img/pagina_intro.png" />
    <div id="intrebare-container">
        <div class="text-intro text-intro3">Care a fost obiectivul ce ti-a placut cel mai mult?</div>

        <div class="radio-container">
            <form>
                <input type="radio" name="Obiectiv" id="obiectiv-1" value="1" class="obiectiv-margin">
                <label for="obiectiv-1">obiectivul 1</label>
                <br />

                <input type="radio" name="Obiectiv" id="obiectiv-2" value="2" class="obiectiv-margin">
                <label for="obiectiv-2">obiectivul 2</label>
                <br />

                <input type="radio" name="Obiectiv" id="obiectiv-3" value="3" class="obiectiv-margin">
                <label for="obiectiv-3">obiectivul 3</label>
                <br />

                <input type="radio" name="Obiectiv" id="obiectiv-4" value="4" class="obiectiv-margin">
                <label for="obiectiv-4">obiectivul 4</label>
                <br />
            </form>
        </div>

        <input id="submit-obiectiv" type="submit" class="submit-button" value="Submit" />
    </div>

    <img class="obiectiv-kit" src="/img/obiectiv-kit1.png" />
    <div class="text-container">
        <span class="text-container-title">
            Canon EF-S
        </span><br />
        <span class="text-container-description">
            Texte despre acest obiectiv si descrierea acestuia.Texte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuiaTexte despre acest obiectiv si descrierea acestuia
        </span>
    </div>

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
