<nav class="main-nav">
    <div class="burger-menu">
        <span>MENU</span>
        <div class="icon-burger">☰</div>
    </div>

    <ul class="nav-links">
        <li><a href="index.html">Accueil</a></li>
        <li><a href="geographie.html">Géographie</a></li>
        <li><a href="histoire.html">Histoire</a></li>
        <li><a href="culture.html">Culture</a></li>
        <li><a href="galerie.html">Galerie</a></li>
        <li><a href="contacts.html">Contact</a></li>
        <li><a href="liens.html">Liens</a></li>
    </ul>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var nav = document.querySelector('.main-nav');
        if (!nav) return;
        var burger = nav.querySelector('.burger-menu');
        burger.addEventListener('click', function() {
            nav.classList.toggle('open');
        });
    });
</script>
