function sendMail() {
    fetch('actions/feedbackSendMail.php', {
        method: 'post',
    }.then(r => r))
}