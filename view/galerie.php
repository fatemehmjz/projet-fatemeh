<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <header>
        <?php include ROOT_PATH."/view/inc/menu.php"; ?>
    </header>

    <main>
        <section class="content-main">
            <h2>Galerie</h2>
            <p>Découvrez quelques vues de Stockholm à travers cette sélection d'images.</p>

            <div class="gallery-grid">
                <figure>
                    <img src="../public/image/480px_Stockholm_August_2020_-_Kastellet_Vasa_Museum,_and_Nordic_Museum.jpg" alt="Vasa Museum">
                    <figcaption>Vasa Museum et musée nordique</figcaption>
                </figure>
                <figure>
                    <img src="../public/image/480px_Skeppsbrokajen_Gamla_Stan_from_Skeppsholmen_Stockholm.jpg" alt="Gamla Stan">
                    <figcaption>Gamla Stan depuis Skeppsholmen</figcaption>
                </figure>
                <figure>
                    <img src="../public/image/480px_Vasabron_Vasa_bridge_Stockholm.jpg" alt="Pont Vasabron">
                    <figcaption>Le pont Vasabron</figcaption>
                </figure>
                <figure>
                    <img src="../public/image/480px_Nobel_Museet.jpg" alt="Musée Nobel">
                    <figcaption>Musée Nobel</figcaption>
                </figure>
            </div>
        </section>
    </main>
</body>

</html>