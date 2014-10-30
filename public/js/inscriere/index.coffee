validate_email = (email)->
    email_regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    email_regex.test(email)

page_init = ()->
    console.log 'intrebare'

    $('#submit-obiectiv').click (e)->
        e.preventDefault()

        selected_value = if $('[type=radio]:checked').length then $('[type=radio]:checked').val() else 1

        $('#intrebare-container').html(_.template($('#intrebare-final').html()))

        # Set the event on submit after the template was loaded
        $('#submit-email').click (e)->
            e.preventDefault()

            if not validate_email($('[type=email]').val())
                $('.adress-email').focus().addClass('error')
                return false

            p =
                obiectiv: selected_value
                email: $('[type=email]').val()

            $.post \
                '/inscriere'
                , p
                , (s, t)->
                    window.location = '/final'
                , 'json'

        # Set the change event on the email input
        $('.adress-email').keyup (e)->
            if $(@).val() is ''
                $('.adress-email').removeClass 'error'

