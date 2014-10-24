@extends('layout.master')

@section('content')
    <div class="picture-container">
        <!-- Portrait -->
        <div class="girl-head"></div>
        <div class="circle-girl-container">
            <img class="circle-girl" src="/img/circle-girl.png" />
            <span class="circle-girl-text">Vreţi un portret perfect?</span>
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
        <span class="grey-text">Vrei să cuprinzi mai mult?</span>
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
            Perfect pentru început, obiectivul Canon EF-S 18-135mm f/3.5-5.6 IS STM este un obiectiv
            pentru uz general, care vă permite un zoom in şi mai mare, astfel încât obiectele aflate la
            distanță par mai aproape şi va ajută să surprindeți detalii interesante, peisaje sau să cuprindeţi
            mai mult. Obiectivul beneficiază și de tehnologie STM pentru focalizare discretă şi silenţioasă
            atunci când filmați un clip video. Încercaţi să setaţi obiectivul la plajă focală maximă (18mm),
            apropiaţi-vă de subiect şi fotografia va oferi senzaţia implicării dvs. direct în scena respectivă.
        </span>
    </script>

    <script type="text/template" id="texts-wide">
        <span class="text-container-title">
            Obiectivul EF-S 10-18mm f/4.5-5.6 IS STM
        </span><br />
        <span class="text-container-description">
            Uneori este imposibil să vă mai îndepărtați, chiar și cu un pas! Obiectivul EF-S 10-18mm f/4.5-
            5.6 IS STM, cu zoom ultra-grandangular cu plajă focală 10-18 mm, vă ajută să cuprindeţi mai
            mult în cadru, chiar şi atunci când sunteţi aproape de subiect, astfel încât să puteţi surprinde
            mai mult în fiecare fotografie realizată, fără a fi nevoiţi să vă îndepărtaţi foarte mult de cadrul
            fotografiat. Stabilizatorul de Imagine vă va ajuta să obţineţi întotdeauna fotografii mai clare.
            Încercaţi atunci când fotografiaţi un peisaj să îndreptaţi aparatul uşor în jos, astfel veţi obţine
            aşa-numitul efect de “linii directoare”, ce vor ghida privirea.
        </span>
    </script>

    <script type="text/template" id="texts-portrait">
        <span class="text-container-title">
            Obiectivul EF 50mm f/1.8 II
        </span><br />
        <span class="text-container-description">
            Cu ajutorul obiectivul EF 50mm f/1.8 II puteţi crea emoția vizuală necesară oricărui portret
            şi este ideal pentru estomparea fundalurilor deoarece are o diafragmă mare de 3,5 ori mai
            mare decât cea a obiectivului zoom standard EF-S 18-55mm f/3.5-5.6 IS STM. Estomparea
            fundalului într-o fotografie atrage atenţia asupra celui mai important element din cadru –
            persoana fotografiată. Încercaţi să setaţi aparatul în modul Av, pentru a putea seta diafragma
            dorită (nu uitaţi că diafragma mare este dată de valoare mică) apoi focalizaţi pe partea pe care o
            doriţi să fie clară, apăsând la jumătate butonul declanşator înainte de a fotografia.
        </span>
    </script>

    <script type="text/template" id="texts-tele">
        <span class="text-container-title">
            Obiectivul EF-S 55-250mm f/4-5.6 IS STM
        </span><br />
        <span class="text-container-description">
            Obiectivul EF-S 55-250mm f/4-5.6 IS STM vă ajută atunci când aveți nevoie să vă apropiați
            mai mult, dar nu aveți cum. Acest obiectiv zoom telefoto face ca obiectele de la distanță să
            pară mult mai aproape, astfel încât să vă puteți apropia de acțiune. Ideal pentru fotografierea
            scenelor de viață sălbatică, sport sau atunci când nu puteți fizic să vă apropiați de subiect.
        </span>
    </script>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
