<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!------------------GOOGLE FONT------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!------------------FONT AWESOME------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!------------------ANIMATE CSS------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!------------BOOTSTRAP------------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!------------CSS------------>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!------RESPONSIVE----->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">



    <title>Portfolio de Marie Favre-Rochex - Développeuse FullStack - Grenoble</title>

</head>



<body>

<!-----------------------------NAV BAR------------------------------->
<?php

require_once "navbar.php";

?>


<!-------------------------------------####-SECTION 1-####------------------------------------->
<section id="section-1" class="container-fluid mt-5 pt-2 pb-5">

    <div class="row">
        
        <div id="cube-gauche" class="col-md-3 col-sm-12">
            <!------------CUBE 3D gauche------------->
            <div class="wrapper m-auto">
                <div class="cube-wrap m-auto">
                    <div class="box m-auto">
                        <div class="single-box side-back"><p class="links-spheres"></p></div>
                        <div class="single-box side-top"></div>
                        <div class="single-box side-bottom"></div>
                        <div class="single-box side-left"></div>
                        <div class="single-box side-right"></div>
                        <div class="single-box side-front"></div>
                    </div>
                </div>
            </div>
            <!---------------FIN CUBE 3D------------------>
        </div>


        <div class="col-md-6 col-sm-12 mt-5">
            <h1 id="pres-h1" class="text-center animate-text">Marie FAVRE-ROCHEX</h1>
            <strong><h2 class="p-h1 text-center animate__animated animate__fadeInLeft">Développeuse FullStack - Grenoble -</h2></strong>
        </div>


        <div id="cube-droit" class="col-md-3 col-sm-12">
            <!------------CUBE 3D droit------------->
            <div class="wrapper m-auto">
                <div class="cube-wrap m-auto">
                    <div class="box m-auto">
                        <div class="single-box side-back"><p class="links-spheres"></p></div>
                        <div class="single-box side-top"></div>
                        <div class="single-box side-bottom"></div>
                        <div class="single-box side-left"></div>
                        <div class="single-box side-right"></div>
                        <div class="single-box side-front"></div>
                    </div>
                </div>
            </div>
            <!---------------FIN CUBE 3D------------------>
        </div>


    </div>

    <div class="row mt-5">

        <div id="citation-confucius">
            <h5 id="citation-pres" class="text-start w-50 m-auto">
                <i id="quote" class="fa-solid fa-quote-left"></i>
                NULLE PIERRE NE PEUT ETRE POLIE SANS FRICTION, NUL HOMME NE PEUT PARFAIRE SON EXPERIENCE SANS EPREUVE.
                <i id="quote" class="fa-solid fa-quote-right"></i>
                <p class="confucius text-end">Confucius</p>
            </h5>
        </div>

    </div>

    <div class="row mt-5">
        <p id="text-pres" class="text-center w-50 m-auto">
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
            but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
            of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
    </div>

    <div class="row text-center pt-5 pb-5">
        <div id="links-infos" class="container-fluid d-flex flex-wrap justify-content-center">
            <a id="btn-cv" href="img/CVs/CV-Marie-Avril-2022-couleursSANSTEL.pdf" target="_blank" class="p-2 m-3">Téléchargez mon cv</a>
            <a href="https://www.linkedin.com/in/marie-favre-rochex/" id="btn-linkedin" target="_blank" class="p-2 m-3">Retrouvez-moi sur linkedin</a>
            <a href="#" id="btn-github" target="_blank" class="p-2 m-3">Découvrez mon Git Hub</a>
        </div>
    </div>

</section>




<!-------------------------------------####-SECTION 2-####------------------------------------->
<section id="section-2" class="container-fluid mt-5 pt-2 pb-5">

    <div class="row">
        <h3 class="text-center mb-5 mt-5">MES COMPETENCES</h3>
    </div>


        <div class="row">
            <i id="hands-icon" class="fa-solid fa-handshake-simple fa-3x text-center"></i>
            <h4 class="competences mb-3 animate__animated animate__heartBeat text-center">L'humain</h4>
        </div>

        <div class="row">
            <ul id="liste-savoir-etre" class=" mt-5 mb-3 d-flex flex-wrap justify-content-center">
                <li class="ms-3 me-3">Sens de l’organisation</li>
                <li class="ms-3 me-3">Ecoute active</li>
                <li class="ms-3 me-3">Communication</li>
                <li class="ms-3 me-3">Travail en équipe</li>
                <li class="ms-3 me-3">Travail en autonomie</li>
            </ul>
        </div>

        <div class="row">
            <ul id="savoir-etre-qualites" class="d-flex flex-wrap justify-content-center">
                <li class="ms-5 me-5">Dynamique</li>
                <li class="ms-5 me-5">Curieuse</li>
                <li class="ms-5 me-5">Créative</li>
            </ul>
        </div>



    <div class="row mt-5">
        <i id="settings-icon" class="fa-solid fa-screwdriver-wrench fa-3x text-center"></i>
        <h4 class="competences animate__animated animate__heartBeat mb-5 text-center">La Technique</h4>
    </div>

    <div class="container">

            <div class="row">
                <div class="liste-1 text-center w-50 m-auto p-2 mb-5">
                    <p>HTML 5 | CSS 3 | Javascript | PHP | SQL - MySQL</p>
                    <p>Bootstrap (Responsive) | Symfony | React | Git Hub | Figma | Sass | Mailtrap </p>
                    <p>Photoshop | Illustrator | Word</p>
                </div>
            </div>

            <div class="row">

                <div id="liste-2" class="col-md-6 col-sm-12">
                    <ul>
                        <li>Définition des besoins et maquettage</li>
                        <li>Diagramme de séquence, MCD et MLD</li>
                        <li>Images: petites créations et ajustements pour les accorder à un site.</li>
                        <li>Création de sites responsives en flexbox et/ou bootstrap</li>
                        <li>Animations en CSS et Javascript</li>
                        <li>Conception et modification(s) d'une base de données</li>
                        <li>Intégration d'une base de données sur un site web</li>
                        <li>Création d'un système de routage (.htaccess)</li>
                        <li>Programmation Orientée Objet (POO)</li>
                    </ul>
                </div>

                <div id="liste-3" class="col-md-6 col-sm-12">
                    <ul>
                        <li>Sensibilisée à la cyber-sécurité</li>
                        <li>Sensibilisée au SEO</li>
                        <li>Détection et dépannage des pannes courantes matérielles & logicielles</li>
                        <li>Méthode Agile</li>
                        <li>Respect d'un cahier des charges</li>
                        <li>Respect d'un planning</li>
                        <li>Remontée des problèmes rencontrés</li>
                        <li>Veille technologique</li>
                    </ul>
                </div>

        </div>
    </div>

</section>


<!-------------------------------------####-SECTION 3-####------------------------------------->
<section id="section-3" class="container-fluid mt-5 pt-2 pb-5">

        <div class="row">
            <h3 class="text-center mb-5 mt-5">MES PROJETS</h3>
        </div>


    <div class="row mb-5">

        <div class="col-md-3 mt-5">
            <div id="card-1" class="card w-50 m-auto h-100">
                <div class="card-body h-100">
                    <a href="creations/jadoo" target="_blank"><img src="creations/jadoo/Jadoo-pres.png" id="img-c1" class="card-img mb-1" alt="site-statique-resto-jadoo" title="site-statique-resto-jadoo"></a>
                    <a href="creations/jadoo" target="_blank"><h5 id="h5-c1" class="card-title mt-2 text-center">RESTAURANT JADOO</h5></a>
                    <p id="p1-c1" class="card-text">1er site statique crée en HTML/CSS. Utilisation des flexbox.</p>
                    <p id="p2-c1" class="card-footer text-center">(Décembre 2021)</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mt-5">
            <div id="card-2" class="card w-50 m-auto h-100">
                <div class="card-body h-100">
                    <a href="creations/Agence-de-voyage" target="_blank"><img src="creations/Agence-de-voyage/agence-voyage-pres.PNG" id="img-c1" class="card-img mb-1" alt="site-statique-agence-de-voyage" title="site-statique-agence-de-voyage"></a>
                    <a href="creations/Agence-de-voyage" target="_blank"><h5 id="h5-c1" class="card-title mt-2 text-center">AGENCE DE VOYAGE</h5></a>
                    <p id="p1-c2" class="card-text">Découverte de bootstrap. Site statique d'une agence de voyage.</p>
                    <p id="p2-c2" class="card-footer text-center">(Janvier 2022)</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mt-5">
            <div id="card-2" class="card w-50 m-auto h-100">
                <div class="card-body h-100">
                    <a href="creations/Agence-immobilière" target="_blank"><img src="creations/Agence-immobilière/Agence-immobiliere-pres.PNG" id="img-c1" class="card-img mb-1" alt="site-statique-agence-immobilière" title="site-statique-agence-immobilière"></a>
                    <a href="creations/Agence-immobilière" target="_blank"><h5 id="h5-c1" class="card-title mt-2 text-center">AGENCE IMMOBILIERE</h5></a>
                    <p id="p1-c2" class="card-text">Un autre site statique. Choix d'une agence immobilière.</p>
                    <p id="p2-c2" class="card-footer text-center">(Janvier 2022)</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mt-5">
            <div id="card-1" class="card w-50 m-auto h-100">
                <div class="card-body h-100">
                    <a href="creations/Javascript%202/index2.html" target="_blank"><img src="creations/Javascript%202/JS-pres.gif" id="img-c2" class="card-img mb-1" alt="site-vitrine-resto-jadoo" title="site-vitrine-resto-jadoo"></a>
                    <a href="creations/Javascript%202/index2.html" target="_blank"><h5 id="h5-c2" class="card-title mt-2 text-center">INTRODUCTION A JAVASCRIPT</h5></a>
                    <p id="p1-c1" class="card-text">1er site vitrine crée en HTML/CSS <br> Utilisation des flexbox</p>
                    <p id="p2-c1" class="card-footer text-center">(Février 2022)</p>
                </div>
            </div>
        </div>

        <!----div de row---->
    </div>

    <div class="row mb-5 w-100 d-flex justify-content-center">

        <div class="col-md-3 mt-5">
            <div id="card-1" class="card w-50 m-auto h-100">
                <div class="card-body h-100">
                    <a href="#" target="_blank"><img src="img/cursor.png" id="img-c1" class="card-img mb-1" alt="site-statique-resto-jadoo" title="site-statique-resto-jadoo"></a>
                    <a href="#" target="_blank"><h5 id="h5-c1" class="card-title mt-2 text-center">A VENIR CRUD PHP</h5></a>
                    <p id="p1-c1" class="card-text">--------------------------------------------------------------------------------</p>
                    <p id="p2-c1" class="card-footer text-center">(Mars 2022)</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mt-5">
            <div id="card-2" class="card w-50 m-auto h-100">
                <div class="card-body h-100">
                    <a href="#" target="_blank"><img src="img/cursor.png" id="img-c1" class="card-img mb-1" alt="site-statique-agence-de-voyage" title="site-statique-agence-de-voyage"></a>
                    <a href="#" target="_blank"><h5 id="h5-c1" class="card-title mt-2 text-center">A VENIR CRUD PHP</h5></a>
                    <p id="p1-c2" class="card-text">--------------------------------------------------------------------------------</p>
                    <p id="p2-c2" class="card-footer text-center">(Avril 2022)</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mt-5">
            <div id="card-1" class="card w-50 m-auto h-100">
                <div class="card-body h-100">
                    <a href="#" target="_blank"><img src="img/cursor.png" id="img-c1" class="card-img mb-1" alt="site-statique-resto-jadoo" title="site-statique-resto-jadoo"></a>
                    <a href="#" target="_blank"><h5 id="h5-c1" class="card-title mt-2 text-center">A VENIR CRUD PHP</h5></a>
                    <p id="p1-c1" class="card-text">--------------------------------------------------------------------------------</p>
                    <p id="p2-c1" class="card-footer text-center">(Mai 2022)</p>
                </div>
            </div>
        </div>

        <!----div de row---->
    </div>



</section>





<!-------------------FOOTER--------------------->
<?php
require_once "footer.php";
?>


<!-----------------------JS--------------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="javascript.js"></script>
</body>
</html>