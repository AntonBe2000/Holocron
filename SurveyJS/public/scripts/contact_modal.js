function sendContactMail() {

    var vorname = $('#vorname');
    var nachname = $('#nachname');
    var mitsenden = $('#mitsenden');
    var nachricht = $('#nachrichtContact');
    var email = $('#email');

    fetch('actions/contactSendMail.php', {
        method: 'post',
        body: JSON.stringify({
            "vorname": vorname.val(), "nachname": nachname.val(), "mitsenden": mitsenden.val(),
            "nachricht": nachricht.val(), "email": email.val()
        })
    })
}

$(document).ready(function () {
    $('#kontaktMeldung').submit(function () {
        sendContactMail();
        $('#successKontakt').text('Wir haben deine Anfrage abgesendet.');
        return false;
    });
});