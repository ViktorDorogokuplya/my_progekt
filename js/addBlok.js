
const addButton = document.getElementById('addNew');

const contactsBloc = document.getElementById('mainFolderContact');

let contactsSelect = document.createElement('div');
let select = document.createElement('select');
let optionOne = document.createElement('option');
let optionTwo = document.createElement('option');
let optionThree = document.createElement('option');
let optionFor = document.createElement('option');
let optionFive = document.createElement('option');
let optionOther = document.createElement('option');
let contactsList = document.createElement('div');
let nickname = document.createElement('input');
let inputBloc = document.createElement('div');
let contactName = document.createElement('input');

function addBlocs () {
    //create contacts list

    // add select

    contactsSelect.setAttribute('class', 'contacts-select');
    contactsBloc.appendChild(contactsSelect);


    select.setAttribute('class', 'select-list');
    select.setAttribute('data-toggle-id', 'contact-name');
    contactsSelect.appendChild(select);

    //add option list

    optionOne.value = 'skype';
    optionOne.textContent = 'Skype';

    optionTwo.value = 'facebook';
    optionTwo.textContent = 'Facebook';

    optionThree.value = 'instagram';
    optionThree.textContent = 'Instagram';

    optionFor.value = 'telegram';
    optionFor.textContent = 'Telegram';

    optionFive.value = 'linkedin';
    optionFive.textContent = 'Linkedin';

    optionOther.value = 'other';
    optionOther.textContent = 'Other';
    console.log(optionOther);

    select.appendChild(optionOne);
    select.appendChild(optionTwo);
    select.appendChild(optionThree);
    select.appendChild(optionFor);
    select.appendChild(optionFive);
    select.appendChild(optionOther);

    // create input
    inputBloc.setAttribute('class', 'input-name');
    contactsBloc.appendChild(inputBloc);

    contactName.setAttribute('id', 'contact-name');
    contactName.setAttribute('style', 'visibility: hidden;');
    inputBloc.appendChild(contactName);

    // create input nickname
    contactsList.setAttribute('class', 'contact-nickname');
    contactsBloc.appendChild(contactsList);

    nickname.setAttribute('class', 'nickname');
    contactsList.appendChild(nickname);

}
addButton.onclick  = addBlocs;

document.addEventListener('change', function(event) {
    let id = event.target.dataset.toggleId;
    if (!id) return;
    let elem = document.getElementById(id);
    if (select.value === 'other') {
        return elem.style.visibility = 'visible';
    } else {
        return elem.style.visibility = 'hidden';
    }
});


function removeAddBlocs () {
    let div = document.getElementById('mainFolderContact');

    while(div.firstChild){
        div.removeChild(div.firstChild);
    }
}
const resetButton = document.getElementById('reset');
resetButton.onclick = removeAddBlocs;