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
            <p>Capitale de la Suède, Stockholm abrite une grande partie des principaux lieux culturels de Suède, dont
                des théâtres, des musées ou des opéras. Dans Stockholm et ses environs, se trouvent deux sites inscrits
                sur la liste du patrimoine mondial de l'UNESCO, le château de Drottningholm et le cimetière de
                Skogskyrkogården. Stockholm a par ailleurs été capitale européenne de la culture en 1998.

                Musées

                Stockholm compte près d'une centaine de musées. Certains de ces musées qui étaient gratuits sont pour la
                plupart devenus payants. Les plus célèbres sont le musée Vasa, Skansen, le musée historique, le musée
                ABBA, le musée d'art moderne, le musée national des beaux arts, le muséum suédois d'histoire naturelle
                ou encore le musée nordique ou le Stockholm Music Museum.

                Musique classique

                Stockholm possède deux orchestres de renom : l'orchestre philharmonique royal de Stockholm et
                l'orchestre symphonique de la radio suédoise.
                La capitale suédoise a été pays hôte de trois éditions du Concours Eurovision de la Chanson.

                Personnages célèbres

                Les personnages suivants sont nés à Stockholm :

                Emanuel Swedenborg (1688-1772), scientifique, théologien et philosophe
                Per Gustaf Floding(1731-1791), dessinateur et graveur
                Karl Kristoffer Arfwedson (1735-1826), banquier, né et mort à Stockholm
                Charles-Louis Didelot (1767-1837), danseur
                Marie Taglioni (1804-1884), ballerine
                Alfred Nobel (1833-1896), industriel et scientifique
                August Strindberg (1849-1912), écrivain
                Hilma Angered-Strandberg (1855-1927), femme de lettres
                Eva Bonnier (1857-1909), peintre et philanthrope
                Paul Graf (1866-1903), artiste peintre
                Ivar Fredholm (1866-1927), mathématicien
                Ewald Dahlskog (1894-1950), peintre, sculpteur et céramiste
                Folke Bernadotte (1895-1948), diplomate
                Ture Hedman (1895-1950), gymnaste artistique
                Rolf Sievert (1896-1966), physicien
                Dagmar Dadie-Roberg (1897-1966), sculptrice
                Greta Garbo (1905-1990), actrice
                Greta Thunberg (née en 2003), activiste
                Raoul Wallenberg (1912-date de décès incertaine), diplomate
                Ingrid Bergman (1915-1982), actrice
                Pierre Sainderichin (1918-2012), journaliste
                Lars Gyllensten (1921-2006), romancier
                Loreen (né en 1983), chanteuse
                Nabil Bahoui (né en 1991), footballeur
                Leif Knudsen (1928-1975), peintre et lithographe
                Claes Oldenburg (né en 1929), sculpteur
                Sven Lindqvist (né en 1932), écrivain
                Benny Andersson (né en 1946), compositeur, musicien et interprète, membre du groupe ABBA
                Art Spiegelman (né en 1948), auteur de bande dessinée
                Lars Jonsson (né en 1952), peintre et ornithologue
                Christer Fuglesang (né en 1957), spationaute
                Yngwie Malmsteen (né en 1963), guitariste
                Joey Tempest (né en 1963), chanteur
                Annika Sörenstam (1970-), joueuse de golf
                Mats Sundin (1971-), joueur de hockey
                Johan Hegg (né en 1973), chanteur
                Filippa Lagerbäck (née en 1973), actrice et animatrice de télévision
                Katja Nyberg (née en 1979), joueuse de handball
                Niklas Kronwall (1981-), joueur de hockey
                Elsa Hosk (1988-), basketteuse et mannequin
                Avicii (1989-2018), DJ producteur
                Gabriel Landeskog (1992), joueur de hockey
                Alexander Skarsgård (1976-), acteur
                Jonas Åkerlund (1966-), réalisateur
                Lisa Langseth (1975-), réalisatrice
                Icona Pop, groupe électro
                Dolph Lundgren (1957-), acteur
                Kenza Zouiten (1991-), bloggeuse
                Zara Larsson (1997), chanteuse
            </p>
        </div>
    </main>
</body>

</html>
