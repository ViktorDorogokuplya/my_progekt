$(document).ready(function (e) {
    $('#button_reg').on("click", function (event) {
        event.preventDefault();
        let firstName = $('#first_name').val();
        let lastName = $('#last_name').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let confirmPassword = $('#confirm_password').val();
        let checkbox = $('#accept').val();
        if ((firstName === "") && (lastName === "") && (email === "") && (password === "") && (confirmPassword === "")) {
            if (password !== confirmPassword) {
                return false;
                console.log('allert');
            }
            if (checkbox === '') {
                return false;
                console.log('checkbox false');
            }
        } else {
            let data = JSON.stringify({
                'first_name': firstName,
                'last_name': lastName,
                'email': email,
                'password': password,
                'confirm_password': confirmPassword
            });
            $.ajax({
                url: '/?action=signup',
                type: 'POST',
                data: data,
                contentType: "application/json;",
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        setTimeout(function () {
                            window.location.href = '/';
                        }, 2000);
                        console.log(data)
                        $('#message').text('You are registered');
                    } else if (typeof data.message != 'undefined') {
                        $('#message').text(data.message);
                    }
                },
                error: function () {
                    $('#message').text('Uncoated error');
                }

            })

        }

    })

})