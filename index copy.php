<!--
von Nico
mit den Sachen, die wir für die KI benötigen!
-->


<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KI-Emotionserkennung</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>

    <H1>KI-Emotionserkennung</H1>
    <p>Bitte gib die URL zu einem Bild an, in dem die Emotion eines Gesichts erkannt werden soll. Drücke anschließend
        den Button <strong> Analysieren </strong>.<br><br>

        Bild für die Analyse: <input type="text" name="inputImage" id="inputImage"
            value="https://www.deutschlandfunk.de/media/thumbs/7/7260f9c4e388e16362b4e90d66713e26v1_max_755x425_b3535db83dc50e27c1bb1392364c95a2.jpg?key=6dd5ee" />


        <script src="showImage.js"></script>

        <button onclick="showImage()">Analysieren</button><br><br>
        <div id="wrapper" style="width:1020px; display:table;">
            
            <div id="imageDiv" style="width:420px; display:table-cell;">
                Source image:<br><br>
                <img id="sourceImage" width="400" />
            </div>
            
            <div id="jsonOutput" style="width:600px; display:table-cell;">
                Response:<br><br>
                <textarea id="responseTextArea" class="UIInput" style="width:580px; height:400px;"></textarea>
            </div>

        </div>
</body>

</html>