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
</body>
</html>
