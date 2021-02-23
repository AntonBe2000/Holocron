<button class="button" id="kontaktBtn">Kontakt aufnehmen</button>
<!-- The Modal -->
<div id="kontaktModal" class="modal">
    <!-- Modal content -->
    <div class="kontaktModal-content">
        <?php include("kontaktModal_content.php"); ?>
    </div>
</div>

<script>
    // Get the modal
    var modal1 = document.getElementById("kontaktModal");
    // Get the button that opens the modal
    var btn = document.getElementById("kontaktBtn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal1.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal1.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }
</script>