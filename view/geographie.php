<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <header>
        <?php
        // chemin absolu
        include ROOT_PATH."/view/inc/menu.php";
        // chemin relatif (en PHP à partir de la page qui appelle)
        # include "inc/menu.php";

        ?>  
    </header>
    <main>
        <nav class="navbar">
            <div class="nav-container">
                <label for="menu-toggle" class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>

                <ul class="nav-links">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="geographie.html">Géographie</a></li>
                    <li><a href="histoire.html">Histoire</a></li>
                    <li><a href="culture.html">Culture</a></li>
                    <li><a href="galerie.html">Galerie</a></li>
                    <li><a href="contacts.html">Contact</a></li>
                    <li><a href="liens.html">Liens</a></li>
                </ul>
            </div>
        </nav>

        <div class="content">
            <p>Ce toponyme, qui se rencontre une vingtaine de fois en Suède et en Finlande, représente un nom composé
                suédois de sens clair mais d'interprétation délicate : « l'île (holm) des rondins, des pieux ou des
                poteaux (stock) ». Si l'on pressent que des troncs d'arbres apprêtés ont joué un rôle dans l'aménagement
                du port et de l'agglomération, il est difficile de préciser lequel : pilotis, fondation de quais ou de
                maisons, estacade, constructions… Ce point est toujours débattu aujourd'hui.
                Stockholm s'écrit et se prononce différemment dans d'autres langues : Holmia en latin, Stockholbma en
                same, Stokholma en letton, Estocolmo en portugais et espagnol, Stokholmas en lituanien, Tukholma en
                finnois, Stokholmi en meänkieli, Stokkhólmur en islandais, Stoccolma en italien, Sztokholm en polonais,
                Stokgol'm (Стокгольм) en russe, Sutokkuhorumu (ストックホルム) en japonais, Sídégēěrmó (斯德哥尔摩) en chinois. En
                anglais, en néerlandais et en allemand, Stockholm s'écrit de la même façon mais se prononce légèrement
                différemment.
                Stockholm se trouve sur la côte orientale de la Suède, à l'endroit où le lac Mälar rejoint la mer
                Baltique. La ville elle-même s'étend sur quatorze îles qui font toutes partie de l'archipel de
                Stockholm, faisant de l'eau un élément omniprésent puisqu'elle représente environ 30 % de la superficie
                de la ville avec une proportion identique pour les espaces verts. Cinquante-sept ponts permettent de
                relier les différents quartiers.
                Si la ville a été fondée sur la petite île de Stadsholmen (là où se trouve Gamla stan, la vieille
                ville), elle s'est ensuite développée au nord où l'on trouve désormais Norrmalm et Östermalm, et au sud
                vers Södermalm.
                L'important archipel, constitué d'environ 24 000 îles, est un lieu de détente particulièrement prisé des
                habitants de la ville, qui aiment s'y rendre le week-end et le mercredi après-midi.
                Le climat de Stockholm est de type continental, du fait de sa latitude très septentrionale et du relatif
                éloignement de l'océan Atlantique. Les saisons sont très marquées, offrant des hivers froids et des étés
                doux à chauds, ceci étant dû à la grande différence dans la durée de la journée entre le solstice d'été
                (plus de 18 heures de jour) et le solstice d'hiver (6 heures de jour). Les records de température à
                Stockholm sont de 36 °C au maximum et −32 °C au minimum. Néanmoins, la température n'est jamais
                descendue au-dessous de −25 °C depuis l'hiver 1986-19876, grâce à la mer baltique qui joue tout de même
                un rôle de régulation thermique[réf. souhaitée]. Le nombre d'heures d'ensoleillement est 1 830 heures.
                La partie principale de Stockholm est composée de plusieurs quartiers qui constituent autant de lieux à
                visiter.
                La vieille ville, Gamla stan, se situe principalement sur l'île de Stadsholmen. Elle est constituée
                d'étroites ruelles, ainsi que de nombreux lieux d'intérêt comme le palais royal, le musée Nobel,
                l'église allemande, Storkyrkan ou la maison de la noblesse.
                Djurgården, une des îles de Stockholm, rassemble les principales attractions touristiques de la ville,
                dont le musée Vasa, Skansen, le nordique, ABBA, le parc d'attraction de Gröna Lund ainsi qu'un grand
                parc.
                Södermalm est un quartier très animé, grâce à de nombreux bars et restaurants, galeries d'art et
                brocantes. La place de Mariatorget y est un lieu très prisé, ainsi que les nombreuses églises. En 2014,
                le magazine Vogue a désigné Södermalm comme l'un des quartiers les plus « cools » du monde.
                Les autres quartiers notables sont Norrmalm, Östermalm, Kungsholmen ou Skeppsholmen.
            </p>
        </div>
    </main>
</body>

</html>
