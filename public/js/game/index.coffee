FB_init = ()->
    console.log FB_user

    $('#name').text FB_user.name + ' game'

    FB_display()

