@extends('layout.master')

@section('content')
    <div class="whiteness">
    </div>

    <div class="container-picture-2">
        <div class="picture-container-blur hand"></div>
    </div>

    <div class="picture-container">
        <!-- Portrait -->
        <div class="girl-head"></div>
        <div class="circle-girl-container">
            <img class="cerc-profil" src="/img/gif_frunza2.gif" />
            <img class="circle-girl" src="/img/bulina_rosie.png" />
            <span class="circle-girl-text">Vreţi un detaliu perfect?</span>
        </div>
        <!-- /Portrait -->

        <!-- Tele -->
        <div class="boy-head"></div>
        <div class="circle-boy-container">
            <img class="cerc-trotineta" src="/img/trotineta.png" />
            <img class="circle-boy" src="/img/bulina_rosie.png" />
            <span class="circle-boy-text">Vrei mai aproape?</span>
        </div>
        <!-- /Tele -->

    </div>
        
    <!-- Nou -->
    <div class="circle-girlback-container">
        <!-- <div class="ugly-circle2"></div> -->
        <img src="/img/bulina_24mm.jpg" alt="" class="bulina_24mm">
        <span class="circle-girlback-text">Vrei un peisaj perfect?</span>
    </div>
    <!-- /Nou -->
        
    <!-- Pagina 24mm -->
    <div class="picture-container24mm">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Continuă</span>
        </div>
    </div>
    <!-- /Pagina 24mm -->




    <div class="preview-box"></div>

    <div class="picture-portrait">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Continuă</span>
        </div>
    </div>

    <div class="picture-tele">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Continuă</span>
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
    <img class="obiectiv-kit-60mm" id="obiectiv-portrait" src="/img/obiectiv_60mm.png">
    <img class="obiectiv-kit" id="obiectiv-tele" src="/img/Obiective/obiectiv3.png">
    <img class="obiectiv-kit-24mm" id="obiectiv-nou" src="/img/obiectiv_24mm.png">
    <div class="text-container">
    </div>

    <script type="text/template" id="display_lens_1">
        <div class="preview-lens1 preview-lens2"></div>
        <div class="preview-title">Canon<br /> EF-S 18-135mm f/3.5-5.6 IS STM</div>
        <div class="preview-content">Focalizează cu un click folosind obiectivul de 18-135mm și începe incursiunea în aplicația Canon.</div>
    </script>

    <script type="text/template" id="display_lens_2">
        <div class="preview-lens1 preview-lens1"></div>
        <div class="preview-title">Canon<br /> EF-S 10-18mm f/4.5-5.6 IS STM</div>
        <div class="preview-content">Cu obiectivul de 10-18mm poți cuprinde un cadru mai larg al imaginilor preferate.</div>
    </script>

    <script type="text/template" id="display_lens_3">
        <div class="preview-lens3"></div>
        <div class="preview-title">Canon<br /> EF-S 60mm f/2.8 Macro USM </div>
        <div class="preview-content-60mm">Obiectivul foto Canon EF-S 60mm f/2.8 Macro USM este un obiectiv pentru macro fotografie excelent, dinamic, compact, cu focalizare rapida care ofera detalii impresionante, indiferent de detaliul pe care doriti sa il surprindeti.</div>
    </script>

    <script type="text/template" id="display_lens_4">
        <div class="preview-lens1 preview-lens4"></div>
        <div class="preview-title">Canon<br /> EF-S 55-250mm f/4-5.6 IS STM </div>
        <div class="preview-content">Pentru situațiile când apropierea este imposibilă, obiectivul EF-S 55-250mm aduce subiectul în prim-plan.</div>
    </script>

    <script type="text/template" id="display_lens_5">
        <div class="preview-lens5"></div>
        <div class="preview-title">Canon<br /> EF-S 24mm f/2.8 STM </div>
        <div class="preview-content-24mm">Obiectivul Canon EF-S 24mm f/2.8 STM asigură imagini de o calitate excepţională şi o focalizare foarte rapidă.</div>
    </script>

    <script type="text/template" id="texts-kit">
        <span class="text-container-title">
            Canon EF-S 18-135mm f/3.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Perfect pentru început, obiectivul Canon EF-S 18-135mm f/3.5-5.6 IS STM este un obiectiv
            pentru uz general, care vă permite un zoom in mai mare decât obiectivul de kit, astfel încât obiectele aflate la
            distanță par mai aproape şi vă ajută să surprindeți detalii interesante, peisaje captivante sau
            pur şi simplu să cuprindeţi mai mult în fotografiile voastre. Doriţi focalizare discretă şi
            silenţioasă atunci când filmați un clip video? Nu este nici o problemă, obiectivul beneficiază și
            de tehnologia STM.<br />
            Încercaţi să setaţi obiectivul la plajă focală maximă (18mm), apropiaţi-vă
            de subiect şi fotografia va oferi senzaţia implicării voastre direct în scena respectivă.
        </p>
    </script>

    <script type="text/template" id="texts-wide">
        <span class="text-container-title">
            Canon EF-S 10-18mm f/4.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Uneori este imposibil să vă mai îndepărtați, chiar și cu un pas! Obiectivul EF-S 10-18mm f/4.5-
            5.6 IS STM, cu zoom ultra-grandangular cu plajă focală 10-18 mm, vă ajută să cuprindeţi mai
            mult în cadru, chiar şi atunci când sunteţi aproape de subiect, astfel încât să puteţi surprinde
            mai mult în fiecare fotografie realizată, fără a fi nevoiţi să vă îndepărtaţi foarte mult de cadrul
            fotografiat. În plus, fotografiile voastre vor fi întotdeauna mai clare cu ajutorul Stabilizatorului
            de Imagine.<br />
            Atunci când fotografiaţi un peisaj, sfatul nostru este să încercaţi să îndreptaţi
            aparatul uşor în jos, astfel veţi obţine aşa-numitul efect de “linii directoare”, ce vor ghida
            privirea.
        </p>
    </script>

    <script type="text/template" id="texts-portrait">
        <span class="text-container-title">
            Canon EF-S 60mm f/2.8 Macro USM
        </span><br />
        <p class="text-container-description">
            Doriţi să surprindeţi cele mai mici detalii? Obiectivul foto Canon EF-S 60mm f/2.8 Macro USM este
             un obiectiv pentru macro fotografie excelent, dinamic, compact, cu focalizare rapidă care oferă 
             detalii impresionante, indiferent de detaliul pe care doriţi să îl surprindeţi. Capacitatea acestuia 
             de a focaliza imaginile de mărime naturală pe senzorul de imagine oferă performanţe macro impresionante. 
             De asemenea, fotografiile de portret se vor bucura de o deschidere mare a diafragmei care îngustează 
             adâncimea câmpului şi creează o neclaritate de fundal minunată, făcând că subiectul dumneavoastră să iasă în evidenţă.
        </p>
    </script>

    <script type="text/template" id="texts-tele">
        <span class="text-container-title">
            Canon EF-S 55-250mm f/4-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Ați surprins o acţiune interesantă, dar este mult prea departe? Obiectivul EF-S 55-250mm f/4-
            5.6 IS STM vă ajută atunci când aveți nevoie să vă apropiați mai mult, dar nu aveți cum. Acest
            obiectiv zoom telefoto face ca obiectele de la distanță să pară mult mai aproape, astfel încât
            să vă puteți apropia de acțiune. Ideal pentru fotografierea scenelor
            atunci când nu puteți fizic să vă apropiați de subiect.
        </p>
    </script>

    <script type="text/template" id="texts-nou">
        <span class="text-container-title">
            Canon EF-S 24mm f/2.8 STM
        </span><br />
        <p class="text-container-description">
            Canon EF-S 24mm f/2.8 STM este un obiectiv grandangular compact(pancake) şi uşor ce poate fi purtat oriunde, 
            mai ales în timpul călătoriilor dumneavoastră. Asigură imagini de o calitate excepţională şi o focalizare 
            foarte rapidă. Sosirea serii nu va necesita folosirea unui blitz, întrucât diafragma maximă f/2.8 oferă 
            posibilitatea fotografierii în condiţii de iluminare scăzută.
        </p>
    </script>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
