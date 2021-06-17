jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});

$("#form").validate({
    rules:{
        username:{
            required: true,
            isLatin: true,
            minlength: 4,
            maxlength: 16,
        },
        password:{
            required: true,
            minlength: 6,
        },
    },
    messages:{
        username:{
            required: "This field is required",
            rangelength: "Please enter a value with a valid extension.",
            minlength: "Login must be at least 4 characters",
            isLatin: "There should be only Latin characters!"
        },
        password:{
            required: "This field is required",
            minlength:"Password must be at least 6 characters"
        },
    }
});


$.validator.addMethod('isLatin', function(value, element) {
    return this.optional( element ) || /^[a-z]*$/i.test( value );
}, 'Please check your input.');
