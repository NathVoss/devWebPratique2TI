$(document).ready(function() {
    $('#credit').hide();
    $('#copyright').hover(function () {
        $('#credit').fadeIn();
    }, function () {
        $('#credit').fadeOut();
    })
})
function appelAjax() {
    $.get('http/TP/2T/RES/appelHTML.php?rq=config', function () {
        
    })
}