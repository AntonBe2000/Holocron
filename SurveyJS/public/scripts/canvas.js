function canvas_generate() {
    switch ($('#pricingModelSelect').val()) {
        case "Volumenbasiert":
            $('#pricingModelDescription').text("Im Volumenpreismodell wird für ein Kontingent an Transaktionen ein Fixpreis verrechnet.");
            break;
        case "Transaktionsbasiert":
            $('#pricingModelDescription').text("Beim Transaktionsmodell wird pro Abruf einer Funktionalität („API call“) verrechnet. " +
                "Die Kosten ergeben sich dabei aus einem fixen Basispreis und dem Service-individuellen Aufschlag");
            break;
        case "ProAsset":
            $('#pricingModelDescription').text("Beim \"Assetbasiertmodell\" wird den  Preis pro aktive Nutzer oder pro Objekt verrechnet");
            break;
        case "TimeMaterial":
            $('#pricingModelDescription').text("Es werden projektartig oder im DevOps Ansatz geleistete Stunden (Aufwand) und Arbeitsmittel in Rechnung gestellt.");
            break;
        case "Inhaltsbasiert":
            $('#pricingModelDescription').text("Im inhaltsbasiertem Modell hängt der Preis von bestimmten Faktoren " +
                "(z.B. dem Umsatz) ab. Neben Umsatz (Provisionsmodell) können auch andere Faktoren ge-nutzt werden (z.B. Anzahl Nutzer).");
            break;
        case "Nutzungspauschale":
            $('#pricingModelDescription').text("Bei der Nutzungspauschale wird ein Festpreis für zeitbegrenzte Nutzung eines Service verrechnet ");
            break;


    }
}