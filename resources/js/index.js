$(document).ready(function () {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Id: { validators: { stringLength: { min: 1, message: 'No valido' }, notEmpty: { message: 'por favor ingrese un ID' } } },
            Nombre: { validators: { stringLength: { min: 2, message: 'No valido' }, notEmpty: { message: 'por favor escriba un nombre' } } }, 
            Apellido: { validators: { stringLength: { min: 2, message: 'No valido' }, notEmpty: { message: 'por favor escriba el apellido' } } }, 
            Telefono: { validators: { stringLength: { min: 2, message: 'No valido' }, notEmpty: { message: 'por favor escriba el telefono' } } }, 
            Email: { validators: { stringLength: { min: 2, message: 'No valido' }, notEmpty: { message: 'por favor escriba el email' } } }
        }
    })
        .on('success.form.bv', function (e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function (result) {
                console.log(result);
            }, 'json');
        });
});