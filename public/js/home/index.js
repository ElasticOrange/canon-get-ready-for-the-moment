var FB_init;

FB_init = function() {
  console.log(FB_user);
  $('#name').text(FB_user.name);
  return $('body').show(0);
};
