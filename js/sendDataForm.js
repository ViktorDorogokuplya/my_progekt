const form = document.querySelector('#form');

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