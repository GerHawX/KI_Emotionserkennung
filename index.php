<!DOCTYPE HTML>
<!--
	Snapshot by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="de">

<head>
    <title>DHBW Emotionserkennung mit KI</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/ownStyle.css"/>
</head>

<body>


<div class="page-wrap">

    <!-- Navigation -->
    <nav id="nav">
        <ul>
            <li><a href="index.php" class="active"><span class="icon fa-home"></span></a></li>
            <li><a href="beispielanalysen.php"><span class="icon fa-camera-retro"></span></a></li>
            <li><a href="aboutus.php"><span class="icon fa-file-text-o"></span></a></li>
        </ul>
    </nav>

    <!-- Hauptcontent -->
    <section id="main">

        <!-- KI-To-Me-Banner -->
        <section id="banner">
            <div class="inner">
                <h1>Emotionserkennung</h1>
                <p>Unter der Verwedung von künstlicher Intelligenz</p>
                <ul class="actions">
                    <li><a href="#ki1" class="button alt scrolly big">Weiter</a></li>
                </ul>
            </div>
        </section>


        <!--KI Section 1-->
        <section id="ki1">
            <div class="kisection1">
                <p>Bitte gib die URL zu einem Bild an oder wähle ein Bild aus der Gallerie, in dem die Emotion eines
                    Gesichts erkannt werden soll. Drücke anschließend den Button <strong>Analysieren</strong>.</p>

                <label for="inputImage">Bild für die Analyse:</label>
                <input type="text" name="inputImage" id="inputImage"
                       value="https://www.deutschlandfunk.de/media/thumbs/7/7260f9c4e388e16362b4e90d66713e26v1_max_755x425_b3535db83dc50e27c1bb1392364c95a2.jpg?key=6dd5ee"
                       style="width: 90%;"/>


                <script src="assets/js/ownFunctions.js"></script>

                <div class="positionierungButton">
                    <button class="button big " onclick="showImage('inputImage')"><a href="#ki2"
                                                                                     class="button scrolly ">Analysieren</a>
                    </button>
                    <br><br></div>

            </div>

        </section>

        <!-- Gallerien -->
        <section id="galleries ">
            <div id="positionierung">

                <div class="gallery ">
                    <header class="special ">
                        <h2>Beispielbilder</h2>
                    </header>
                    <a href="#anker" class="scrolly">
                        <div class="content ">
                            <div class="media" onclick="showImage('bild1')">
                                <img src="images/thumbs/frau1.jpg" id="bild1"
                                     alt="https://cdn.pixabay.com/photo/2020/02/22/21/21/burmese-woman-4871675_960_720.jpg "/>
                            </div>
                            <div class="media " onclick="showImage('bild2')">
                                <img src="images/thumbs/mann2.jpg" id="bild2"
                                     alt="https://cdn.pixabay.com/photo/2015/10/12/15/23/man-984504_960_720.jpg "
                                     title="This right here is a caption. "/>
                            </div>
                            <div class="media " onclick="showImage('bild3')">
                                <img src="images/thumbs/child1.jpg" id="bild3"
                                     alt="https://cdn.pixabay.com/photo/2015/04/24/20/59/girl-738306_960_720.jpg "
                                     title="This right here is a caption. "/>
                            </div>
                            <div class="media " onclick="showImage('bild4')">
                                <img src="images/thumbs/mann3.jpg" id="bild4"
                                     alt="https://cdn.pixabay.com/photo/2015/06/08/14/56/person-801789_960_720.jpg "
                                     title="This right here is a caption. "/>
                            </div>
                            <div class="media " onclick="showImage('bild5')">
                                <img src="images/thumbs/mann4.jpg" id="bild5"
                                     alt="https://cdn.pixabay.com/photo/2020/02/22/21/17/mime-4871669_960_720.jpg "
                                     title="This right here is a caption. "/>
                            </div>
                            <div class="media " onclick="showImage('bild6')">
                                <img src="images/thumbs/mann1.jpg" id="bild6"
                                     alt="https://cdn.pixabay.com/photo/2015/10/12/15/20/man-984433_960_720.jpg "
                                     title="This right here is a caption. "/>
                            </div>
                            <div class="media " onclick="showImage('bild7')">
                                <img src="images/thumbs/frau2.jpg" id="bild7"
                                     alt="https://cdn.pixabay.com/photo/2019/11/12/08/08/woman-4620433_960_720.jpg "
                                     title="This right here is a caption. "/>
                            </div>
                            <div class="media " onclick="showImage('bild8')">
                                <img src="images/thumbs/child2.jpg" id="bild8"
                                     alt="https://cdn.pixabay.com/photo/2016/09/27/10/10/baby-1697966_960_720.jpg "
                                     title="This right here is a caption. "/>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="positionierungButton">
                    <a href="beispielanalysen.php" class="button big ">Beispielanalysen</a>
                </div>
            </div>
        </section>

        <!--Ausgabe von ausgewähltem Bild und Analyseergebnis-->
        <section id="ki2">
            <div class="kisection2" id="anker">
                <div id="imageDiv">
                    <label for="sourceImage">Ausgewähltes Bild:</label>
                    <img id="sourceImage"/>
                </div>
                <div id="jsonOutput">
                    <label for="responseTextArea">Analyseergebnis:</label>
                    <textarea id="responseTextArea" class="UIInput"></textarea>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <div id="footerPosition">
                <div class="copyright ">
                    &copy; KI to me
                    <div><img class="footerLogo" src="images/KItome-Logo.PNG" alt="Logo" title=" "/></div>
                </div>
            </div>
        </footer>

    </section>
    <!--SECTION main-->
</div>
<!--DIV page-wrap-->

<!-- Scripts -->
<script src="assets/js/jquery.min.js "></script>
<script src="assets/js/jquery.poptrox.min.js "></script>
<script src="assets/js/jquery.scrolly.min.js "></script>
<script src="assets/js/skel.min.js "></script>
<script src="assets/js/util.js "></script>
<script src="assets/js/main.js "></script>

</body>

</html>