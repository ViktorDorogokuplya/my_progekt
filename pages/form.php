<head>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Form</title>
</head>
<body>
<form id="form" class="form" action="#" method="post" enctype="multipart/form-data">
    <div class="container-form">
        <div class="about">
            <div class="about-title">
                <p class="about-text">Name</p>
            </div>
            <div class="block-input">
                <input id="name"
                       class="about-input"
                       tabindex="1"
                       placeholder="your name"
                       type="text"
                       name="name"
                />
            </div>
        </div>
        <div class="about">
            <div class="about-title">
                <p class="about-text">Email</p>
            </div>
            <div class="block-input">
                <input id="email"
                       class="about-input"
                       tabindex="2"
                       placeholder="your email"
                       type="text"
                       name="email"
                />
            </div>
        </div>
        <div class="about">
            <div class="about-title">
                <p class="about-text">Password</p>
            </div>
            <div class="block-input">
                <input id="password"
                       class="about-input"
                       tabindex="3"
                       placeholder="your password"
                       type="password"
                       name="password"
                />
            </div>
        </div>
        <div class="about">
            <div class="about-title">
                <p class="about-text">Gender</p>
            </div>
            <div class="block-input">
                <div class="block-gender">
                    <div class="gender-item">
                        <input id="male"
                               checked
                               tabindex="4"
                               type="radio"
                               name="gender"
                               value="male"
                        />
                    </div>
                    <div class="gender-item">
                        <p class="gender-text">Male</p>
                    </div>
                </div>
                <div class="gender-item">
                    <input id="female" tabindex="4" type="radio" name="gender" value="female" />
                </div>
                <div class="gender-item">
                    <p class="gender-text">Female</p>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="about-title">
                <p class="about-text">Birthdate</p>
            </div>
            <div class="block-input">
                <input id="birthdate"
                       class="about-input"
                       tabindex="5"
                       type="date"
                       name="birthdate"
                />
            </div>
        </div>
        <div class="about">
            <div class="about-title">
                <p class="about-text">Contacts</p>
            </div>
            <div class="block-input">
                <div id="contacts-container" class="contacts-container"></div>
                <div class="contacts">
                    <div class="contacts-button">
                        <button id="reset" class="button-reset" type="reset" value="Reset">
                            Reset
                        </button>
                    </div>
                    <div class="contacts-text-item">
                        <p class="contacts-text-all">or</p>
                    </div>
                    <div class="contacts-button">
                        <button id="add-contact" class="button-add" type="button" value="Add new">
                            Add new
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="about-title">
                <p class="about-text">Photo</p>
            </div>
            <div class="block-input">
                <input id="photo"
                       class="about-input"
                       tabindex="8"
                       type="file"
                       name="user-photo"
                />
            </div>
        </div>
        <div class="about">
            <div class="about-title">
                <p class="about-text">Hobbies</p>
            </div>
            <div class="block-input">
                <select id="hobbies"
                        class="hobbies-select"
                        tabindex="9"
                        multiple
                        name="hobbies-item"
                >
                    <option value="musik">Musik</option>
                    <option value="dance">Dance</option>
                    <option value="sport">Sport</option>
                    <option value="fishing">Fishing</option>
                    <option value="motocikle">Motocikle</option>
                </select>
            </div>
        </div>
        <div class="about">
            <div class="about-title">
                <p class="about-text">Some words</p>
            </div>
            <div class="block-input">
            <textarea id="sometext"
                      class="sometext-textarea"
                      tabindex="10"
                      placeholder="enter some text"
                      name="some-text"
            ></textarea>
            </div>
        </div>
        <div class="about-agremment">
            <p class="agremment-text">
                <input id="agremment" class="agremment-check" type="checkbox" name="agremment"/>
                Agremment
            </p>
        </div>
        <div class="about">
            <div class="about-button">
                <div class="about-update">
                    <button id="btn-update" class="button-update" type="submit" value="Update profile">Update profile</button>
                </div>
                <div class="about-cancel">
                    <button id="button-cancel" class="button-cancel" type="reset">Cancel</button>
                </div>
            </div>
        </div>
        <div class="about"><pre id="form-data"></pre></div>
    </div>
</form>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"
        crossorigin="anonymous"></script>
<script src="../js/validationForm.js"></script>
<script src="../js/addFormBlock.js"></script>
</body>
</html>
  

