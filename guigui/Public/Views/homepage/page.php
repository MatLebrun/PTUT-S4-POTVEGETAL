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
                        <?=$listInfo[0]['temperature']?>°
                    </p>
                </div>
                <a href="/guigui/temperatureext" class="moreInfoButton">
                    Température
                </a>
            </div>
            <div class="information humidity">
                <div class="informationContent">
                    <p class="mainText" >
                        <?=$listInfo[0]['humidity']?>%
                    </p>
                </div>
                <a href="/guigui/humidityext" class="moreInfoButton">
                    Humidté extérieure
                </a>
            </div>
            <div class="information arrosage">
                <div class="informationContent">
                    <p class="mainText">
                        <?=$listInfo[0]['temp_ground']?>°
                    </p>
                </div>
                <a href="/guigui/temperatureint" class="moreInfoButton">
                    Température du sol
                </a>
            </div>
            <div class="information scenario">
                <div class="informationContent">
                    <p class="mainText">
                        <?=$listInfo[0]['moisture']?>%
                    </p>
                </div>
                <a href="/guigui/humidityint" class="moreInfoButton">
                    Humidité de la terre
                </a>
            </div>
        </div>

    </main>
</body>
</html>