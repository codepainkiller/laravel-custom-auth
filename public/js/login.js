const notification = $('#notification');
const form = $('#loginForm');
const button = $('#btnSubmit');

notification.hide();

form.submit(event=> {
    event.preventDefault();
    notification.hide();
    button.prop('disabled', true);

    $.post('/api/auth/login', form.serialize(), response => {
        console.log(response)
        window.location.href = '/home';
    }).fail(() => {
        notification.show();
        button.prop('disabled', false);

        $('#password').val('');
        $('#email').focus();
    });
});
