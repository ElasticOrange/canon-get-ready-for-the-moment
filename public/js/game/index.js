var arrow_animation_duration, arrow_animation_easing, arrows_in, arrows_out, current_step, page_init;

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

page_init = function() {
  var goto_step_1, goto_step_2;
  console.log('game');
  goto_step_1 = function() {
    if (current_step === 0) {
      $('.grey-container').fadeIn(400, function() {
        return true;
      });
      return current_step = 1;
    }
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
          return $('.obiectiv-kit').fadeOut(400, function() {
            $('.obiectiv-wide').fadeIn();
            $('.text-container-title').text('Canon altu');
            return $('.text-container-description').text('Canon descriere');
          });
        });
      });
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
  return $('.grey-text').click(function(e) {
    return goto_step_2();
  });
};
