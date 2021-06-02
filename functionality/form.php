<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Form</title>
  </head>
  <body>
    <form class="form" action="#" method="post" enctype="multipart/form-data">
      <div class="container-form">
        <div class="about">
          <div class="about-title">
            <p class="about-text">Name</p>
          </div>
          <div class="block-input">
            <input
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
            <input
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
            <input
              class="about-input"
              tabindex="3"
              placeholder="your password"
              type="password"
              name="password"
            />
          </div>
        </div>
        <!--  -->
        <div class="about">
          <div class="about-title">
            <p class="about-text">Gender</p>
          </div>
          <div class="block-input">
            <div class="block-gender">
              <div class="gender-item">
                <input
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
                  <input tabindex="4" type="radio" name="gender" value="female" />
              </div>
              <div class="gender-item"><p class="gender-text">Female</p></div>
          </div>
        </div>
        <div class="about">
          <div class="about-title">
            <p class="about-text">Birthdate</p>
          </div>
          <div class="block-input">
            <input
              class="about-input"
              tabindex="5"
              type="date"
              name="birthdate"
            />
          </div>
        </div>
        <!--  -->
        <div class="about">
          <div class="about-title">
            <p class="about-text">Contacts</p>
          </div>
          <div class="block-input">
            <div class="contacts">
              <div class="contacts-list">
                <select
                  class="contacts-select"
                  tabindex="6"
                  name="contacts-list-social"
                >
                  <option value="skype">Skype</option>
                  <option value="facebook">Facebook</option>
                  <option value="telegram">Telegram</option>
                  <option value="instagram">Instagram</option>
                  <option value="linkedin">Linkedin</option>
                </select>
              </div>
              <div class="contacts-block-one">
                <input
                  class="contacts-block-text"
                  type="text"
                  name="contacts-one"
                />
              </div>
              <div class="contacts-button">
                <button class="button-delete">Delete</button>
              </div>
            </div>
            <div class="contacts">
              <div class="contacts-list">
                <select
                  class="contacts-select"
                  tabindex="7"
                  name="contacts-list-social"
                >
                  <option value="skype">Skype</option>
                  <option value="facebook">Facebook</option>
                  <option value="telegram">Telegram</option>
                  <option value="instagram">Instagram</option>
                  <option value="linkedin">Linkedin</option>
                </select>
              </div>
              <div class="contacts-block-two">
                <input
                  class="contacts-block-text"
                  type="text"
                  name="contacts-two"
                />
              </div>
              <div class="contacts-block-thre">
                <input
                  class="contacts-block-text"
                  type="text"
                  name="contacts-thre"
                />
              </div>
              <div class="contacts-button">
                <button class="button-delete">Delete</button>
              </div>
            </div>
            <div class="contacts">
              <div class="contacts-button">
                <button class="button-save" type="button" value="Save">
                  Save
                </button>
              </div>
              <div class="contacts-text-item">
                <p class="contacts-text-all">or</p>
              </div>
              <div class="contacts-button">
                <button class="button-add" type="button" value="Add new">
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
            <input
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
            <select
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
            <textarea
              class="sometext-textarea"
              tabindex="10"
              placeholder="enter some text"
              name="some-text"
            ></textarea>
          </div>
        </div>
        <div class="about-agremment">
          <p class="agremment-text">
            <input class="agremment-check" type="checkbox" name="agremment"/>
            Agremment
          </p>
      </div>
      <div class="about">
        <div class="about-button">
        <div class="about-update">
          <button class="button-update" type="button" value="Update profile">Update profile</button>
        </div>
        <div class="about-next">
          <button button="" class="button-next" type="button" value="Next">Next</button>
        </div>
      </div>
    </div>
    </form>
  </body>
</html>
