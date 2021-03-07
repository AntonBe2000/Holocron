<div class="modal-header">
    <button class="close">x</button>
    <h2>Kontaktaufnahme</h2>
</div>
<div class="modal-body">

    <form name="kontaktMeldung" id="kontaktMeldung" method="post" action="#" enctype="multipart/form-data">
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
                <td><textarea placeholder="Message..." rows="7" name="nachricht" id="nachrichtContact" required></textarea>
                </td>
            </tr>
            <tr>
                <td><label for="email">E-Mail Adresse</label></td>
                <td><input type="email" placeholder="Email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="button">Submit</button>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div id="successKontakt"></div>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>