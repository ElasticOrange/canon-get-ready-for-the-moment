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
    return FB_init();
  });
};

FB_login = function() {
  return FB.getLoginStatus(function(Response) {
    if (Response.status === 'connected') {
      return FB_fetchInformation();
    } else {
      return FB.login(FB_fetchInformation);
    }
  });
};
