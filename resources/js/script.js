$('#form-button').on('click', (e) => {
    e.preventDefault()

    let email = $('#exampleInputEmail1').val()
    let password = $('#exampleInputPassword1').val()

    $.ajax({
        type: 'POST',
        url: '/api/auth',

        success: (response) => {
            $('.card-body').append(response)
        }
    })
})
