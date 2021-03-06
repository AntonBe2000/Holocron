<div class="btn" id="feedbackButton"><img src="assets/questionTag.png" width="99" height="99" alt="?"></div>
<!-- The Modal -->
<div id="feedbackModal" class="modal">
    <!-- Modal content -->
    <div class="feedbackModal-content">
        <?php include("feedbackModal_content.php"); ?>
    </div>
</div>
<script>
    // Get the modal
    var modal2 = document.getElementById("feedbackModal");
    // Get the button that opens the modal
    var btn2 = document.getElementById("feedbackButton");

    // When the user clicks the button, open the modal
    btn2.onclick = function () {
        modal2.style.display = "block";
    };
</script>