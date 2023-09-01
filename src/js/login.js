$('#formLogin').submit(function(e) {
    e.preventDefault();

    const user = $('#user').val();
    const pass = $('#pass').val();

    if (user == 'admin' && pass == 'admin') {
        window.location.href = 'panel.html';
    } else {
        $('#error').show();
    }
});