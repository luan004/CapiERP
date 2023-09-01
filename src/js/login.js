var click = false;
$('#formLogin').submit(function(e) {
    e.preventDefault();

    const user = $('#user').val();
    const pass = $('#pass').val();

    if (user == 'admin' && pass == 'admin') {
        click = true;
    } else {
        $('#error').show();
    }
});

// progress bar animation
var value = 0;
setInterval(function() {
    if (click == true && value <= 100) {
        $('progress').attr('value', value + 1);
        value = value + 5;
    } else if (click == true && value > 90) {
        window.location.href = 'panel.html';
    }
}, 50);