<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name ="viewport" content ="width=device-width, initial-scale = 1.0">   
    <link rel ="stylesheet" href= "style/Body.css" />
    <link rel ="stylesheet" href = "style/Sommaire.css"/>
    <title>Mat'Hematips</title>

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

                <h1> Seconde </h1>

                <div class="vertical-bar"></div>

                <div class="summ-wrapper">

                    <div class="summ-mini-wrap summleft">
                        <div class="circle"></div>
                        <div class="line"></div>
                        <div class = "summ-elt section hidden">
                            <h6> Nombres et calculs </h6>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit amet aut reiciendis consequuntur culpa quis unde aspernatur magnam nihil similique.
                            </p>
                            <div class="block-mini-elt">
                                <a href = "../Seconde_Chap1.php" class="summ-mini-elt n3">Ensemble de nombres et calculs numériques</a>
                                <a href ="Seconde_Chap2.php"class="summ-mini-elt n3">Intervalles et inégalités</a>
                                <a href ="Seconde_Chap3.php"class="summ-mini-elt n3">Identités remarquables et équations</a>
                            </div>
                        </div>
                    </div>


                    <div class="summ-mini-wrap summright">
                        <div class="circle"></div>
                        <div class="line"></div>
                        <div class = "summ-elt section hidden">
                            <h6> Fonctions </h6>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit amet aut reiciendis consequuntur culpa quis unde aspernatur magnam nihil similique.
                            </p>
                            <div class="block-mini-elt">
                                <a href = "Seconde_Chap4.php" class="summ-mini-elt n2">Généralités sur les fonctions</a>
                                <a href = "Seconde_Chap5.php" class="summ-mini-elt n2">Variations et extremum</a>
                            </div>
                        </div>
                    </div>

                    <div class="summ-mini-wrap summleft ">
                        <div class="circle"></div>
                        <div class="line"></div>
                        <div class = "summ-elt section hidden">
                            <h6> Statistiques et probabilités </h6>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit amet aut reiciendis consequuntur culpa quis unde aspernatur magnam nihil similique.
                            </p>
                            <div class="block-mini-elt">
                                <a href = "Seconde_Chap6.php" class="summ-mini-elt n2">Statistiques descriptives</a>
                                <a href = "Seconde_Chap7.php" class="summ-mini-elt n2">Probabilités et échantillonnage</a>
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
                                <a href = "Seconde_Chap8.php" class="summ-mini-elt n3">Repérage et géométrie dans le plan</a>
                                <a href = "Seconde_Chap9.php" class="summ-mini-elt n3">Vecteurs du plan</a>
                                <a href = "Seconde_Chap10.php" class="summ-mini-elt n3">Droites du plan et systèmes d'équations</a>
                            </div>
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