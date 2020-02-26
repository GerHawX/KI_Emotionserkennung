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

    responseTextArea.value = data + " geladen!";

}