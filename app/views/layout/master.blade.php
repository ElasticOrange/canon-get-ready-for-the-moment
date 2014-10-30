<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Orasul printr-un obiectiv</title>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/pages.css?2014103001">
        <link rel="stylesheet" href="/css/style.css?2014103001">
        <script src="/js/vendor/modernizr.js"></script>
    </head>
    <body>
        <script>
            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-55513824-2', 'auto');
            ga('send', 'pageview');
        </script>

        <div class="container-main">
            @yield('content')
            <div class="logo"><img src="/img/logo.png"/></div>
            <a target="_blank" href="/doc/Regulamentulcampaniei-Orasulprintr-unobiectiv.pdf" class="regulament">Regulament</a>
        </div>

        <script src="/js/vendor/jquery.js"></script>
        <script src="/js/vendor/jquery-ui.min.js"></script>
        <script src="/js/vendor/jquery.animate-shadow-min.js"></script>
        <script src="/js/vendor/underscore-min.js"></script>
        <script src="/js/facebook/init.js"></script>
        @yield('js')
  </body>
</html>
