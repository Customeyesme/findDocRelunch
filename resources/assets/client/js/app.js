
/**
 * First we will load all of this project's JavaScript dependencies.
 * It is a great starting point when building robust, powerful web applications
 * using Vue and Laravel.
 */

require('./bootstrap');
require('./all');
require('./materialize');

let RegisterForm = function () {

    var storeForm = $('#registrationForm');

    var handleRegistrationForm = function() {

        var validator = storeForm.validate({
            rules: {
                name: {
                    maxlength: 30,
                    required: true
                },
                surname: {
                    maxlength: 30,
                    required: true
                }
            },
            errorPlacement: function (error, element) {
                debugger
                error.insertAfter(element);
            },

            highlight: function (element) { // hightlight error inputs
                debugger
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            unhighlight: function (element) { // revert the change done by hightlight
                debugger
                $(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
            },

            success: function (label) {
                debugger
                label.closest('.form-group').removeClass('has-error'); // set success class to the control group
            }
        });

        // var requestErrors = $("#requestErrors").data('content'); //get messages that come form server side validation
        // for(var i = 0;i<requestErrors.length;i++){
        //     validator.showErrors(requestErrors[i]); //display messages that come form server side validation
        // }

    };

    return {
        init: function () {
            handleRegistrationForm();
        }
    };

}();

jQuery(document).ready(function() {
    RegisterForm.init();
});
