<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name ="viewport" content ="width=device-width, initial-scale = 1.0">     
    <link rel ="stylesheet" href= "style/Body.css"/>
    <link rel ="stylesheet" href = "style/Sommaire.css"/>
    <title>Premiere</title>
</head>

<?php
include'html/Header.html';
?> 

<body>

    <!-- image fixé -->
    <div id="banner-area">
    </div>
    <!-- contenu de la page -->
    <div id = "content-area">

        <article id = "bloc">

            <h1> Terminale </h1>

            <div class="vertical-bar"></div>

            <div class="summ-wrapper">

                <div class="summ-mini-wrap summleft">
                    <div class="circle"></div>
                    <div class="line"></div>
                    <div class = "summ-elt section hidden">
                        <h6> Analyse </h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit amet aut reiciendis consequuntur culpa quis unde aspernatur magnam nihil similique.
                        </p>
                        <div class="block-mini-elt">
                            <a href = "#" class="summ-mini-elt n3">Dérivation</a>
                            <a href ="#"class="summ-mini-elt n3">Variations et courbes représentatives</a>
                            <a href ="#"class="summ-mini-elt n3">Fonction exponentielle</a>
                        </div>
                    </div>
                </div>

            <div class="summ-mini-wrap summright">
                <div class="circle"></div>
                <div class="line"></div>
                <div class = "summ-elt section hidden">
                    <h6> Algèbre </h6>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit amet aut reiciendis consequuntur culpa quis unde aspernatur magnam nihil similique.
                    </p>
                    <div class="block-mini-elt">
                        <a href = "#" class="summ-mini-elt n2">Suites numériques</a>
                        <a href = "#" class="summ-mini-elt n2">Equations, fonctions polynômes du second degré</a>
                    </div>
                </div>
            </div>

            <div class="summ-mini-wrap summleft">
                <div class="circle"></div>
                <div class="line"></div>
                <div class = "summ-elt section hidden">
                    <h6> Probabilités et statistiques </h6>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit amet aut reiciendis consequuntur culpa quis unde aspernatur magnam nihil similique.
                    </p>
                    <div class="block-mini-elt">
                        <a href = "#" class="summ-mini-elt n2">Probabilités conditionnelles et indépendance</a>
                        <a href = "#" class="summ-mini-elt n2">Variables aléatoires discètes</a>
                    </div>
                </div>
            </div>

            <div class="summ-mini-wrap summright">
                <div class="circle"></div>
                <div class="line"></div>
                <div class = "summ-elt section hidden">
                    <h6> Géométrie </h6>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit amet aut reiciendis consequuntur culpa quis unde aspernatur magnam nihil similique.
                    </p>
                    <div class="block-mini-elt">
                        <a href = "#" class="summ-mini-elt n2">Calcul vectoriel et produit scalaire</a>
                        <a href = "#" class="summ-mini-elt n2">Trigonométrie</a>
                    </div>
                </div>
            </div>       

        </article>

    </div>

    <script src = "script/ScrollEffect.js"></script>

</body>

<?php 
include'html/Footer.html';
?>

</html>