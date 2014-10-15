var FB_fetchInformation, FB_login, FB_user;

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

FB_fetchInformation = function() {
  return FB.api('/me', function(response) {
    FB_user = response;
    sessionStorage.setItem('FB_user', JSON.stringify(FB_user));
    return FB_init();
  });
};

FB_login = function() {
  if (sessionStorage.getItem('FB_user') != null) {
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
