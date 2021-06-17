<head>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/registration.css">
    <title>Registration</title>
</head>
<body>
<form class="form" id="form" action="../index.php/?functionality=functionality/signin" method="post">
    <div class="container-registration">
        <div class="title">
            <div class="title-item">
                <hr class="title-line" />
            </div>
            <div class="title-item">
                <h1 class="title-text">Register</h1>
            </div>
            <div class="title-item">
                <hr class="title-line" />
            </div>
        </div>
        <div class="title">
            <p class="text">
                Creat your account. It's free and only takes a minute.
            </p>
        </div>
        <div class="name">
            <div class="name-title">
                <input
                        id="first_name"
                        class="title-input"
                        type="text"
                        name="first_name"
                        placeholder="First-name"
                />
            </div>
            <div class="name-title">
                <input
                        id="last_name"
                        class="title-input"
                        type="text"
                        name="last_name"
                        placeholder="Last-name"
                />
            </div>
        </div>
        <div class="title">
            <input
                    id="email"
                    class="title-input"
                    type="email"
                    name="email"
                    placeholder="Email"
            />
        </div>
        <div class="title">
            <input
                    id="password"
                    class="title-input"
                    type="password"
                    name="password"
                    placeholder="Password"
            />
        </div>
        <div class="title">
            <input
                    id="confirm_password"
                    class="title-input"
                    type="password"
                    name="confirm_password"
                    placeholder="Confirm-password"
            />
        </div>
        <div class="title">
            <div class="checkbox">
                <input
                        id="accept"
                        class="title-checkbox"
                        type="checkbox"
                        name="accept"
                        value="yes"
                />
            </div>
            <div class="text-checkbox">
                <p class="text">
                    I accept the <a href="#" class="link-text">Therms of Use</a> &
                    <a href="#" class="link-text">Privacy Policy.</a>
                </p>
            </div>
        </div>
        <div class="title">
            <button class="title-button" type="submit">Register Now</button>
        </div>
        <?php
        if (isset($_SESSION['massage'])) {
            echo '<p class="msg">' . $_SESSION['massage'] . '</p>';
        }
        unset($_SESSION['massage']);
        ?>
    </div>
</form>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js" crossorigin="anonymous">
</script>
<script src="../js/checkReg.js"></script>
</body>
