<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Foundation | Welcome</title>
        <link rel="stylesheet" href="css/foundation.css" />
        <script src="/js/vendor/modernizr.js"></script>
    </head>
    <body>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '790652110980620',
                    xfbml      : true,
                    version    : 'v2.1'
                });

                FB.getLoginStatus(function(response) {
                    if (response.status === 'connected') {
                        console.log('Logged in.');
                        console.log('Welcome!  Fetching your information.... ');
                        FB.api('/me', function(response) {
                            console.log('Successful login for: ' + response.name);
                            document.getElementById('status').innerHTML =
                            'Thanks for logging in, ' + response.name + '!';
                        });
                    }
                    else {
                        FB.login();
                    }
                });
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        @yield('content')

        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
  </body>
</html>
