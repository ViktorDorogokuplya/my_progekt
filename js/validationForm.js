jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});

const timezoneOffset = new Date(Date.now()).getTimezoneOffset() * 60 * 1000,
    nowMiliSeconds = Date.now() - timezoneOffset,
    nowDate = new Date(nowMiliSeconds),
    startDate = new Date(nowDate.setFullYear(nowDate.getFullYear() - 150)).toISOString().split('T')[0],
    endDate = new Date(nowMiliSeconds - 24 * 60 * 60 * 1000).toISOString().split('T')[0];

$("#form").validate({
    rules: {
        name: {
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
        password: {
            required: true,
            minlength: 6,

        },
        birthdate: {
            required: true,
            daterange: [startDate, endDate]
        },
        agremment: {
            required: true,
        },
    },
    messages: {
        name: {
            required: "This field is required",
            rangelength: "Please enter a value with a valid extension.",
            minlength: "Login must be at least 4 characters",
        },
        email: {
            required: "This field is required",
            email: "Please enter a valid email address."
        },
        password: {
            required: "This field is required",
            minlength: "Password must be at least 6 characters"
        },
        birthdate: {
            required: "This field is required",

        },
        agremment: {
            required: "This field is required",

        },
    }
});

$.validator.addMethod('isLatin', function (value, element) {
    return this.optional(element) || /^[a-z]*$/i.test(value);
}, 'Please check your input.');

$.validator.addMethod('daterange', function (value, element, arg) {
    if (this.optional(element)) {
        return true;
    }

    const startDate = new Date(Date.parse(arg[0])).toISOString().split('T')[0],
        endDate = new Date(Date.parse(arg[1])).toISOString().split('T')[0],
        enteredDate = new Date(Date.parse(value)).toISOString().split('T')[0];

    return ((startDate <= enteredDate) && (enteredDate <= endDate));
}, $.validator.format("Please specify a date between {0} and {1}."));
