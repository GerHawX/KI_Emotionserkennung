<!DOCTYPE HTML>
<!--
	Snapshot by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Snapshot by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <div class="page-wrap">

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="index.php" class="active"><span class="icon fa-home"></span></a></li>
                <li><a href="gallery.html"><span class="icon fa-camera-retro"></span></a></li>
                <li><a href="generic.html"><span class="icon fa-file-text-o"></span></a></li>
            </ul>
        </nav>

        <!-- Main -->
        <section id="main">

            <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <h1>Emotionserkennung</h1>
                    <p>Unter der Verwedung von künstlicher Intelligenz</p>
                    <ul class="actions">
                        <li><a href="#ki1" class="button alt scrolly big">Weiter</a></li>
                    </ul>
                </div>
            </section>


            <!--https://www.deutschlandfunk.de/media/thumbs/7/7260f9c4e388e16362b4e90d66713e26v1_max_755x425_b3535db83dc50e27c1bb1392364c95a2.jpg?key=6dd5ee-->
            <!--KI Section 1-->
            <section id="ki1">
                <div class="kisection1">
                    <!--<H1>KI-Emotionserkennung</H1>-->
                    <p>Bitte gib die URL zu einem Bild an oder wähle ein Bild aus der Gallerie, in dem die Emotion eines Gesichts erkannt werden soll.</br>
                        Drücke anschließend den Button
                        <strong> Analysieren </strong>.</p>

                    Bild für die Analyse:
                    <!--id= inputImage-->
                    <input type="text" name="inputImage" id="inputImage" value="https://www.deutschlandfunk.de/media/thumbs/7/7260f9c4e388e16362b4e90d66713e26v1_max_755x425_b3535db83dc50e27c1bb1392364c95a2.jpg?key=6dd5ee" style="width: 90%;" />


                    <script src="showImage.js"></script>

                    <div class="positionierungButton"> <button class="button big " onclick="showImage()"><a href="#ki2" class="button scrolly ">Analysieren</a></button><br><br></div>

                </div>

            </section>

            <!-- Gallery -->
            <section id="galleries ">

                <!-- Photo Galleries -->
                <div id="positionierung">
                    <div class="gallery ">
                        <header class="special ">
                            <h2>Beispielbilder</h2>
                        </header>
                        <div class="content ">
                            <div class="media ">
                                <a href="images/fulls/frau1.jpg "><img src="images/thumbs/frau1.jpg " alt="https://cdn.pixabay.com/photo/2020/02/22/21/21/burmese-woman-4871675_960_720.jpg " title="This right here is a caption. " /></a>
                            </div>
                            <div class="media ">
                                <a href="images/fulls/mann2.jpg "><img src="images/thumbs/mann2.jpg " alt="https://cdn.pixabay.com/photo/2015/10/12/15/23/man-984504_960_720.jpg " title="This right here is a caption. " /></a>
                            </div>
                            <div class="media ">
                                <a href="images/fulls/child1.jpg "><img src="images/thumbs/child1.jpg " alt="https://cdn.pixabay.com/photo/2015/04/24/20/59/girl-738306_960_720.jpg " title="This right here is a caption. " /></a>
                            </div>
                            <div class="media ">
                                <a href="images/fulls/mann3.jpg "><img src="images/thumbs/mann3.jpg " alt="https://cdn.pixabay.com/photo/2015/06/08/14/56/person-801789_960_720.jpg " title="This right here is a caption. " /></a>
                            </div>
                            <div class="media ">
                                <a href="images/fulls/mann4.jpg "><img src="images/thumbs/mann4.jpg " alt="https://cdn.pixabay.com/photo/2020/02/22/21/17/mime-4871669_960_720.jpg " title="This right here is a caption. " /></a>
                            </div>
                            <div class="media ">
                                <a href="images/fulls/mann1.jpg "><img src="images/thumbs//mann1.jpg " alt="https://cdn.pixabay.com/photo/2015/10/12/15/20/man-984433_960_720.jpg " title="This right here is a caption. " /></a>
                            </div>
                            <div class="media ">
                                <a href="images/fulls/frau2.jpg "><img src="images/thumbs/frau2.jpg " alt="https://cdn.pixabay.com/photo/2019/11/12/08/08/woman-4620433_960_720.jpg " title="This right here is a caption. " /></a>
                            </div>
                            <div class="media ">
                                <a href="images/fulls/child2.jpg "><img src="images/thumbs/child2.jpg " alt="https://cdn.pixabay.com/photo/2016/09/27/10/10/baby-1697966_960_720.jpg " title="This right here is a caption. " /></a>
                            </div>
                        </div>
                    </div>
                    <div class="positionierungButton">
                        <a href="gallery.html " class="button big ">Beispielanalysen</a>
                    </div>
                </div>
            </section>



            <!--KI Section 2-->
            <section id="ki2">
                <div class="kisection2 ">
                    <table>
                        <tr>
                            <th style="width: 50%">Ausgewähltes Bild:</th>
                            <th style="width: 50%">Analyseergebnis:</th>
                        </tr>
                        <tr>
                            <th>
                                <div id="imageDiv " style="width:50%; display:table-cell; ">
                                    <br><br>
                                    <img id="sourceImage" />
                                </div>
                            </th>
                            <th>
                                <div id="jsonOutput " style="width:50%; display:table-cell; ">
                                    <br><br>
                                    <textarea id="responseTextArea " class="UIInput " style="height:400px; "></textarea>
                                </div>
                            </th>
                        </tr>
                    </table>

                </div>
    </div>

    </section>

    <!-- Footer -->
    <footer id="footer">
        <div id="footerPosition">
            <div class="copyright ">
                &copy; SupportHero
                <div> <img class="logo " src="images/logo.jpg " alt="Logo" title=" " /></div>
            </div>
        </div>
    </footer>
    </section>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js "></script>
    <script src="assets/js/jquery.poptrox.min.js "></script>
    <script src="assets/js/jquery.scrolly.min.js "></script>
    <script src="assets/js/skel.min.js "></script>
    <script src="assets/js/util.js "></script>
    <script src="assets/js/main.js "></script>

</body>

</html>