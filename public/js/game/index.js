var arrow_animation_duration, arrow_animation_easing, arrows_in, arrows_out, current_step, goto_step_0, goto_step_1, goto_step_2, goto_step_3, goto_step_4, goto_step_5, goto_step_6, page_init, zoom_duration;

current_step = 0;

arrow_animation_duration = 400;

arrow_animation_easing = 'easeOutBounce';

arrows_out = function() {
  $('.arrow-left').stop(true, true).animate({
    left: '-=40px'
  }, arrow_animation_duration, arrow_animation_easing, function() {
    return true;
  });
  return $('.arrow-right').stop(true, true).animate({
    left: '+=40px'
  }, arrow_animation_duration, arrow_animation_easing, function() {
    return true;
  });
};

arrows_in = function() {
  $('.arrow-left').stop(true, true).animate({
    left: '+=40px'
  }, arrow_animation_duration, arrow_animation_easing, function() {
    return true;
  });
  return $('.arrow-right').stop(true, true).animate({
    left: '-=40px'
  }, arrow_animation_duration, arrow_animation_easing, function() {
    return true;
  });
};

goto_step_0 = function() {
  $('.text-container').html(_.template($('#texts-kit').html()));
  return $('#obiectiv-kit').show(0);
};

goto_step_1 = function() {
  if (current_step === 0) {
    $('.grey-container').fadeIn(400, function() {
      return true;
    });
    return current_step = 1;
  }
};

setTimeout(function() {
  return goto_step_1();
}, 10000);

$('.picture-container').mousemove(function(e) {
  var coordinate_x, coordinate_y, parent_offset;
  if (current_step === 0) {
    parent_offset = $(this).parent().offset();
    coordinate_x = e.pageX - parent_offset.left;
    coordinate_y = e.pageY - parent_offset.top;
    if (((coordinate_x >= 80) && (coordinate_x <= 160)) || ((coordinate_x >= 570) && (coordinate_x <= 650))) {
      return goto_step_1();
    }
  }
});

$('.grey-text').mouseover(arrows_out);

$('.grey-text').mouseout(arrows_in);

$('.grey-text').click(function(e) {
  return goto_step_2();
});

goto_step_2 = function() {
  var greyoverlay_fadeout_duration, kit_to_wide_duration;
  if (current_step === 1) {
    kit_to_wide_duration = 1000;
    greyoverlay_fadeout_duration = 500;
    return $('.grey-container').fadeOut(greyoverlay_fadeout_duration, function() {
      return $('.picture-container').animate({
        height: '507px',
        width: '760px',
        top: '0'
      }, kit_to_wide_duration, function() {
        $('#obiectiv-kit').fadeOut(400, function() {
          current_step = 2;
          $('#obiectiv-wide').fadeIn();
          $('.text-container').html(_.template($('#texts-wide').html()));
          $('.girl-head').show();
          $('.girl-head').mouseover(function() {
            if (current_step === 2) {
              $('.circle-girl').stop(true).fadeIn();
              return $('.circle-girl-text').stop(true).fadeIn();
            }
          });
          return setTimeout(function() {
            if (current_step === 2) {
              $('.circle-girl').stop(true).fadeIn();
              return $('.circle-girl-text').stop(true).fadeIn();
            }
          }, 10000);
        });
        $('.circle-girl-container').mouseenter(function() {
          return $('.circle-girl').stop(true, true).animate({
            boxShadow: '0px 0px 15px #fff'
          }, 100);
        });
        $('.circle-girl-container').mouseleave(function() {
          return $('.circle-girl').stop(true, true).animate({
            boxShadow: '0px 0px 0px #fff'
          }, 100);
        });
        return $('.circle-girl-container').click(function() {
          return goto_step_3();
        });
      });
    });
  }
};

zoom_duration = 1000;

goto_step_3 = function() {
  if (current_step === 2) {
    current_step = 3;
    $('.circle-girl-container').fadeOut();
    $('.picture-container').css({
      'background-size': '100%',
      'background-position-x': '0px',
      'background-position-y': '0px'
    });
    $('.picture-container').animate({
      'background-size': '300%',
      'background-position-x': '-160px',
      'background-position-y': '-910px'
    }, zoom_duration, 'easeInQuad');
    $('.picture-container').fadeOut(zoom_duration);
    setTimeout(function() {
      return $('.picture-portrait').fadeIn(zoom_duration, function() {
        return $('#obiectiv-wide').fadeOut(400, function() {
          $('#obiectiv-portrait').fadeIn();
          return $('.text-container').html(_.template($('#texts-portrait').html()));
        });
      });
    }, zoom_duration / 2);
    $('.back-button-container').show(0).fadeIn();
    $('.back-button-container').mouseenter(function() {
      return $(this).animate({
        opacity: 0.9
      });
    });
    $('.back-button-container').mouseleave(function() {
      return $(this).animate({
        opacity: 0.5
      });
    });
    return $('.back-button-container').click(function() {
      return goto_step_4();
    });
  }
};

goto_step_4 = function() {
  if (current_step === 3) {
    current_step = 4;
    $('.picture-container').animate({
      'background-size': '100%',
      'background-position-x': '0px',
      'background-position-y': '0px'
    }, zoom_duration, 'easeOutQuad');
    $('.picture-container').css({
      display: 'block'
    }).fadeIn(zoom_duration);
    $('.picture-portrait').fadeOut(zoom_duration);
    $('.back-button-container').fadeOut(zoom_duration);
    $('.boy-head').show();
    $('.boy-head').mouseover(function() {
      if (current_step === 4) {
        $('.circle-boy').stop(true).fadeIn();
        return $('.circle-boy-text').stop(true).fadeIn();
      }
    });
    setTimeout(function() {
      if (current_step === 4) {
        $('.circle-boy').stop(true).fadeIn();
        return $('.circle-boy-text').stop(true).fadeIn();
      }
    }, 10000);
    $('.circle-boy-container').mouseenter(function() {
      return $('.circle-boy').stop(true, true).animate({
        boxShadow: '0px 0px 15px #fff'
      }, 100);
    });
    $('.circle-boy-container').mouseleave(function() {
      return $('.circle-boy').stop(true, true).animate({
        boxShadow: '0px 0px 0px #fff'
      }, 100);
    });
    return $('.circle-boy-container').click(function() {
      return goto_step_5();
    });
  }
};

goto_step_5 = function() {
  if (current_step === 4) {
    current_step = 5;
    $('.circle-boy-container').fadeOut();
    $('.picture-container').css({
      'background-size': '100%',
      'background-position-x': '0px',
      'background-position-y': '0px'
    });
    $('.picture-container').animate({
      'background-size': '390%',
      'background-position-x': '-1760px',
      'background-position-y': '-1310px'
    }, zoom_duration, 'easeInQuad');
    $('.picture-container').fadeOut(zoom_duration);
    setTimeout(function() {
      return $('.picture-tele').fadeIn(zoom_duration, function() {
        return $('#obiectiv-portrait').fadeOut(400, function() {
          $('#obiectiv-tele').fadeIn();
          return $('.text-container').html(_.template($('#texts-tele').html()));
        });
      });
    }, zoom_duration / 2);
    $('.back-button-container').show(0).fadeIn();
    $('.back-button-container').mouseenter(function() {
      return $(this).animate({
        opacity: 0.9
      });
    });
    $('.back-button-container').mouseleave(function() {
      return $(this).animate({
        opacity: 0.5
      });
    });
    return $('.back-button-container').click(function() {
      return goto_step_6();
    });
  }
};

goto_step_6 = function() {
  window.location = '/inscriere';
  return true;
};

page_init = function() {
  console.log('game');
  return goto_step_0();
};
