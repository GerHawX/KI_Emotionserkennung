function showImage(pictureId) {
    // Display the image.
    var sourceImageUrl;
    switch (pictureId) {
        case "inputImage":
            sourceImageUrl = document.getElementById(pictureId).value;
            break;
        default:
            sourceImageUrl = document.getElementById(pictureId).src;
    }
    document.querySelector("#sourceImage").src = sourceImageUrl;
};