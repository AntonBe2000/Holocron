<div class="modal-header">
    <button class="close">x</button>
    <h2>Feedback</h2>
</div>
<div class="modal-body">

    <form name="feedback" id="feedback" method="post" action="scripts/feedback_modal.js" enctype="multipart/form-data">
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