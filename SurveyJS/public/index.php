<?php include("header.html"); ?>
<script>
    window.questionnaire = <?php echo file_get_contents(__DIR__ . "/questionnaire.json"); ?>;
    window.pricingModels = <?php echo file_get_contents(__DIR__ . "/pricingModels.json"); ?>;
</script>
<ul class="topnav">
    <li><img src="assets/nav_holocron.png" alt="bild" height="36" width="40" id="navbar_image"></li>
    <li><a class="active" href="index.php">Preismodellberatung</a></li>
    <li><a href="modelle_info.php">Übersicht über Preismodelle</a></li>
    <!-- <li class="right"><a href="#">Logout</a></li> -->
</ul>
<main>

<div x-data="surveyData()" x-init="init()">
    <div id="surveyElement"></div>
    <div id="surveyResultElement"></div>
    <script src="scripts/index.js"></script>
    <div id="surveyResult" x-show="Object.entries(preismodell).length > 0">
        <div class="included">
            <div><b>Empfohlene Modelle</b></div>
            <template x-for="[modell, value] in Object.entries(preismodell)">
                <div>
                    <template x-if="!Object.keys(excluded).includes(modell)">
                        <div class="preismodell">
                            <div class="box-preismodell">
                                <span x-text="modell"></span>
                            </div>
                            <div class="progress-outer">
                                <div class="progress big" :style="`width: ${100 - (value / 1)}%`"></div>
                            </div>
                            <span x-on:click="tooltips[modell] = true" style="position:relative; cursor:pointer; width:24px;">
                                <svg width="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div x-show="tooltips[modell]" x-on:click.away="tooltips[modell] = false" class="tooltip">
                                    <div class="flexbox">
                                        <div style="width: 300px"><b>Faktor</b></div>
                                        <div><b>Wert</b></div>
                                    </div>
                                    <template x-for="[factor, factorValue] in Object.entries(factors)">
                                        <div class="flexbox">
                                            <div style="width: 300px" x-text="factor"></div>
                                            <div class="display: flex;">
                                                <div class="progress-outer" style="flex: 1;margin-bottom: 3px;">
                                                    <div class="progress-inner">
                                                        <div class="progress" :style="`width: ${factorValue.value * 10}%;background: blue`"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-outer" style="flex: 1;">
                                                    <div class="progress-inner">
                                                        <div class="progress"
                                                             :style="`width: ${pricingModels[modell][factor] * 10}%`"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                   <div>
                                        <span style="color: blue">  &nbsp;&nbsp;&nbsp; ■ Berechneter Faktor &nbsp;&nbsp;  </span> <span
                                               style="color: #4caf50">&nbsp;&nbsp;    ■Eignungsfaktor</span>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </template>
                </div>
            </template>
        </div>
        <div class="excluded">
            <div><b>Ausgeschlossene Modelle</b></div>
            <template x-for="[modell, value] in Object.entries(preismodell)">
                <div>
                    <template x-if="Object.keys(excluded).includes(modell)">
                        <div class="preismodell">
                            <div class="box-preismodell">
                                <span x-text="modell"></span>
                            </div>
                            <div class="progress-outer">
                                <div class="progress big" :style="`width: ${100 - (value / 1)}%`"></div>
                            </div>
                            <span x-on:click="tooltips[modell] = true" style="position:relative; cursor:pointer;width: 24px;">
                                <svg width="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div x-show="tooltips[modell]" x-on:click.away="tooltips[modell] = false" class="tooltip">
                                    <div class="flexbox">
                                        <div style="width: 300px"><b>Faktor</b></div>
                                        <div><b>Wert</b></div>
                                    </div>
                                    <template x-for="[factor, factorValue] in Object.entries(factors)">
                                        <div class="flexbox">
                                            <div style="width: 300px" x-text="factor"></div>
                                            <div class="display: flex;">
                                                <div class="progress-outer" style="flex: 1;margin-bottom: 3px;">
                                                    <div class="progress-inner">
                                                        <div class="progress"
                                                             :style="`width: ${factorValue.value * 10}%;background: blue`"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-outer" style="flex: 1;">
                                                    <div class="progress-inner">
                                                        <div class="progress"
                                                             :style="`width: ${pricingModels[modell][factor] * 10}%`"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                    <div>
                                        <span style="color: blue">  &nbsp;&nbsp;&nbsp; ■ kalkulierter Faktor &nbsp;&nbsp;  </span> <span
                                                style="color: #4caf50">&nbsp;&nbsp;    ■Preismodell Faktor</span>
                                    </div>
                                    <div x-text="excluded[modell]"
                                         style="width: 100%; text-align: center; color: #000; padding: 10px; background: #eee;">
                                    </div>
                                </div>
                            </span>
                        </div>
                    </template>
                </div>
            </template>
        </div>

        <!-- Kontaktaufnahmebereich -->

        <!-- Trigger/Open The Modal -->
        <button class="button" id="myBtn">Kontakt aufnehmen</button>
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <?php include("modal_content.php"); ?>
            </div>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById("myModal");
            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            // When the user clicks the button, open the modal
            btn.onclick = function () {
                modal.style.display = "block";
            }
            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

        <!--Ende Kontaktaufnahmebereich-->


    </div>
</div>
    </div>


    <?php include("footer.html"); ?>
