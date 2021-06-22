const form = document.getElementById('form');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const male = document.getElementById('male');
const female = document.getElementById('female');
const birthdate = document.getElementById('birthdate');
const social = document.getElementById('social');
const socialLink = document.getElementById('social-link');
const otherSocial = document.getElementById('other-social');
const otherName = document.getElementById('other-name');
const otherLink = document.getElementById('othre-link');
const save = document.getElementById('save');
const addNew = document.getElementById('addNew');
const photo = document.getElementById('photo');
const hobbies = document.getElementById('hobbies');
const sometext = document.getElementById('sometext');
const agremment = document.getElementById('agremment');
const btnUpdate = document.getElementById('btn-update');
const btnNext = document.getElementById('btn-next');
const formDataContainer = document.getElementById('form-data');

form.addEventListener('submit', function (e) {
    const formData = new FormData(form),
        data = {};

    e.preventDefault();

    for (const pair of formData.entries()) {
        data[pair[0]] = pair[1];
    }

    formDataContainer.innerHTML = JSON.stringify(data, null, 2);
}, true);

form.addEventListener('reset', function () {
    formDataContainer.innerHTML = '';
});