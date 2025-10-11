<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Green for a Healthy Madagascar</title>
    <link rel="stylesheet" href="../assets/css_add/index.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include('../inc/navbar.php'); ?>

    <!-- CONTENU 1 (Carousel) -->
    <section id="contenu1Carousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicateurs -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#contenu1Carousel" data-bs-slide-to="0" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#contenu1Carousel" data-bs-slide-to="1"></button>
            <!-- <button type="button" data-bs-target="#contenu1Carousel" data-bs-slide-to="2"></button> -->
        </div>

        <div class="carousel-inner">
            <!-- <div class="carousel-item active"
                style="height: 650px; background: url('../assets/images/content1.jpg') center/cover no-repeat;">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="text-white text-center bg-dark bg-opacity-50 p-4 rounded">
                        <h3><strong><i>Homme et Nature, un seul écosystème</i></strong></h3>
                    </div>
                </div>
            </div> -->
            <div class="carousel-item active"
                style="height: 650px; background: url('../assets/images/image1.jpg') center/cover no-repeat;">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="text-white text-center bg-dark bg-opacity-50 p-4 rounded">
                        <h3><strong><i>Pour un Madagascar sain, résilient, équitable et juste</i></strong></h3>
                    </div>
                </div>
            </div>
            <div class="carousel-item"
                style="height: 650px; background: url('../assets/images/image4.jpeg') center/cover no-repeat;">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="text-white text-center bg-dark bg-opacity-50 p-4 rounded">
                        <h3><strong><i>Renforcer la résilience et défendre la justice aux côtés des plus
                                    vulnérables</i></strong></h3>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#contenu1Carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#contenu1Carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </section>

    <!-- ACTUALITÉS -->
    <section class="contenu8 py-5">
        <div class="container">
            <h1 class="text-center mb-5"><strong>CHIFFRES CLÉS</strong></h1>

            <div class="row align-items-center mb-4">
                <div class="col-12 col-md-2 text-center">
                    <div id="chiffre"><strong>4</strong></div>
                </div>
                <div class="col-12 col-md-10 text-center text-md-start">
                    <div id="txt"><strong>Régions d’intervention</strong></div>
                </div>
            </div>

            <div class="row align-items-center mb-4">
                <div class="col-12 col-md-2 text-center">
                    <div id="chiffre"><strong>3</strong></div>
                </div>
                <div class="col-12 col-md-10 text-center text-md-start">
                    <div id="txt"><strong>Thématiques/expertises</strong></div>
                </div>
            </div>

            <div class="row align-items-center mb-4">
                <div class="col-12 col-md-2 text-center">
                    <div id="chiffre"><strong>15</strong></div>
                </div>
                <div class="col-12 col-md-10 text-center text-md-start">
                    <div id="txt"><strong>Partenaires</strong></div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-12 col-md-2 text-center">
                    <div id="chiffre"><strong>10 000</strong></div>
                </div>
                <div class="col-12 col-md-10 text-center text-md-start">
                    <div id="txt"><strong>Bénéficiaires directs</strong></div>
                </div>
            </div>
        </div>
    </section>

    <style>
    </style>

    <script src="../assets/js_add/index.js">
    </script>

    <section class="contenu4 py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <h1>Rejoignez un groupe local !</h1>
                    <p>En rejoignant GHM, tu deviens acteur d’un changement concret. Tu participes à des actions
                        terrain, défends les droits humains et renforces la résilience des communautés vulnérables.
                    </p>
                    <button class="btn btn-outline-success" id="btn-contenu3"><a href="contact.php" style="text-decoration: none;color:white">En savoir plus 🌳</a></button>
                </div>
                <div class="col-md-6">
                    <img src="../assets/images/contenu2.jpg" class="img-fluid rounded shadow" alt="Rejoignez-nous">
                </div>
            </div>
        </div>
    </section>


    <!-- CONTENU 3 -->
    <section class="contenu3 d-flex align-items-center">
        <div class="container text-white" id="contenu3-right">
            <div class="row">
                <div class="col-md-6">
                    <h2><i>Green for a Healthy Madagascar (GHM)</i></h2>
                    <p><strong>Association à but non lucratif multi-sectorielle</strong>, régie par l’ordonnance n°
                        60-133 du 3 octobre 1960. Nous œuvrons pour <strong>un Madagascar sain, résilient,
                            équitable, juste et durable</strong>. Nos actions couvrent trois domaines principaux :
                        <strong>justice climatique, droits humains, et actions sociales & humanitaires</strong>.
                    </p>
                    <button class="btn btn-outline-success" id="btn-contenu3"><a href="histoire.php" style="text-decoration: none;color:white">Nous découvrir 🌳</a></button>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENU 4 -->


    <!-- CONTENU 5 -->
    <section class="contenu5 py-5 text-center">
        <div class="container">
            <h2>Découvrez nos expertises</h2>
            <!-- <button class="btn btn-outline-success my-3">En savoir plus 🌳</button> -->
            <br><br>
            <div class="row g-4" id="texte-contenu5">
                <div class="col-md-6 border" id="social2">
                    <h3 class="expertise-title"><i>Justice et résilience climatique</i></h3>
                </div>
                <div class="col-md-6 border" id="social1">
                    <h3 class="expertise-title"><i>Droits humains</i></h3>
                </div>
                <div class="col-12 col-md-6 offset-md-3 border" id="social">
                    <h3 class="expertise-title"><i>Actions sociales et humanitaires</i></h3>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENU 6 -->
    <section class="contenu6 py-5">
        <div class="container text-center text-white">
            <h3 class="mb-5" style="color: greenyellow;"><strong>NOS VALEURS</strong></h3>

            <div class="row g-4">
                <div class="col-6 col-md-4">
                    <div class="valeur">
                        <img src="../assets/images/equite.jpg" class="img-fluid rounded-circle" alt="">
                        <strong>ÉQUITÉ</strong>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="valeur">
                        <img src="../assets/images/justice.jpg" class="img-fluid rounded-circle" alt="">
                        <strong>JUSTICE</strong>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="valeur">
                        <img src="../assets/images/durabilite.jpg" class="img-fluid rounded-circle" alt="">
                        <strong>DURABILITÉ</strong>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="valeur">
                        <img src="../assets/images/solidarite.jpg" class="img-fluid rounded-circle" alt="">
                        <strong>SOLIDARITÉ</strong>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="valeur">
                        <img src="../assets/images/citoyen.jpg" class="img-fluid rounded-circle" alt="">
                        <strong>ACTIONS</strong>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="valeur">
                        <img src="../assets/images/dignite.jpg" class="img-fluid rounded-circle" alt="">
                        <strong>DIGNITÉ</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENU 7 -->
    <section class="contenu7 py-5 text-center">
        <div class="container">
            <h1><strong>Soutenez-nous dans nos projets</strong></h1>
            <p>C’est grâce à vous, à eux, à moi que le monde va changer.</p>
        </div>
    </section>


    <div class="scroll-down text-center mt-5 mb-4">
        <p class="text-success fw-bold">Pour plus d'informations 🌱</p>
        <div class="arrow-container">
            <span class="arrow-down"></span>
            <span class="arrow-down"></span>
            <span class="arrow-down"></span>
        </div>
    </div>

    <?php include('../inc/footer.php'); ?>
</body>

</html>