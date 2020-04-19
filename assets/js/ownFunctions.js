function showImage(pictureId) {

    var sourceImageUrl;
    switch (pictureId) {
        // Es wird unterschieden, ob ein Bild aus unserer Vorauswahl (case "inputImage") ausgewählt wurde oder eines aus der Textbox.
        case "inputImage":
            sourceImageUrl = document.getElementById(pictureId).value;
            doRestCall(sourceImageUrl);
            break;
        default:
            sourceImageUrl = document.getElementById(pictureId).src;
            doRestCall(sourceImageUrl);
    }
    // Anzeigen des verwendeten Bildes
    document.querySelector("#sourceImage").src = sourceImageUrl;
}

function doRestCall(data) {
    // Ausführen eines AJAX-Requests
    var responseTextArea = document.getElementById("responseTextArea");
    responseTextArea.value = "Analyse wird durchgeführt..."
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Wenn Request erfolgreich wird der JSON-String im Antwort-Textfeld angezeigt.
            responseTextArea.value = xhttp.responseText;
        }
    };

    xhttp.open("POST", "assets/php/sendData.php", true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send('data=' + encodeURIComponent(data));
}
