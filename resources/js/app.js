// require('./bootstrap');
$('#info-btn').click(function() {
    $('#inquiry-form').show();
});

$('#close-btn, .close-btn').click(function () {
    $('#inquiry-form').hide();
});

$('#form-submit').click(function() {
    $.post('inquiry', function(data) {
        console.log(data);
    });
});