current_step = 0

# Arrows animation for step 1
arrow_animation_duration = 400
arrow_animation_easing = 'easeOutBounce'

arrows_out = ()->
    $('.arrow-left').stop(true, true).animate \
        left: '-=40px'
        , arrow_animation_duration
        , arrow_animation_easing
        , ()-> true
    $('.arrow-right').stop(true, true).animate \
        left: '+=40px'
        , arrow_animation_duration
        , arrow_animation_easing
        , ()-> true

arrows_in = ()->
    $('.arrow-left').stop(true, true).animate \
        left: '+=40px'
        , arrow_animation_duration
        , arrow_animation_easing
        , ()-> true
    $('.arrow-right').stop(true, true).animate \
        left: '-=40px'
        , arrow_animation_duration
        , arrow_animation_easing
        , ()-> true

# Step 0
goto_step_0 = ()->
    $('.text-container').html(_.template($('#texts-kit').html()))

# Step 1 (Obiectiv kit)
goto_step_1 = ()->
    if current_step is 0
        $('.grey-container').fadeIn \
            400
            , ()->
                true
        current_step = 1

# Wait a few seconds or until the user mouses over the margins
setTimeout \
    ()->
        goto_step_1()
    , 10000

# Display the grey overlay if the user mouses over the sides of the image
$('.picture-container').mousemove (e)->
    if current_step is 0
        parent_offset = $(@).parent().offset()
        coordinate_x = e.pageX - parent_offset.left
        coordinate_y = e.pageY - parent_offset.top

        if ((coordinate_x >= 80) and (coordinate_x <= 160)) or ((coordinate_x >= 570) and (coordinate_x <= 650))
            goto_step_1()

# Animate arrows on mouseover
$('.grey-text').mouseover arrows_out

# Animate arrows back
$('.grey-text').mouseout arrows_in

# Send to step 2
$('.grey-text').click (e)->
    goto_step_2()

# Step 2 (Obiectiv wide)
goto_step_2 = ()->
    if current_step is 1
        kit_to_wide_duration = 1000
        greyoverlay_fadeout_duration = 500

        $('.grey-container').fadeOut \
            greyoverlay_fadeout_duration
            , ()->
                $('.picture-container').animate \
                {
                    height: '507px'
                    , width: '760px'
                    , top: '0'
                }
                , kit_to_wide_duration
                , ()->
                    # Hide the kit objective
                    $('.obiectiv-kit').fadeOut \
                        400
                        , ()->
                            current_step = 2

                            # Fadein the wide objective
                            $('.obiectiv-wide').fadeIn()

                            # Display the wide texts
                            $('.text-container').html(_.template($('#texts-wide').html()))

                            # Display hidden div to active the chick's head
                            $('.girl-head').show()
                            $('.girl-head').mouseover ()->
                                if current_step is 2
                                    $('.circle-girl').stop(true).fadeIn()
                                    $('.circle-girl-text').stop(true).fadeIn()

                            # Display the hidden circle div if the user waits for 10 seconds
                            setTimeout \
                                ()->
                                    if current_step is 2
                                        $('.circle-girl').stop(true).fadeIn()
                                        $('.circle-girl-text').stop(true).fadeIn()
                                , 10000

                            $('.circle-girl-container').mouseenter ()->
                                $('.circle-girl').stop(true, true).animate \
                                    boxShadow: '0px 0px 15px #fff'
                                    , 100
                            $('.circle-girl-container').mouseleave ()->
                                $('.circle-girl').stop(true, true).animate \
                                    boxShadow: '0px 0px 0px #fff'
                                    , 100

                            $('.circle-girl-container').click ()->
                                goto_step_3()

zoom_duration = 1000

goto_step_3 = ()->
    if current_step is 2
        current_step = 3
        $('.circle-girl-container').fadeOut()

        $('.picture-container').css \
            'background-size': '100%'
            , 'background-position-x': '0px'
            , 'background-position-y': '0px'

        $('.picture-container').animate \
            'background-size': '300%'
            , 'background-position-x': '-160px'
            , 'background-position-y': '-910px'
            , zoom_duration
            , 'easeInQuad'

        $('.picture-container').fadeOut(zoom_duration)
        setTimeout \
            ()->
                $('.picture-portrait').fadeIn \
                    zoom_duration
                    , ()->
                        # Fadein the portrait objective
                        $('.obiectiv-wide').fadeOut \
                            400
                            , ()->
                                $('.obiectiv-portrait').fadeIn()

                                # Display the portrait texts
                                $('.text-container').html(_.template($('#texts-portrait').html()))
            , zoom_duration / 2

        # Display the back button
        $('.back-button-container').show(0).fadeIn()
        # Add fade events on the back button
        $('.back-button-container').mouseenter ()->
            $(@).animate \
                opacity: 0.9
        $('.back-button-container').mouseleave ()->
            $(@).animate \
                opacity: 0.5
        # Go back to big picture on click
        $('.back-button-container').click ()->
            goto_step_4()

# Step 4: Back to big picture from the portrait
goto_step_4 = ()->
    if current_step is 3
        current_step = 4

        $('.picture-container').animate \
            'background-size': '100%'
            , 'background-position-x': '0px'
            , 'background-position-y': '0px'
            , zoom_duration
            , 'easeOutQuad'

        $('.picture-container').css({display: 'block'}).fadeIn(zoom_duration)
        $('.picture-portrait').fadeOut(zoom_duration)

        $('.back-button-container').fadeOut(zoom_duration)

        # Prepare for tele
        # Display hidden div to active the chick's head
        $('.boy-head').show()
        $('.boy-head').mouseover ()->
            if current_step is 4
                $('.circle-boy').stop(true).fadeIn()
                $('.circle-boy-text').stop(true).fadeIn()

        # Display the hidden circle div if the user waits for 10 seconds
        setTimeout \
            ()->
                if current_step is 4
                    $('.circle-boy').stop(true).fadeIn()
                    $('.circle-boy-text').stop(true).fadeIn()
            , 10000

        $('.circle-boy-container').mouseenter ()->
            $('.circle-boy').stop(true, true).animate \
                boxShadow: '0px 0px 15px #fff'
                , 100
        $('.circle-boy-container').mouseleave ()->
            $('.circle-boy').stop(true, true).animate \
                boxShadow: '0px 0px 0px #fff'
                , 100

        $('.circle-boy-container').click ()->
            goto_step_5()

# Step 5: Tele obiectiv
goto_step_5 = ()->
    if current_step is 4
        current_step = 5
        $('.circle-boy-container').fadeOut()

        # Zoom in
        $('.picture-container').css \
            'background-size': '100%'
            , 'background-position-x': '0px'
            , 'background-position-y': '0px'

        $('.picture-container').animate \
            'background-size': '390%'
            , 'background-position-x': '-1760px'
            , 'background-position-y': '-1310px'
            , zoom_duration
            , 'easeInQuad'

        $('.picture-container').fadeOut(zoom_duration)
        setTimeout \
            ()->
                $('.picture-tele').fadeIn \
                    zoom_duration
                    , ()->

                        $('.obiectiv-portret').fadeOut \
                            400
                            , ()->
                                $('.obiectiv-tele').fadeIn()

                                # Display the tele texts
                                $('.text-container').html(_.template($('#texts-tele').html()))
            , zoom_duration / 2

        # Display the back button
        $('.back-button-container').show(0).fadeIn()
        # Add fade events on the back button
        $('.back-button-container').mouseenter ()->
            $(@).animate \
                opacity: 0.9
        $('.back-button-container').mouseleave ()->
            $(@).animate \
                opacity: 0.5
        # Go back to big picture on click
        $('.back-button-container').click ()->
            goto_step_6()

goto_step_6 = ()->
    window.location = '/intrebare'
    true

page_init = ()->
    console.log 'game'

    # Setting up steps
    goto_step_0()


