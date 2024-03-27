$(document).ready(()=>{

    const validationFields = [
        {
            input: '#contactMsg',
            regExp: /[^*]+$/
        },
        {
            input: '#contactMail',
            regExp: /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/
        }
    ];

    /**
     * init onclick validation
     */
    $('#pricesContactSend').click(function (event) {
        validationFields.forEach((item) => {
            validateForm(event, item);
        });
    });

    /**
     * init live validation
     */
    validationFields.forEach((item) => {
        $(item.input).on('change, input', (event) => {
            validateForm(event, item);
        });
    });

    /**
     * handler to run validation
     * @param event
     * @param item
     */
    function validateForm(event, item) {
        const form = $(event.target.form); //for validation in target form
        const input = form.find(item.input);
        const field = input.parent('.contact-form__group');

        const inputIsValid = validateInput(input, item.regExp);
        if (!inputIsValid) {
            event.preventDefault();
            field.addClass('has-error');
            field.removeClass('has-success');
        } else {
            field.removeClass('has-error');
            field.addClass('has-success');
        }
    }

    /**
     * @param input {jqueryObject}
     * @param regExp {regular expression}
     * @returns {boolean}
     */
    function validateInput(input, regExp) {
        const inputValue = input.val();
        return regExp.test(inputValue);
    }


    $('.contact-form__file-input').on('change', function(e){
        const input = $(this),
            label = input.parent('.contact-form__files-field').find('label');

        let fileName = '';
        const MB = 1048576;

        if (this.files[0]) {
            if (this.files[0].size < 5 * MB) {
                fileName = e.target.value.split('\\').pop();
                label.html(fileName);
                label.addClass('successFile');
            } else {
                label.removeClass('successFile');
                input.val('');
                label.html('File max size is 5mb');
                return false;
            }
        } else {
            label.removeClass('successFile');
            label.html('File attached');
        }
    });

    $('.contact-form').submit(() => {
        const loader = '<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>';
        const submitBtn = $(this).find('#pricesContactSend');
        submitBtn.blur();
        submitBtn.css('pointer-events', 'none');
        submitBtn.html(loader);
    });
});