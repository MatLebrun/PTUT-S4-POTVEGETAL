<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <link rel="stylesheet" href="./Public/assets/css/homepage.css">
</head>
<body>
    <!-- <a href="/ptut/index.html">page1</a>
    <a href="/ptut/page2.html">page2</a> -->
    <main id="swup" class="transition-fade">
        <div class="informations">
            <div class="information temperature">
                <div class="informationContent">
                    <p class="mainText">
                        <?=$listInfo[0]['temp']?>°
                    </p>
                </div>
                <a href="/temperature" class="moreInfoButton">
                    Historique
                </a>
            </div>
            <div class="information humidity">
                <div class="informationContent">
                    <p class="mainText">
                        <?=$listInfo[0]['hum']?>%
                    </p>
                </div>
                <a href="/humidity" class="moreInfoButton">
                    Historique
                </a>
            </div>
            <div class="information arrosage">
                <div class="informationContent">
                    <p class="mainText">
                        OFF
                    </p>
                </div>
                <a href="" class="moreInfoButton">
                    Plus d'informations
                </a>
            </div>
            <div class="information scenario">
                <div class="informationContent">
                    <p class="mainText">
                        0
                    </p>
                    <p class="secondText">
                        planification
                    </p>
                </div>
                <a href="" class="moreInfoButton">
                    Plus d'informations
                </a>
            </div>
        </div>

    </main>
</body>
</html>