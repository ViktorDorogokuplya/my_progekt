$("#form").validate({
    rules: {
        username: {
            required: true,
            email: true
        },
        password: {
            required: true,
            minlength: 6,
        },
    },
    messages: {
        password: {
            required: "This field is required",
            minlength: "Password must be at least 6 characters"
        },
    }
});
