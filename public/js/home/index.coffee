FB_init = ()->
    console.log FB_user

    $('#name').text FB_user.name

    $('body').show(0)
