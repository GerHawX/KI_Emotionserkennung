function showImage(pictureId) {
    // Display the image.
    var sourceImageUrl;
    switch (pictureId) {
        case "inputImage":
            sourceImageUrl = document.getElementById(pictureId).value;
            doRestCall(sourceImageUrl);
            break;
        default:
            sourceImageUrl = document.getElementById(pictureId).src;
            doRestCall(sourceImageUrl);
    }
    document.querySelector("#sourceImage").src = sourceImageUrl;
}

function doRestCall(data) {
    var responseTextArea = document.getElementById("responseTextArea");
    //var sourceImage = document.getElementById("sourceImage")
    responseTextArea.value = "Analyse wird durchgeführt..."
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Typical action to be performed when the document is ready:
            responseTextArea.value = xhttp.responseText;
            //sourceImage.src = " ";
        }
    };

    xhttp.open("POST", "assets/php/sendData.php", true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send('data=' + encodeURIComponent(data));
}
