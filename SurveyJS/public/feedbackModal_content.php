<div class="modal-header">
    <button class="close">x</button>
    <h2>Feedback</h2>
</div>
<div class="modal-body">

    <form name="feedback" id="feedback" method="post" enctype="multipart/form-data" action="#">
        <table>
            <tbody>
            <tr>
                <td><label for="akro">Namensakronym</label></td>
                <td><input type="text" placeholder="Max" name="akro" id="akro" required></td>
            </tr>
            <tr>
                <td><label for="nachricht">Feedback</label></td>
                <td><textarea placeholder="Message..." rows="7" name="nachricht" id="nachrichtFeedback"
                              required></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="button">Absenden</button>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div id="success"></div>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>