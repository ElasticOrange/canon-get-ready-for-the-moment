var arrow_animation_duration, arrow_animation_easing, arrows_in, arrows_out, current_step, display_lens, goto_step_0, goto_step_1, goto_step_2, goto_step_3, goto_step_4, goto_step_5, goto_step_6, goto_step_minus_1, page_init, zoom_duration;

current_step = -1;

display_lens = function(index) {
  console.log("" + index + " display_lens");
  $('.preview-box').html(_.template($('#display_lens_' + index).html()));
  return true;
};

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

goto_step_minus_1 = function() {
  current_step = -1;
  $('.picture-container-blur').mouseenter(function() {
    return display_lens(1);
  });
  $('.picture-container-blur').hover(function() {
    return $('.preview-box').stop(true).fadeIn();
  }, function() {
    return $('.preview-box').stop(true).fadeOut();
  });
  return $('.picture-container-blur').click(function() {
    return goto_step_0();
  });
};

goto_step_0 = function() {
  current_step = 0;
  $('.whiteness').show(0);
  $('.container-picture-2').hide(0);
  $('.picture-container').show(0);
  $('.whiteness').fadeOut(900);
  $('.text-container').html(_.template($('#texts-kit').html()));
  $('#obiectiv-kit').show(0);
  setTimeout(function() {
    return goto_step_1();
  }, 10000);
  return $('.picture-container').mousemove(function(e) {
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
};

goto_step_1 = function() {
  if (current_step === 0) {
    $('.grey-container').fadeIn(400, function() {
      return true;
    });
    current_step = 1;
    display_lens(2);
    $('.grey-text').hover(function() {
      return $('.preview-box').stop(true).fadeIn();
    }, function() {
      return $('.preview-box').stop(true).fadeOut();
    });
  }
  $('.grey-text').mouseover(arrows_out);
  $('.grey-text').mouseout(arrows_in);
  return $('.grey-text').click(function(e) {
    return goto_step_2();
  });
};

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
        $('.text-container').fadeOut(function() {
          $('.text-container').html(_.template($('#texts-wide').html()));
          return $('.text-container').fadeIn();
        });
        setTimeout(function() {
          return $('.cerc-profil').fadeIn();
        }, 1000);
        $('#obiectiv-kit').fadeOut(400, function() {
          current_step = 2;
          $('#obiectiv-wide').fadeIn();
          $('.cerc-profil').mouseover(function() {
            if (current_step === 2) {
              setTimeout(function() {
                return $('.cerc-profil').css({
                  display: 'none'
                });
              }, 400);
              $('.circle-girl').stop(true).fadeIn();
              return $('.circle-girl-text').stop(true).fadeIn();
            }
          });
          return setTimeout(function() {
            if (current_step === 2) {
              setTimeout(function() {
                return $('.cerc-profil').css({
                  display: 'none'
                });
              }, 400);
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
        display_lens(3);
        $('.circle-girl-container').hover(function() {
          return $('.preview-box').stop(true).fadeIn();
        }, function() {
          return $('.preview-box').stop(true).fadeOut();
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
    if (Modernizr.bgpositionxy) {
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
    } else {
      console.log("FU Firefox");
    }
    $('.picture-container').fadeOut(zoom_duration);
    setTimeout(function() {
      return $('.picture-portrait').fadeIn(zoom_duration, function() {
        $('.text-container').fadeOut(function() {
          $('.text-container').html(_.template($('#texts-portrait').html()));
          return $('.text-container').fadeIn();
        });
        return $('#obiectiv-wide').fadeOut(400, function() {
          return $('#obiectiv-portrait').fadeIn();
        });
      });
    }, zoom_duration / 2);
    $('.back-button-container').show(0).fadeIn();
    return $('.back-button-container').click(function() {
      return goto_step_4();
    });
  }
};

goto_step_4 = function() {
  if (current_step === 3) {
    current_step = 4;
    if (Modernizr.bgpositionxy) {
      $('.picture-container').animate({
        'background-size': '100%',
        'background-position-x': '0px',
        'background-position-y': '0px'
      }, zoom_duration, 'easeOutQuad');
    } else {
      console.log('FU Firefox again');
    }
    $('.picture-container').css({
      display: 'block'
    }).fadeIn(zoom_duration);
    $('.picture-portrait').fadeOut(zoom_duration);
    $('.back-button-container').fadeOut(zoom_duration);
    setTimeout(function() {
      return $('.cerc-trotineta').fadeIn(function() {
        var opacity_infinite;
        opacity_infinite = function() {
          return $('.cerc-trotineta').animate({
            opacity: 1
          }, 600, function() {
            return $('.cerc-trotineta').animate({
              opacity: 0.5
            }, 600, opacity_infinite);
          });
        };
        return opacity_infinite();
      });
    }, 1000);
    $('.cerc-trotineta').mouseover(function() {
      if (current_step === 4) {
        setTimeout(function() {
          return $('.cerc-trotineta').css({
            display: 'none'
          });
        }, 400);
        $('.circle-boy').stop(true).fadeIn();
        return $('.circle-boy-text').stop(true).fadeIn();
      }
    });
    setTimeout(function() {
      if (current_step === 4) {
        setTimeout(function() {
          return $('.cerc-trotineta').css({
            display: 'none'
          });
        }, 400);
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
    display_lens(4);
    $('.circle-boy-container').hover(function() {
      return $('.preview-box').stop(true).fadeIn();
    }, function() {
      return $('.preview-box').stop(true).fadeOut();
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
    $('.cerc-trotineta').css({
      display: 'none'
    });
    if (Modernizr.bgpositionxy) {
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
    }
    $('.picture-container').fadeOut(zoom_duration);
    return setTimeout(function() {
      return $('.picture-tele').fadeIn(zoom_duration, function() {
        $('.text-container').fadeOut(function() {
          $('.text-container').html(_.template($('#texts-tele').html()));
          return $('.text-container').fadeIn();
        });
        return $('#obiectiv-portrait').fadeOut(400, function() {
          return $('#obiectiv-tele').fadeIn();
        });
      });
    }, zoom_duration / 2);
  }
};

goto_step_6 = function() {
  window.location = '/inscriere';
  return true;
};

page_init = function() {
  console.log('game');
  return goto_step_minus_1();
};
