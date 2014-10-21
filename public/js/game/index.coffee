page_init = ()->
    console.log 'game'

resize = ()->
    $('.picture-container').animate \
        {
            height: '507px'
            , width: '760px'
            , top: '0'
        }
        , 1500

    $('.grey-container').fadeOut(1500)

