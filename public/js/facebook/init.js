var FB_display, FB_fetchInformation, FB_init, FB_login, FB_user;

window.fbAsyncInit = function() {
  FB.init({
    appId: '790652110980620',
    xfbml: true,
    version: 'v2.1',
    status: true
  });
  return FB_login();
};

FB_user = null;

FB_display = function() {
  return $('body').show(0);
};

FB_fetchInformation = function() {
  return FB.api('/me', function(response) {
    if (response.error != null) {
      FB_user = null;
    } else {
      FB_user = response;
      if (Modernizr.sessionstorage) {
        sessionStorage.setItem('FB_user', JSON.stringify(FB_user));
      }
    }
    return FB_init();
  });
};

FB_login = function() {
  if (Modernizr.sessionstorage && (sessionStorage.getItem('FB_user') != null)) {
    FB_user = JSON.parse(sessionStorage.getItem('FB_user'));
    return FB_init();
  } else {
    return FB.getLoginStatus(function(Response) {
      if (Response.status === 'connected') {
        return FB_fetchInformation();
      } else {
        return FB.login(FB_fetchInformation);
      }
    });
  }
};

FB_init = function() {
  FB_display();
  if (typeof page_init !== "undefined" && page_init !== null) {
    return page_init();
  }
};
