var page_init, validate_email;

validate_email = function(email) {
  var email_regex;
  email_regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return email_regex.test(email);
};

page_init = function() {
  console.log('intrebare');
  return $('#submit-obiectiv').click(function(e) {
    e.preventDefault();
    $('#intrebare-container').html(_.template($('#intrebare-final').html()));
    return $('#submit-email').click(function(e) {
      var p, selected_value;
      e.preventDefault();
      selected_value = $('[type=radio]:checked').length ? $('[type=radio]:checked').val() : 1;
      if (!validate_email($('[type=email]').val())) {
        $('.adress-email').focus().addClass('error');
        return false;
      }
      p = {
        obiectiv: selected_value,
        email: $('[type=email]').val()
      };
      return $.post('/inscriere', p, function(s, t) {
        return true;
      }, 'json');
    });
  });
};
