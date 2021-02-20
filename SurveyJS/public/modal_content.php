<div class="modal-header">
    <span class="close">&times;</span>
    <h2>Kontaktaufnahme</h2>
</div>
<div class="modal-body">
    <form name="meldung" id="meldung" method="post" action="meldung_auswertung.php" enctype="multipart/form-data">
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
                    <button type="submit" class="button" >Submit</button>
                </td>
            </tr>
            </tbody>
        </table>
        <div>
            <?php
            require_once __DIR__ . "/meldung_auswertung.php";?>
        </div>

    </form>
</div>