<?php include("header.php");?>
<ul class="topnav">
    <li><img src="assets/nav_holocron.png" alt="bild" height="36" width="40" id="navbar_image"></li>
    <li><a href="index.php">Beratung</a></li>
    <li><a class="active" href="factorglossary.php">Faktoren</a></li>
    <li><a href="modelle_info.php">Preismodelle</a></li>
    <?php if(isset($_SESSION['userid'])) {echo '<li class="right"><a href="logout.php">Logout</a></li>';}?>
</ul>

<style>
    dl.grid {
        display: grid;
        grid-template-columns: 120px calc(100% - 120px);
    }
    dt, dd {
        margin-bottom: 1em;
        margin-left: 0;
    }
    dl.grid {
        display: flex; flex-wrap: wrap;
    }
    .grid dt {width: 120px; }
    .grid dd { width: calc(100% - 146px);}
    dd{
        border-bottom: 1px solid #ccc;
    }
    dt{
        font-weight:bolder;
    }
</style>
<main>
    <h1>Faktoren</h1>
    <h2>Was sind Faktoren?</h2>
<p>Faktoren sind Knoten in einem Netz zur Ermittlung eines geeigneten Preismodells zu den zuvor beantworteten Fragen. Sie sind sozusagen eine Zwischenschicht.</p>
    <h2>Übersicht</h2>
    <dl>
        <dt>Anzahl End-Nutzer</dt>
        <dd>Der Faktor Anzahl End-Nutzer beschreibt, wie viele Endnutzer bzw. Endanwender ein Service hat. Dabei ist
            irrelevant, ob dies zahlende oder nicht zahlende Endnutzer sind. Zum Beispiel: DB Navigator als Service hat
            viele Endkunden, ein technischer Service wie PVG hat lediglich einen Kunden.
        </dd>

        <dt>Geschäftsrisiko Kunde</dt>
        <dd>Das Geschäftsrisiko des Kunden beschreibt das Risiko des Kunden, welches aus dem operativen Tagesgeschäft
            des Kunden hervorgeht. Beispiel: Hohe Fixkosten eines Unternehmens machen ein Unternehmen bei Absatzrückgang
            anfällig für Insolvenz
        </dd>

        <dt>Systel-internes Risiko</dt>
        <dd>Das Systel-interne Risiko beschreibt jenes Risiko für DB Systel, welches mit der Entwicklung und dem Betrieb
            eines Services einhergeht. Beispiel: Hält das Kundenunternehmen den Service für geschäftskritisch, dann ist
            das Risiko für DB Systel bezüglich Zahlungen oder Zufriedenheit des Kunden geringer. Hält das Unternehmen
            den Service für nicht geschäftskritisch dann ist das Risiko für DB Systel höher.
        </dd>

        <dt>Preiselatizität</dt>
        <dd>Preiselastizität beschreibt eine mögliche Preisänderung des Services, wenn sich Angebot oder Nachfrage
            ändern. Beispiel: War die vorherige Lösung beim Kunden sehr aufwändig, so ist wahrscheinlich dass eine hohe
            Preiselastizität möglich ist. War die vorherige Lösung nicht aufwändig so kann man davon ausgehen, dass eine
            niedrige Preiselastizität möglich ist. Darüber hinaus fließen hier Erfahrungswerte aus den einzelnen
            DB-Tochtergesellschaften ein. Niedrige Preiselastizität: Starres Preismodell, Hohe Preiselastizität:
            Flexibleres Preismodell
        </dd>

        <dt>Anzahl Nutzergruppen</dt>
        <dd>Eine Nutzergruppe ist die Gruppierung mehrerer Benutzer (Abteilungen, Geschäftsnutzer, Privatnutzer, etc).
            Die Anzahl Nutzergruppen beschreibt wie viele Cluster an Nutzern es für einen Service gibt. Beispiel: Ein
            Service wird in der Disposition und Verwaltung genutzt. Die Nutzer haben unterschiedliches Interesse an den
            Daten sind aber unterschiedliche Nutzergruppen.
        </dd>

        <dt>Budget Kunde</dt>
        <dd>Budget Kunde beschreibt wie viel Budget der Hauptkunde des Services besitzt. Dabei können auch
            Erfahrungswerte einfließen. Beispiel: Bei Lösungen, die als sehr aufwändig eingestuft werden liegt i.d.R.
            ein hohes Budget vor; Für Lösungen, die ein hohes Geschäftspotenzial haben, liegt i.d.R. auch ein hohes
            Budget vor.
        </dd>

        <dt>Bedürfnishäufigkeit</dt>
        <dd>Bedürfnishäufigkeit beschreibt mit welcher Häufigkeit ein Service benötigt und aufgerufen wird. Beispiel:
            Ist der Service eng mit dem Kerngeschäft korreliert, so ist wahrscheinlich, dass die Bedürfnishäufigkeit
            hoch ist. Die Bedürfnishäufigkeit ist wahrscheinlich eher niedrig, wenn es sich um einen selten genutzten
            Service handelt. Hohe Bedürfnishäufigkeit: Information zu Störungen im Bahnvertrieb; Niedrige
            Bedürfnishäufigkeit: Lohnsteuerermittlung
        </dd>

        <dt>Skalierung</dt>
        <dd>Skalierung bzw. Skalierungsfähigkeit beschreibt die Wachstumsfähigkeit eines Services im Bezug auf das
            Business. Mit steigender Skalierungsfähigkeit steigt die Anzahl der potenziellen Kunden der DB Systel für
            diesen Service. Beispiel: Bei einer Nutzergruppe ist die Skalierungsfähigkeit tendenziell eher gering. Bei
            mehreren Nutzergruppen ist die Skalierungsfähigkeit tendenziell eher hoch. Niedrige Skalierung:
            Spezialservice Vendo für Ticketverkauf von DB Fernverkehr. Hohe Skalierung: Service zu Störmeldungen
        </dd>

        <dt>Nutzungsabhängig</dt>
        <dd>Ist das Bereitstellen und die Aufrechterhaltung des Services mit niedrigen Kosten verbunden (z.B.
            Cloud-native-Service) oder fallen hohe Ramp-Up oder Betriebskosten an (Hardware, Miete, Lizenzen, …). Dies
            hat entscheidende Auswirkungen, ob beispielsweise transaktionsbasierte Preismodelle oder eher eine Flatrate
            zum Einsatz kommen.
            Beispiel niedrige Kosten: EC2-Cloud-Native-Service (SaaS); Beispiel hohe Transaktionskosten: RiM mit viel
            Legacy-Abhängigkeiten
        </dd>

        <dt>Erfahrung_Kunde</dt>
        <dd>Die Erfahrung zeigt, dass bestimmte Partner bestimmte Preismodelle eher präferieren oder beispielsweise auch
            einfacher abrechnen können, andere Preismodelle hingegen ablehnen.
        </dd>

        <dt>Nutzungserfassung</dt>
        <dd>Nutzungserfassung beschreibt, wie gut die Nutzung eines Services erfasst werden kann bzw. wie aufwändig das
            ist. So ist beispielweise eine transaktionsbasierte Preisgestaltung abhängig davon, dass die Nutzung genau
            erfasst werden kann. Wenn dies aber technisch sehr aufwändig oder gar nicht möglich ist, scheiden bestimmte
            Preismodelle bereits aus.
        </dd>

        <dt>Modell_am_Markt</dt>
        <dd>Modell am Markt beschreibt, ob ein Preismodell bereits am Markt häufig angeboten wird. Beispiel: Wenn
            bereits ein Preismodell Standard am Markt ist, ist Modell am Markt hoch, dann ist es wahrscheinlicher, damit
            auch die Erwartungshaltung des Kunden zu treffen.
            Beispiel eines am Markt etablierten Preismodells: SAP und Preis pro Benutzer. Beispiel für ein eher
            ungewöhnliches Preismodell: Flatrate - bei der Bahn noch nicht verbreitet.
        </dd>
    </dl>

    <?php include("footer.html"); ?>
