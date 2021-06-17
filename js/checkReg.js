jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});

$("#form").validate({
        rules:{
            first_name:{
                required: true,
                isLatin: true,
                minlength: 4,
                maxlength: 16,
            },
            last_name:{
                required: true,
                isLatin: true,
                minlength: 4,
                maxlength: 16, 
            },
            email: {
                required: true,
                email: true,
                minlength: 5,
            },
            password:{
                required: true,
                minlength: 6,

            },
            confirm_password: {
                minlength : 6,
                equalTo : "#password"
            },
            birthdate:{
                required: true,
            },    
            accept:{
                required: true,
            },
        },
        messages:{
            first_name:{
                required: "This field is required",
                rangelength: "Please enter a value with a valid extension.",
                minlength: "Login must be at least 4 characters",
                isLatin: "There should be only Latin characters!"
            },
            last_name:{
                required: "This field is required",
                rangelength: "Please enter a value with a valid extension.",
                minlength: "Login must be at least 4 characters",
                isLatin: "There should be only Latin characters!"
            },
            email:{
                required: "This field is required",
                email: "Please enter a valid email address."
            },
            password:{
                required: "This field is required",
                minlength:"Password must be at least 6 characters"
            },
            confirm_password:{
                equalTo: "Password fields must match",

            },
            accept:{
                required: "This field is required",

            },
        }
    });


    $.validator.addMethod('isLatin', function(value, element) {
        return this.optional( element ) || /^[a-z]*$/i.test( value );
    }, 'Please check your input.');
