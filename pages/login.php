<head>
    <link rel="stylesheet" href="../css/reset.css"/>
    <link rel="stylesheet" href="../css/login.css"/>
    <title>login</title>
</head>
<body>
<form class="form" id="form" action="../index.php/?functionality=functionality/signup" method="post">
    <div class="container-login">
        <div class="title">
            <div class="title-item">
                <hr class="title-line"/>
            </div>
            <div class="title-item">
                <h1 class="title-text">Login</h1>
            </div>
            <div class="title-item">
                <hr class="title-line"/>
            </div>
        </div>
        <div class="title">
            <input class="title-input" id="username" type="text" name="username"
                   placeholder="Username"
            />
        </div>
        <div class="title">
            <input
                    class="title-input" id="password"
                    type="password"
                    name="password"
                    placeholder="Password"
            />
        </div>
        <div class="title">
            <div class="button-login">
                <button class="title-button" type="submit" value="#">Login</button>
            </div>
            <div class="button-login">
                <button class="title-button" id="button-registration" type="submit" value="#" onclick="window.location='../index.php?tab=pages/registration'">
                    Register
                </button>
            </div>
        </div>
        <div class="msg" id="message">
            <?php
            if (isset($_SESSION['massage'])) {
                echo $_SESSION['massage'];
                unset($_SESSION['massage']);
            }
            ?>
        </div>
    </div>
</form>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"
        crossorigin="anonymous"></script>
<script src="../js/checkLogin.js"></script>
<script src="../js/loginFunctionality.js"></script>
</body>

