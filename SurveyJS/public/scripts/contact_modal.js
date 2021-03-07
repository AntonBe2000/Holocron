function sendMail() {
    fetch('actions/contactSendMail.php', {
        method: 'post',
    }.then(r => r))
}