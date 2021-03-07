function sendMail() {

    var akro = $('#akro');
    var nachricht = $('#nachrichtFeedback');
    alert(akro.val()+' '+nachricht.val());
    fetch('actions/feedbackSendMail.php', {
        method: 'post',
        body: JSON.stringify({"akro": akro.val(), "nachricht": nachricht.val()})
    })
}

$(document).ready(function () {
    $('#feedback').submit(function () {
        sendMail();
        $('#success').text('Wir haben dein Feedback erhalten');
        return false;
    });
});