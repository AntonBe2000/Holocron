<div class="modal-header">
    <span class="close">&times;</span>
    <h2>Kontaktaufnahme</h2>
</div>
<div class="modal-body">
    <form name="meldung" id="meldung" method="post" action="
<?php
    //Parameter der Meldung abfragen
    $vorname = $_POST["vorname"]; //Vorname
    $nachname = $_POST["nachname"]; //Nachname
    $nachricht = $_POST["nachricht"]; //E-Mail Adresse
    $email = $_POST["email"]; //Vorname
    //E-Mail vorbereiten
    $betreff = "Holocron Nachricht von ".$vorname." ".$nachname;
    $headers = "From: holocron@anton-bechtloff.de" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/plain;charset=utf-8";
    //Mailfunktion aufrufen
    mail($email, $betreff, $nachricht, $headers);
?>
" enctype="multipart/form-data">
        <table>
            <tbody>
            <tr>
                <td><label for="vorname">Vorname</label></td>
                <td><input type="text" placeholder="Max" name="vorname" id="vorname" required></td>
            </tr>
            <tr>
                <td><label for="nachname">Nachname</label></td>
                <td><input type="text" placeholder="Mustermann" name="nachname" id="nachname" required></td>
            </tr>
            <tr>
                <td><label for="mitsenden">Möchtest Du uns deine<br> Empfehlung mitsenden?</label></td>
                <td>
                    <input type="checkbox" name="mitsenden" id="mitsenden">
                </td>
            </tr>
            <tr>
                <td><label for="nachricht">Nachricht</label></td>
                <td><textarea placeholder="Message..." rows="7" name="nachricht" id="nachricht" required></textarea>
                </td>
            </tr>
            <tr>
                <td><label for="email">E-Mail Adresse</label></td>
                <td><input type="email" placeholder="Email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="button" onclick="alert('Wir haben deine Nachricht erhalten');">Submit</button>
                </td>
            </tr>
            </tbody>
        </table>

    </form>

</div>