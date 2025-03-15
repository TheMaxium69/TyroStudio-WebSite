<?php include "app/app.php"; $page = 2; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main id="game">

    <div class="wrapper">

        <article class="d-flex">

            <div>
                <img class="orange-back" src="https://tyrolium.fr/Contenu/Image/EnTete4.png" alt="FirstGame Logo">
            </div>

            <div>
                <h1 class="police-title">RhodoTales</h1>
                <p>Plateformer / Enigme</p>
                <p>Sorti prévue : hiver 2025</p>
            </div>

        </article>

        <article class="d-flex">

            <div>
                <img class="orange-back" src="https://tyrolium.fr/Contenu/Image/Tyrolium%20ServerMC%20Sword%203D.png" alt="TyroServ Logo">
            </div>

            <div>
                <h1 class="police-title">TyroServ Game</h1>
                <p>Adaptation de notre serveur<br>
                    Minecraft en jeu</p>
                <p>Sorti prévue : 2026</p>
            </div>

        </article>

    </div>


</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body> </html>