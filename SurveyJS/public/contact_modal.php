<script>
    window.questionnaire = <?php echo file_get_contents(__DIR__ . "/questionnaire.json"); ?>;
    window.pricingModels = <?php echo file_get_contents(__DIR__ . "/pricingModels.json"); ?>;

    $(document).on("click", ".modal .close", function() {
        $(this).parents(".modal").first().hide()
    })
</script>
<button class="button" id="contactBtn">Kontakt aufnehmen</button>
<!-- The Modal -->
<div id="contactModal" class="modal">
    <!-- Modal content -->
    <div class="contactModal-content">
        <?php include("contactModal_content.php"); ?>
    </div>
</div>

<script>
    // Get the modal
    var modal1 = document.getElementById("contactModal");
    // Get the button that opens the modal
    var btn = document.getElementById("contactBtn");
    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal1.style.display = "block";
    }
</script>