# Init the Facebook application
window.fbAsyncInit = () ->
    FB.init \
        appId      : '790652110980620',
        xfbml      : true,
        version    : 'v2.1',
        status     : true

    FB_login()

# The global user object, contains all the data Facebook returned
FB_user = null

# Display the body container
FB_display = ()->
    $('body').show(0)

# This returns the user data and saves it in the global user object
FB_fetchInformation = ()->
    FB.api \
        '/me'
        , (response)->
            # Save the user object
            FB_user = response
            sessionStorage.setItem('FB_user', JSON.stringify(FB_user))

            # After we have the user data run whatever the page wants
            FB_init()

# Starts the login procedure
FB_login = ()->
    if sessionStorage.getItem('FB_user')?
        FB_user = JSON.parse(sessionStorage.getItem('FB_user'))
        FB_init()
    else
        FB.getLoginStatus (Response)->
            if Response.status is 'connected'
                FB_fetchInformation()
            else
                FB.login FB_fetchInformation
