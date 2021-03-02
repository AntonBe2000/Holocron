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
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks the button, open the modal
    btn2.onclick = function () {
        modal2.style.display = "block";
    };
    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal2.style.display = "none";
    };
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }

        function show(id) {
            if (document.getElementById) {
                var mydiv = document.getElementById(id);
                mydiv.style.display = (mydiv.style.display == 'block' ? 'none' : 'block');
            }
        }
</script>