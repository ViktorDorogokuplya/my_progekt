$(document).ready(function (e) {
    $('#form').on("click", function (event) {
        event.preventDefault();
        let username = $('#username').val();
        let password = $('#password').val();
        if ((username === "") || (password === "")) {
            return false;
        } else {
            let data = JSON.stringify({'username': username, 'password': password});
            $.ajax({
                url: '/?action=signin',
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
                        $('#message').text('You are logged in');
                    } else if (typeof data.message != 'undefined') {
                        $('#message').text(data.message);
                    }
                },
                error: function () {
                    console.error(data)
                    $('#message').text('Uncoated error');
                }

            })

        }

    })

})
