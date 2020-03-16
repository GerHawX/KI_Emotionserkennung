function showImage(pictureId) {
    // Display the image.
    var sourceImageUrl;
    switch (pictureId) {
        case "inputImage":
            sourceImageUrl = document.getElementById(pictureId).value;
            doRestCall("Externes Bild");
            break;
        default:
            sourceImageUrl = document.getElementById(pictureId).src;
            doRestCall(pictureId);
    }
    document.querySelector("#sourceImage").src = sourceImageUrl;
}

function doRestCall(data) {
    var responseTextArea = document.getElementById("responseTextArea");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Typical action to be performed when the document is ready:
            responseTextArea.value = xhttp.responseText;
        }
    };
    xhttp.open("GET", "assets/php/fummel.php", true);
    xhttp.send();
}
