current_step = 0

arrow_animation_duration = 400
arrow_animation_easing = 'easeOutBounce'

arrows_out = ()->
    $('.arrow-left').stop(true, true).animate \
        {
         left: '-=40px'
        }
        , arrow_animation_duration
        , arrow_animation_easing
        , ()->
            true
    $('.arrow-right').stop(true, true).animate \
        {
         left: '+=40px'
        }
        , arrow_animation_duration
        , arrow_animation_easing
        , ()->
            true

arrows_in = ()->
    $('.arrow-left').stop(true, true).animate \
        {
         left: '+=40px'
        }
        , arrow_animation_duration
        , arrow_animation_easing
        , ()->
            true
    $('.arrow-right').stop(true, true).animate \
        {
         left: '-=40px'
        }
        , arrow_animation_duration
        , arrow_animation_easing
        , ()->
            true

page_init = ()->
    console.log 'game'

    # Setting up steps
    # Step 1 (Obiectiv kit)
    goto_step_1 = ()->
        if current_step is 0
            $('.grey-container').fadeIn \
                400
                , ()->
                    true
            current_step = 1

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
                                # Fadein the wide objective
                                $('.obiectiv-wide').fadeIn()

                                # Display the wide texts
                                $('.text-container-title').text('Canon altu')
                                $('.text-container-description').text('Canon descriere')

    # Wait a few seconds or until the user mouses over the margins
    setTimeout \
        ()->
            goto_step_1()
        , 10000

    # TODO: Display the grey overlay if the user mouses over the sides of the image
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




