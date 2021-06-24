$(function() {
    const template = '\
        <div class="contact-container js-contact-container">\
            <div class="contacts-select">\
                <select\
                    class="select-list valid js-contact-type"\
                    aria-invalid="false"\
                    name="contact_ type[]"\
                >\
                    <option value="skype">Skype</option>\
                    <option value="facebook">Facebook</option>\
                    <option value="instagram">Instagram</option>\
                    <option value="telegram">Telegram</option>\
                    <option value="linkedin">Linkedin</option>\
                    <option value="other">Other</option>\
                </select>\
            </div>\
            <div class="input-name">\
                <input class="contact-name js-contact-name" name="contact_name[]" />\
            </div>\
            <div class="contact-nickname">\
                <input class="nickname" name="contact_nickname[]" />\
            </div>\
            <button class="delete-contact-btn js-delete-contact" type="button" value="Add new">Delete</button>\
        </div>',
        $contactsContainer = $('#contacts-container');

    $('#reset').on('click', function() {
        $contactsContainer.html('');
    });

    $('#add-contact').on('click', function() {
        $(template).appendTo($contactsContainer);
    });

    $contactsContainer
        .on('change', '.js-contact-type', function() {
            $(this).closest('.js-contact-container').find('.js-contact-name')[0].style.visibility = this.value == 'other' ? 'visible' : 'hidden';
        })
        .on('click', '.js-delete-contact', function() {
            $(this).closest('.js-contact-container').remove();
        });
});