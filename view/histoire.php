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
            <h1>Les débuts de Stockholm:</h1>
            <p>
                La première mention de la ville de Stockholm date de 1252. La ville se réduit alors à la petite île de
                Gamla Stan (Vieille ville). Elle aurait été fondée par Birger Jarl, afin de protéger la Suède
                d'invasions par des flottes étrangères et afin de mettre fin aux pillages dont étaient victimes des
                villes comme Sigtuna située sur le lac Mälaren. Le premier bâtiment construit est un fort qui contrôle
                le trafic maritime entre la mer Baltique et le lac Mälaren. Sous l'influence de Magnus Ladulås,
                Stockholm prospère grâce à ses relations commerciales avec Lübeck. Elle fait alors partie de la ligue
                hanséatique. En 1270, Stockholm est décrite par des documents comme une vraie ville et, en 1289, elle
                est déjà la plus grande ville de Suède. La première estimation fiable de sa taille remonte au xve
                siècle. Elle rassemble alors environ un millier de ménages pour cinq à six mille habitants.
                En 1349, la ville connaît un épisode de peste noire ravageur.
                <strong>L'union de Kalmar:</strong><br>
                Ce n'est qu'en 1419 que Stockholm est proclamée capitale de la Suède. Sa position stratégique, ainsi que
                son poids économique en font une place importante dans les relations entre les rois danois de l'union de
                Kalmar et le mouvement d'indépendance suédois pendant le xve siècle. Elle verra de nombreuses batailles
                se dérouler, notamment la bataille de Brunkeberg gagnée contre le roi du Danemark Christian Ier par Sten
                Sture le Vieil en 1471, et le bain de sang de Stockholm qui aura lieu en 1520 sous les ordres de
                Christian II de Danemark, mettant un terme à l'union de Kalmar.<br>
                <strong>La période des Vasa:</strong><br>
                En 1521, Gustav Vasa fait son entrée à Stockholm et signe le début d'une nouvelle ère pour la Suède. La
                ville s'agrandit et s'étend au-delà de Stadsholmen sur Södermalm et Norrmalm. En 1600, elle compte dix
                mille habitants.<br>
                <strong>1600-1800:</strong><br>
                Au xviie siècle, Stockholm devient une ville européenne d'envergure. Entre 1610 et 1680, sa population
                est multipliée par six. Ladugårdslandet, maintenant appelé Östermalm ainsi que l'île de Kungsholmen sont
                alors rattachés à la ville. En 1628, le Vasa coule dans Stockholm. Peu après, sont instaurées des règles
                qui donnent à celle ci un monopole sur les échanges entre les négociants étrangers et les territoires
                scandinaves. À cette époque, sont bâtis nombre de châteaux et de palais, dont la maison de la noblesse
                (riddarhuset) et au xviiie siècle le palais royal.<br>
                Après la guerre du Nord qui entraîne la destruction partielle de la ville, Stockholm voit sa croissance
                ralentir. Elle conserve toutefois son rôle de capitale politique de la Suède et, sous le règne de
                Gustave III de Suède, elle affirme sa supériorité culturelle. L'opéra royal est un bon exemple de
                l'architecture de cette époque.<br>
                <strong>1800-1900</strong>
                Au début du xixe siècle, Stockholm perd encore de son influence économique. Norrköping devient la
                principale cité industrielle du pays, et Göteborg devient un port incontournable grâce à sa localisation
                sur la mer du Nord. Dans la deuxième partie du siècle, Stockholm retrouve son rôle moteur sur le plan
                économique avec l'apparition de nouvelles industries, et devient un centre important pour le commerce et
                les services, ainsi que la principale porte d'entrée de la Suède.<br>
                Sa population croît alors de manière très importante du fait d'une forte immigration. À la fin du
                siècle, seuls 40 % des habitants de la ville y sont nés. Des quartiers commencent alors à se développer
                au-delà des limites de Stockholm, dans la campagne et sur les côtes. C'est aussi à cette époque que la
                ville accroît son rôle central dans l'éducation et la culture, avec l'ouverture de nombreuses
                universités, comme le Karolinska Institut.<br>
                <strong>xxe siècle:</strong><br>
                Durant le xxe siècle, la ville réhabilite une grande partie de son centre-ville, alors composé de rues
                étroites et enchevêtrées qui posent un problème au fur et à mesure que la circulation augmente.<br> Les
                autorités communales y interdisent la rénovation des bâtiments et les achètent sur toute une zone proche
                de la gare centrale, de Hötorget à Sergels torg, pendant la première moitié du siècle. De 1945 à 1967,
                la zone est rasée puis reconstruite, avec de larges rues piétonnes ainsi que des gratte-ciels.<br>
                À la fin de celui-ci, Stockholm est une ville moderne, cosmopolite et très en avance dans les domaines
                technologiques. En 1923, le gouvernement de la commune emménage dans le nouvel hôtel de ville. Le métro
                de Stockholm est construit à partir de 1950, et le district de Kista est maintenant devenu un important
                centre pour les nouvelles technologies.<br>
                <strong>Événements récents:</strong><br>
                Dans la nuit du 22 au 23 février 1944, la ville et d'autres sites subissent un bombardement aérien
                soviétique faisant deux blessés.<br>
                Du 5 au 16 juin 1972 a lieu la première conférence de l'Organisation des Nations unies sur
                l'environnement humain. <br>
                Généralement appelée conférence de Stockholm, cette rencontre marque un tournant
                dans l'émergence de la conscience environnementale planétaire. <br>
                Moment de rencontre, de confrontation et
                d'échange, elle a été un catalyseur. Elle fut et reste aussi un symbole par la reconnaissance
                institutionnelle de la gravité des problèmes d'environnement.<br>
                En 1986, le premier ministre Olof Palme est abattu en pleine rue, et en 2003 la ministre des affaires
                étrangères Anna Lindh est assassinée dans le grand magasin Nordiska Kompaniet.<br>
                Stockholm a été nommée capitale européenne de la culture en 1998.<br>
                Ecoquartier, chauffage urbain, transports publics, circulation automobile...
                La ville suédoise a été récompensée par la Commission de Bruxelles : elle a été sacrée championne de
                l'environnement pour 2010.
            </p>
        </div>
    </main>
</body>

</html>
