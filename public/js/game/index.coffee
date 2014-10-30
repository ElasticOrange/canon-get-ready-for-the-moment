current_step = -1

# Load lens data for small box
display_lens = (index)->
    console.log "#{index} display_lens"

    $('.preview-box').html(_.template($('#display_lens_'+index).html()))
    true

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

# Step -1
goto_step_minus_1 = ()->
    current_step = -1

    $('.picture-container-blur').mouseenter ()->
        display_lens(1)

    $('.picture-container-blur').hover \
        ()->
            $('.preview-box').stop(true).fadeIn()
        , ()->
            $('.preview-box').stop(true).fadeOut()

    $('.picture-container-blur').click ()->
        goto_step_0()

# Step 0
goto_step_0 = ()->
    current_step = 0

    $('.whiteness').show(0)

    $('.container-picture-2').hide(0)
    $('.picture-container').show(0)

    $('.whiteness').fadeOut(900)

    $('.text-container').html(_.template($('#texts-kit').html()))
    $('#obiectiv-kit').show(0)

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

# Step 1 (Obiectiv kit)
goto_step_1 = ()->
    if current_step is 0
        $('.grey-container').fadeIn \
            400
            , ()->
                true
        current_step = 1

        # Display lens 2
        display_lens(2)

        # Display the box for lens
        $('.grey-text').hover \
            ()->
                $('.preview-box').stop(true).fadeIn()
            , ()->
                $('.preview-box').stop(true).fadeOut()

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
                    # Display the wide texts
                    $('.text-container').fadeOut ()->
                        $('.text-container').html(_.template($('#texts-wide').html()))
                        $('.text-container').fadeIn()

                    setTimeout \
                        ()->
                            $('.cerc-profil').fadeIn()
                        , 1000

                    # Hide the kit objective
                    $('#obiectiv-kit').fadeOut \
                        400
                        , ()->
                            current_step = 2

                            # Fadein the wide objective
                            $('#obiectiv-wide').fadeIn()

                            # Display hidden div to active the chick's head
                            # $('.girl-head').show()
                            $('.cerc-profil').mouseover ()->
                                if current_step is 2
                                    setTimeout \
                                        ()->
                                            $('.cerc-profil').css({display: 'none'})
                                        , 400
                                    $('.circle-girl').stop(true).fadeIn()
                                    $('.circle-girl-text').stop(true).fadeIn()

                            # Display the hidden circle div if the user waits for 10 seconds
                            setTimeout \
                                ()->
                                    if current_step is 2
                                        setTimeout \
                                            ()->
                                                $('.cerc-profil').css({display: 'none'})
                                            , 400
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

                            # Display lens 3
                            display_lens(3)

                            # Display the box for lens
                            $('.circle-girl-container').hover \
                                ()->
                                    $('.preview-box').stop(true).fadeIn()
                                , ()->
                                    $('.preview-box').stop(true).fadeOut()

                            $('.circle-girl-container').click ()->
                                goto_step_3()

zoom_duration = 1000

goto_step_3 = ()->
    if current_step is 2
        current_step = 3
        $('.circle-girl-container').fadeOut()

        if (Modernizr.bgpositionxy)
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
        else
            console.log "FU Firefox"

        $('.picture-container').fadeOut(zoom_duration)
        setTimeout \
            ()->
                $('.picture-portrait').fadeIn \
                    zoom_duration
                    , ()->
                        # Display the portrait texts
                        $('.text-container').fadeOut ()->
                            $('.text-container').html(_.template($('#texts-portrait').html()))
                            $('.text-container').fadeIn()

                        # Fadein the portrait objective
                        $('#obiectiv-wide').fadeOut \
                            400
                            , ()->
                                $('#obiectiv-portrait').fadeIn()

            , zoom_duration / 2

        # Display the back button
        $('.back-button-container').show(0).fadeIn()
        # Go back to big picture on click
        $('.back-button-container').click ()->
            goto_step_4()

# Step 4: Back to big picture from the portrait
goto_step_4 = ()->
    if current_step is 3
        current_step = 4

        if (Modernizr.bgpositionxy)
            $('.picture-container').animate \
                'background-size': '100%'
                , 'background-position-x': '0px'
                , 'background-position-y': '0px'
                , zoom_duration
                , 'easeOutQuad'
        else
            console.log 'FU Firefox again'

        $('.picture-container').css({display: 'block'}).fadeIn(zoom_duration)
        $('.picture-portrait').fadeOut(zoom_duration)

        $('.back-button-container').fadeOut(zoom_duration)

        setTimeout \
            ()->
                $('.cerc-trotineta').fadeIn ()->
                    opacity_infinite = ()->
                        $('.cerc-trotineta').animate \
                            opacity: 1
                            , 600
                            , ()->
                                $('.cerc-trotineta').animate \
                                    opacity: 0.5
                                    , 600
                                    , opacity_infinite

                    opacity_infinite()
            , 1000

        # Prepare for tele
        # Display hidden div to active the guy's head
        # $('.boy-head').show()
        $('.cerc-trotineta').mouseover ()->
            if current_step is 4
                setTimeout \
                    ()->
                        $('.cerc-trotineta').css({display: 'none'})
                    , 400
                $('.circle-boy').stop(true).fadeIn()
                $('.circle-boy-text').stop(true).fadeIn()

        # Display the hidden circle div if the user waits for 10 seconds
        setTimeout \
            ()->
                if current_step is 4
                    setTimeout \
                        ()->
                            $('.cerc-trotineta').css({display: 'none'})
                        , 400
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

        # Display lens 4
        display_lens(4)

        # Display the box for lens
        $('.circle-boy-container').hover \
            ()->
                $('.preview-box').stop(true).fadeIn()
            , ()->
                $('.preview-box').stop(true).fadeOut()

        $('.circle-boy-container').click ()->
            goto_step_5()

# Step 5: Tele obiectiv
goto_step_5 = ()->
    if current_step is 4
        current_step = 5
        $('.circle-boy-container').fadeOut()
        $('.cerc-trotineta').css({display: 'none'})

        # Zoom in
        if (Modernizr.bgpositionxy)
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
                        # Display the tele texts
                        $('.text-container').fadeOut ()->
                            $('.text-container').html(_.template($('#texts-tele').html()))
                            $('.text-container').fadeIn()

                        $('#obiectiv-portrait').fadeOut \
                            400
                            , ()->
                                $('#obiectiv-tele').fadeIn()
            , zoom_duration / 2

goto_step_6 = ()->
    window.location = '/inscriere'
    true

page_init = ()->
    console.log 'game'

    # Setting up steps
    goto_step_minus_1()


