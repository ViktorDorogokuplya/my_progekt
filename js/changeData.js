$(document).ready(function (e) {
    $('#button_change').on("click", function (event) {
        event.preventDefault();
        let mobileTel = $('#mobile-tel').val();
        let contactsEmail = $('#contacts-email').val();
        let address = $('#address').val();
        let social = $('#social').val();
        let education = $('#education').val();
        let skills = $('#skills').val();
        let aboutMy = $('#about-my').val();
        let position = $('#position').val();
        let companyName = $('#company-name').val();
        let profExperience = $('#prof-experience').val();


        let data = JSON.stringify({
            'mobile-tel': mobileTel,
            'contacts-email': contactsEmail,
            'address': address,
            'social': social,
            'education': education,
            'skills': skills,
            'about-my': aboutMy,
            'position': position,
            'company-name': companyName,
            'prof-experience': profExperience,

            });
        $.ajax({
            url: '/?action=changeData',
            type: 'POST',
            data: data,
            contentType: "application/json;",
            dataType: 'json',
            success: function (data) {
                if (data.success) {

                    window.location.href = '/';
                    console.log(data)
                    $('#message').text('You are change data');
                } else if (typeof data.message != 'undefined') {
                    $('#message').text(data.message);
                }
            },
            error: function () {
                $('#message').text('Uncoated error');
            }
        })

    })

})