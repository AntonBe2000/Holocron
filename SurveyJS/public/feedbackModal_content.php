<div class="modal-header">
    <button class="close">x</button>
    <h2>Feedback</h2>
</div>
<div class="modal-body">
    <?php
    //Parameter der Meldung abfragen
    $akro = $_POST["akro"]; //Akronym
    $nachricht = $_POST["nachricht"]; //Nachricht
    //E-Mail vorbereiten
    $betreff = "Holcron Feedback von " . $akro;
    $headers = "From: holocron@anton-bechtloff.de" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/plain;charset=utf-8";
    //Mailfunktion aufrufen
    mail("mail@anton-bechtloff.de", $betreff, $nachricht, $headers);
    ?>
    <form name="feedback" id="feedback" method="post" action="" enctype="multipart/form-data">
        <table>
            <tbody>
            <tr>
                <td><label for="akro">Namensakronym</label></td>
                <td><input type="text" placeholder="Max" name="akro" id="akro" required></td>
            </tr>
            <tr>
                <td><label for="nachricht">Feedback</label></td>
                <td><textarea placeholder="Message..." rows="7" name="nachricht" id="nachricht" required></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="button">Absenden</button>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>