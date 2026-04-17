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
    <form>
        <div class="main content">

            <fieldset>
                <legend>Votre identité</legend>
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom">
                </div>
            </fieldset>
            <fieldset>
                <legend>Vos Coordonnées</legend>
                <div class="form-group">
                    <label for="rue">Rue:</label>
                    <input type="text" id="rue" name="rue">
                </div>
                <div class="form-group">
                    <label for="numero">Numéro :</label>
                    <input type="text" id="numero" name="numero">
                </div>
                <div class="form-group">
                    <label for="code postal">Code Postal :</label>
                    <input type="text" id="code postal" name="code postal">
                </div>
                <div class="form-group">
                    <label for="ville">Ville :</label>
                    <input type="text" id="ville" name="ville">
                </div>
                <div class="form-group">
                    <label for="gsm">GSM :</label>
                    <input type="text" id="gsm" name="gsm">
                </div>
            </fieldset>
        </div>
        <div class="side-content">
            <div class="form-group">
                <label for="message">Votre message :</label>
                <textarea id="message" name="message" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="consentement" required>
                    Acceptez-vous que vos données soient stockées ?</label>
            </div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
</body>
</html>
