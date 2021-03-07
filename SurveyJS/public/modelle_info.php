<?php
include("header.php"); ?>
    <ul class="topnav">
        <li><img src="assets/nav_holocron.png" alt="bild" height="36" width="40" id="navbar_image"></li>
        <li><a href="index.php">Beratung</a></li>
        <li><a href="factorglossary.php">Faktoren</a></li>
        <li><a class="active" href="modelle_info.php">Preismodelle</a></li>
        <?php if(isset($_SESSION['userid'])) {echo '<li class="right"><a href="logout.php">Logout</a></li>';}?>
    </ul>
    <main>
        <style>
            v\:* {behavior:url(#default#VML);}
            o\:* {behavior:url(#default#VML);}
            x\:* {behavior:url(#default#VML);}
            .shape {behavior:url(#default#VML);}
        </style>
        <style id="Verrechnungsmodelle_Beispiel_Kooperation (1)_24651_Styles">
            <!--table
            {mso-displayed-decimal-separator:"\,";
                mso-displayed-thousand-separator:"\.";}
            .font524651
            {color:red;
                font-size:11.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Calibri, sans-serif;
                mso-font-charset:0;}
            .font624651
            {color:#FFC000;
                font-size:11.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Calibri, sans-serif;
                mso-font-charset:0;}
            .xl1524651
            {padding:0px;
                mso-ignore:padding;
                color:black;
                font-size:11.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Calibri, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:bottom;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl6524651
            {padding:0px;
                mso-ignore:padding;
                color:black;
                font-size:11.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Calibri, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:bottom;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:normal;}
            .xl6624651
            {padding:0px;
                mso-ignore:padding;
                color:black;
                font-size:11.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Calibri, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:top;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:nowrap;}
            .xl6724651
            {padding:0px;
                mso-ignore:padding;
                color:black;
                font-size:11.0pt;
                font-weight:400;
                font-style:normal;
                text-decoration:none;
                font-family:Calibri, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:general;
                vertical-align:top;
                mso-background-source:auto;
                mso-pattern:auto;
                white-space:normal;}
            .xl6824651
            {padding:0px;
                mso-ignore:padding;
                color:white;
                font-size:11.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Calibri, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border:.5pt solid white;
                background:#0070C0;
                mso-pattern:black none;
                white-space:normal;}
            .xl6924651
            {padding:0px;
                mso-ignore:padding;
                color:white;
                font-size:11.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Calibri, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border:.5pt solid white;
                background:#00B0F0;
                mso-pattern:black none;
                white-space:nowrap;}
            .xl7024651
            {padding:0px;
                mso-ignore:padding;
                color:white;
                font-size:11.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Calibri, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border:.5pt solid white;
                background:#00B0F0;
                mso-pattern:black none;
                white-space:normal;}
            .xl7124651
            {padding:0px;
                mso-ignore:padding;
                color:#FFC000;
                font-size:11.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Calibri, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border:.5pt solid white;
                background:#0070C0;
                mso-pattern:black none;
                white-space:normal;}
            .xl7224651
            {padding:0px;
                mso-ignore:padding;
                color:white;
                font-size:11.0pt;
                font-weight:700;
                font-style:normal;
                text-decoration:none;
                font-family:Calibri, sans-serif;
                mso-font-charset:0;
                mso-number-format:General;
                text-align:center;
                vertical-align:middle;
                border:.5pt solid white;
                background:#0070C0;
                mso-pattern:black none;
                white-space:nowrap;}
            -->
        </style>
        </head>

        <body>
        <!--[if !excel]>&nbsp;&nbsp;<![endif]-->
        <!--Die folgenden Informationen wurden durch den Web-Formular-Assistenten von
        Microsoft Excel erstellt.-->
        <!--Falls das gleiche Element mit Excel veröffentlicht wird, werden alle
        Informationen zwischen den DIV-Etiketten ersetzt.-->
        <!----------------------------->
        <!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
        <!----------------------------->

        <div id="Verrechnungsmodelle_Beispiel_Kooperation (1)_24651" align=center
             x:publishsource="Excel">

            <table border=0 cellpadding=0 cellspacing=0 width=1786 style='border-collapse:
 collapse;table-layout:fixed;width:1342pt'>
                <col width=202 style='mso-width-source:userset;mso-width-alt:7168;width:151pt'>
                <col width=234 style='mso-width-source:userset;mso-width-alt:8334;width:176pt'>
                <col width=270 span=5 style='mso-width-source:userset;mso-width-alt:9614;
 width:203pt'>
                <tr height=36 style='mso-height-source:userset;height:27.0pt'>
                    <td height=36 class=xl1524651 width=202 style='height:27.0pt;width:151pt'></td>
                    <td class=xl6924651 width=234 style='width:176pt'>Auftragsgeschäft</td>
                    <td colspan=5 class=xl7224651 width=1350 style='border-left:none;width:1015pt'>Services</td>
                </tr>
                <tr height=42 style='mso-height-source:userset;height:32.25pt'>
                    <td height=42 class=xl1524651 style='height:32.25pt'></td>
                    <td class=xl7024651 width=234 style='border-top:none;width:176pt'>Time and
                        Material</td>
                    <td class=xl6824651 width=270 style='border-top:none;border-left:none;
  width:203pt'>Transaktionsbasiert</td>
                    <td class=xl6824651 width=270 style='border-top:none;border-left:none;
  width:203pt'>Inhaltsbasiert</td>
                    <td class=xl6824651 width=270 style='border-top:none;border-left:none;
  width:203pt'>Volumenbasiert</td>
                    <td class=xl6824651 width=270 style='border-top:none;border-left:none;
  width:203pt'>Nutzungspauschale (Flat Rate)</td>
                    <td class=xl6824651 width=270 style='border-top:none;border-left:none;
  width:203pt'>Pro Asset basiert</td>
                </tr>
                <tr height=102 style='mso-height-source:userset;height:76.5pt'>
                    <td height=102 class=xl6824651 width=202 style='height:76.5pt;width:151pt'>Beschreibung</td>
                    <td class=xl6724651 width=234 style='width:176pt'>Es werden projektartig oder
                        im DevOps Ansatz geleistete Stunden (Aufwand) und Arbeitsmittel in Rechnung
                        gestellt.<span style='mso-spacerun:yes'> </span></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Beim Transaktionsmodell
                        wird pro Abruf einer Funktionalität („API call“) verrechnet. Die Kosten
                        ergeben sich dabei aus einem fixen Basispreis und dem Service-individuellen
                        Aufschlag</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Im inhaltsbasiertem Modell
                        hängt der Preis von bestimmten Faktoren (z.B. dem Umsatz) ab. Neben Umsatz
                        (Provisionsmodell) können auch andere Faktoren ge-nutzt werden (z.B. Anzahl
                        Nutzer).</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Im Volumenpreismodell wird
                        für ein Kontingent an Transaktionen ein Fixpreis verrechnet.<span
                                style='mso-spacerun:yes'> </span></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Bei der Nutzungspauschale
                        wird ein Festpreis für zeitbegrenzte Nutzung eines Service verrechnet<span
                                style='mso-spacerun:yes'> </span></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Beim
                        &quot;Assetbasiertmodell&quot; wird den<span style='mso-spacerun:yes'> 
  </span>Preis pro aktive Nutzer oder pro Objekt verrechnet</td>
                </tr>
                <tr height=81 style='mso-height-source:userset;height:60.75pt'>
                    <td height=81 class=xl6824651 width=202 style='height:60.75pt;border-top:
  none;width:151pt'>Preis-Struktur</td>
                    <td class=xl6724651 width=234 style='width:176pt'>Variable Preisen nach
                        Aufwand. <br>
                        Preisstruktur ist transparent<br>
                        Preisen vom Geschäftsmodell abgekoppelt</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Preis für das
                        Geschäftsmodelle is variable, konstanter und bekannter Durchschnittspreis
                        (pro jede Transaktion)<span style='mso-spacerun:yes'> </span></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Preis sind im
                        Geschäftsmodell des Kunden verankert (z.B. Provision)<br>
                        <font class="font524651">XXXX</font></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Fester Preis pro
                        Transaktion innerhalb eines Stafel<br>
                        Mengerabatte bei großerer Abnahme</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Kosten sind fix, unabhängig
                        von der Nutzung.<br>
                        Durchschnittspreis pro Transaktion ist bei genringer Nutzung hoch und fällt
                        mit steigender Nutzung</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Kosten sind pro Nutzer fix.
                        <br>
                        Durchschnittspreis pro Transaktion hängt von der Anzahl von einem
                        Mitarbeiter bearbeiteten Transaktionen ab</td>
                </tr>
                <tr height=115 style='height:86.4pt'>
                    <td height=115 class=xl6824651 width=202 style='height:86.4pt;border-top:
  none;width:151pt'>Herstellkosten</td>
                    <td class=xl6724651 width=234 style='width:176pt'>Herstellkosten sind mit dem
                        Anfwand gekopellt. an Anzahl der Menschen im Team gekoppelt.<span
                                style='mso-spacerun:yes'> </span></td>
                    <td class=xl6724651 width=270 style='width:203pt'>geringes Risiko<span
                                style='mso-spacerun:yes'>  </span>bei ghöher Anteil an Variable Kosten, wenn
                        geringe Fixkosten in der Herstellung anfallen (Cloud-Native Betrieb, DevOps
                        Betriebsteams)<span style='mso-spacerun:yes'> </span></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Abhängig von den Margen des
                        Kunden<br>
                        Risiko wenn DBS nicht beim Marketing der Business Solution beteiligt ist
                        (DBS muss bei Geschäftsmodell Mitspracherecht haben)</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Geringere Risiko für die
                        Herstellkosten bei höher Anteil an Variable Kosten<br>
                        Risiko<span style='mso-spacerun:yes'>  </span>bei hohen Fixkosten, wenn
                        nicht durch Kontingentgrenzen abgesichert<br>
                        <font class="font624651">Geringeres Risiko als Transaktionsbasiert,
                            geringeres Risiko als Flat Rate</font></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Risiko für die
                        Herstellkosten<span style='mso-spacerun:yes'>  </span>bei steigendem Konsum
                        des Kunden<br>
                        Besser geeignet für Services mit höherer Anteil an Fixkosten<br>
                    </td>
                    <td class=xl6724651 width=270 style='width:203pt'>Risiko für die
                        Herstellkosten nimmt mit steigender Anzahl von Nutzern ab.<span
                                style='mso-spacerun:yes'> </span></td>
                </tr>
                <tr height=81 style='mso-height-source:userset;height:60.75pt'>
                    <td height=81 class=xl6824651 width=202 style='height:60.75pt;border-top:
  none;width:151pt'>Gewinn (pro Kunde)</td>
                    <td class=xl6724651 width=234 style='width:176pt'>Deckungsbeitrag ist fix
                        über eine Professional Matrix<span style='mso-spacerun:yes'> </span></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Volatil mit direktem
                        Zusammenhang von Umsatzpotenzial und Skalierung</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Volatil mit direktem
                        Zusammenhang von Umsatzpotenzial (Geschäftsentwiclung des Kundes)</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Zwischenmodell was
                        Gewinnpotenzial und Risiko betrrift (zwischen Transaktionsbasiert und
                        Nutzungspauschall)</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Stabil und Bekannt</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Volatil mit direktem
                        Zusammenhang von Menge von Nutzer/Assets (Geschäftsentwiclung des Kundes)</td>
                </tr>
                <tr height=81 style='mso-height-source:userset;height:60.75pt'>
                    <td height=81 class=xl7124651 width=202 style='height:60.75pt;border-top:
  none;width:151pt'>Planungssicherheit</td>
                    <td class=xl6724651 width=234 style='width:176pt'>Abhängig von der
                        Auftragslage bei Projektgeschäft<br>
                        höhere Planungssicherheit bei DevOps<br>
                    </td>
                    <td class=xl6724651 width=270 style='width:203pt'>&gt; Abhängigkeit von
                        externen Faktoren<br>
                        &gt; Konsum nicht bekannt<br>
                        &gt; Profit-center vs Cost-center bei Kunden</td>
                    <td class=xl6724651 width=270 style='width:203pt'></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Prognose bei neuen
                        Geschäftsmodellen schwierig, da das Geschäftsmodell des Kunden noch
                        ungetestet ist</td>
                    <td class=xl6724651 width=270 style='width:203pt'>&gt; Nicht von externen
                        Faktoren abhängig<br>
                        &gt; Das Risiko der Investition liegt bei fixen Kosten vollständig beim
                        Kunden.<span style='mso-spacerun:yes'> </span></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Planungssicherheit nimmt
                        mit steigender Anzahl an verkauften Lizenzen ab</td>
                </tr>
                <tr height=78 style='mso-height-source:userset;height:59.25pt'>
                    <td height=78 class=xl6824651 width=202 style='height:59.25pt;border-top:
  none;width:151pt'>Verrechnung</td>
                    <td class=xl6724651 width=234 style='width:176pt'>Verrechnung über ADV</td>
                    <td class=xl6524651 width=270 style='width:203pt'>Ein Messmechanismus ist
                        gebraucht</td>
                    <td class=xl6524651 width=270 style='width:203pt'>Verknüpfung von
                        Finanzensystemen erforderlich</td>
                    <td class=xl6524651 width=270 style='width:203pt'>Ein Messmechanismus ist
                        gebraucht</td>
                    <td class=xl6524651 width=270 style='width:203pt'>Einfach zu implementieren,
                        da keine Messbechanismus gebraucht ist</td>
                    <td class=xl6524651 width=270 style='width:203pt'>Ein Messmechanismus ist
                        gebraucht<br>
                        Ein Lizenzmechanismus ist gebraucht</td>
                </tr>
                <tr height=81 style='mso-height-source:userset;height:60.75pt'>
                    <td height=81 class=xl6824651 width=202 style='height:60.75pt;border-top:
  none;width:151pt'>Change-Willingness</td>
                    <td class=xl6724651 width=234 style='width:176pt'>etabliertes Geschäftsmodell
                        für Dev + Ops<br>
                        neues Geschäftsmodell DevOps<span style='mso-spacerun:yes'> </span></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Preismodell nähe zu dem
                        Geschäftsmodell des Produktes des Kunde</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Preismodell sehr stark mit
                        dem Geschäftsmodell des Produktes des Kunde verknüpft</td>
                    <td class=xl6724651 width=270 style='width:203pt'></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Einsetzen, wenn durch die
                        variable Nutzung durch den Kunden keine Kosten für den Anbieter entstehen.</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Bei Kunden bekanntes
                        Geschäftsmodell, da Konzernanwendungen wie z.B. SAP so abrechnen.</td>
                </tr>
                <tr height=81 style='mso-height-source:userset;height:60.75pt'>
                    <td height=81 class=xl6824651 width=202 style='height:60.75pt;border-top:
  none;width:151pt'>&nbsp;</td>
                    <td class=xl6624651></td>
                    <td class=xl6724651 width=270 style='width:203pt'></td>
                    <td class=xl6724651 width=270 style='width:203pt'></td>
                    <td class=xl6724651 width=270 style='width:203pt'></td>
                    <td class=xl6724651 width=270 style='width:203pt'></td>
                    <td class=xl6724651 width=270 style='width:203pt'></td>
                </tr>
                <tr height=134 style='height:100.8pt'>
                    <td height=134 class=xl6824651 width=202 style='height:100.8pt;border-top:
  none;width:151pt'>besser geeignet für…</td>
                    <td class=xl6624651>Projekte</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Market-Entry
                        Anwendungen<br>
                        Use-Cases mit hohem Potential für Skalierbarkeit der Transaktionen<br>
                        Use-Cases mit Verwendbarkeit in mehreren Domänen (Supporting Services)</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Use-Cases in Kooperation
                        mit Kunden<br>
                        Endkundenrelevante Use-Cases als Gesamtangebot<br>
                    </td>
                    <td class=xl6724651 width=270 style='width:203pt'>Market-Entry Anwendungen
                        mit unklarem Skalierpotential. Geringes Risiko bei Flop des Geschäftsmodells,
                        aber eine Möglichkeit zur Partizipation bei hoher Skalierung. Dafür wird sehr
                        wahrscheinlich die Profitabilität pro Transaktion geringer sein. <br>
                    </td>
                    <td class=xl6724651 width=270 style='width:203pt'>Bestandsandwendungen mit
                        bekannter Verwendung aus historischen Daten. <br>
                        Neu-Anwendungen in Kundenbereichen, die eine starre Mifri-Planung
                        haben<br>
                        Kunden bei denen Service-Geschäft etabliert werden soll</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Bestandsandwendungen mit
                        bekannter Verwendung aus historischen Daten. <br>
                        Neu-Anwendungen in Kundenbereichen, die eine starre Mifri-Planung
                        haben<br>
                        Kunden bei denen Service-Geschäft etabliert werden soll</td>
                </tr>
                <tr height=19 style='height:14.4pt'>
                    <td height=19 class=xl1524651 style='height:14.4pt'></td>
                    <td class=xl1524651></td>
                    <td class=xl6524651 width=270 style='width:203pt'></td>
                    <td class=xl6524651 width=270 style='width:203pt'></td>
                    <td class=xl6524651 width=270 style='width:203pt'></td>
                    <td class=xl6524651 width=270 style='width:203pt'></td>
                    <td class=xl6524651 width=270 style='width:203pt'></td>
                </tr>
                <tr height=81 style='mso-height-source:userset;height:60.75pt'>
                    <td height=81 class=xl6824651 width=202 style='height:60.75pt;width:151pt'>Vorteile</td>
                    <td class=xl6724651 width=234 style='width:176pt'>etabliertes Geschäftsmodell
                        mit etablierten Abrechnungssystemen<br>
                        Bei DevOps enge Partnerschaft mit dem Kunden<span
                                style='mso-spacerun:yes'> </span></td>
                    <td class=xl6724651 width=270 style='width:203pt'>Kunde bezahlt nur was er
                        konsumiert<br>
                        Enterprise Architecture erhöht Skalierung in verschiedenen Domänen</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Hohe Sichtbarkeit im
                        Konzern, da nur möglich für Business Solutions<br>
                        Partnerschaftliche Zusammenarbeit<br>
                        Hochqualitative IT/UX beeinflusst ROI<br>
                    </td>
                    <td class=xl6724651 width=270 style='width:203pt'>Hohes Risikohedging für
                        große/Niedrige Skalierung</td>
                    <td class=xl6724651 width=270 style='width:203pt'>&gt; Planungssicherheit
                        beim Kunden und Service Owner<br>
                        Geschäftsmodell in der Hand des Kunden<br>
                        etabliertes Preismodell bei Kunden<span style='mso-spacerun:yes'> </span></td>
                    <td class=xl6724651 width=270 style='width:203pt'>etabliertes Preismodells
                        bei Kunden<br>
                        UX/ Qualität beeinflusst ROI</td>
                </tr>
                <tr height=81 style='mso-height-source:userset;height:60.75pt'>
                    <td height=81 class=xl6824651 width=202 style='height:60.75pt;border-top:
  none;width:151pt'>Nachteile</td>
                    <td class=xl6724651 width=234 style='width:176pt'>keine wirtschaftliche
                        Steuerung der Systel<br>
                        keine Möglichkeit mit Innovation den ROI zu steigern</td>
                    <td class=xl6724651 width=270 style='width:203pt'>Profitabilitätsrisiko bei
                        geringeren Transaktionenmengen<br>
                    </td>
                    <td class=xl6724651 width=270 style='width:203pt'>Partnerschaftliche
                        Zusammenarbeit muss beim Kunden angekommen sein, da das Geschäftsmodell und
                        damit Mitspracherecht der DBS mit gehört</td>
                    <td class=xl6724651 width=270 style='width:203pt'></td>
                    <td class=xl6724651 width=270 style='width:203pt'>&gt; Maximierung des
                        Umsatzpotenzial nicht möglich<br>
                        &gt; Kein Einfluss von UX/Qualität auf den ROI</td>
                    <td class=xl6724651 width=270 style='width:203pt'>typischerweise kleine
                        Skalierungsmöglichkeit<br>
                        beschränkt auf Business Solutions</td>
                </tr>
                <![if supportMisalignedColumns]>
                <tr height=0 style='display:none'>
                    <td width=202 style='width:151pt'></td>
                    <td width=234 style='width:176pt'></td>
                    <td width=270 style='width:203pt'></td>
                    <td width=270 style='width:203pt'></td>
                    <td width=270 style='width:203pt'></td>
                    <td width=270 style='width:203pt'></td>
                    <td width=270 style='width:203pt'></td>
                </tr>
                <![endif]>
            </table>

        </div>
        <?php include("footer.html"); ?>
