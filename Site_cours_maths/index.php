<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name ="viewport" content ="width=device-width, initial-scale = 1.0">     
    <link rel ="stylesheet" href= "style/Body.css" />
    <link rel ="stylesheet" href= "style/Index.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Mathematricks</title>
</head>

<?php
include'html/Header.html';
?> 

<body>
    
    <div id = "index"></div>

    <!-- image fixé -->
    <div id="banner-area">
    </div>
    <!-- contenu de la page -->

    <div id = "content-area">
        <p class = "space"></p>
        <div class="carousel_container">
            <div id="carousel">
                <div class="slider">
                    <section id = "Carous0">
                        <a href ="Login.php"> <h4> Connexion </h4> </a>
                        <div class="slide_content">
                            Lorem ipsum dolor sit amet consectetur adipisicing, elit. Fugiat veniam doloremque porro quisquam quibusdam eveniet dolores. Reprehenderit blanditiis, ab dignissimos, assumenda nulla aut autem quae rem sunt facere! Commodi, sunt.
                        </div>
                    </section>
                    <section id = "Carous2">
                        <a href = "Seconde_Sommaire.php"> <h4> Seconde </h4> </a>
                        <div class="slide_content">
                            Lorem ipsum dolor sit amet consectetur adipisicing, elit. Fugiat veniam doloremque porro quisquam quibusdam eveniet dolores. Reprehenderit blanditiis, ab dignissimos, assumenda nulla aut autem quae rem sunt facere! Commodi, sunt.
                        </div>
                    </section>
                    <section id = "Carous1">
                       <a href = "Premiere_Sommaire.php"> <h4> Première </h4> </a>                       
                       <div class="slide_content">
                        Lorem ipsum dolor sit amet consectetur adipisicing, elit. Fugiat veniam doloremque porro quisquam quibusdam eveniet dolores. Reprehenderit blanditiis, ab dignissimos, assumenda nulla aut autem quae rem sunt facere! Commodi, sunt.
                    </div>
                </section>
                <section id = "CarousT">
                    <a href = "Terminale_Sommaire.php"> <h4> Terminale </h4> </a>                  
                    <div class="slide_content">
                        Lorem ipsum dolor sit amet consectetur adipisicing, elit. Fugiat veniam doloremque porro quisquam quibusdam eveniet dolores. Reprehenderit blanditiis, ab dignissimos, assumenda nulla aut autem quae rem sunt facere! Commodi, sunt.
                    </div>
                </section>
            </div>
            <div class="controls">
                <span class="arrow left"> <i class = "material-icons" width = "150px"> keyboard_arrow_left </i> </span>
                <span class="arrow right"><i class = "material-icons"> keyboard_arrow_right </i></span>
                <ul>
                    <li id = "Index0li" class = "indexli"></li>
                    <li id = "Index1li" class = "indexli"></li>
                    <li id = "Index2li" class = "indexli"></li>
                    <li id = "Index3li" class = "indexli"></li>
                </ul>
            </div>
        </div>
    </div>
    <article id = "bloc">

        <div id = "Propos">

            <div class = "triangle white"> </div>

            <p class = "space"></p>

            <h3 class = "section hidden"> A PROPOS </h3>

            <div id = "BlocStudent" class = "IndexBloc section hidden">
                <img src = "css/Images/Etudiants.jpg" alt = "Etudiants qui nous représentent"> 
                <p>Des cours écrits par des étudiants, <br/> pour des étudiants.</p>
            </div>

            <div id = "BlocExos" class = "IndexBloc section hidden">
                <p>Des exercices programmés <br/> pour une infinité de possibilités.</p>
                <img src = "css/Images/Exos.jpg" alt = "Image d'exos pour une infinité de possibilités" id = "index_image_right">
            </div>

        </div>

        <div id="ContactUs">

            <div class = "triangle grey"> </div>

            <p class = "space"></p>

            <h3 class = "section hidden"> NOUS CONTACTER </h3>

            <form method ="post" action="#" class = "section hidden">

                <div>
                    <input type="text" name="prenom" id="prenom" placeholder=" Prénom">
                    <select name="statut" id="statut">
                        <option value="student">Etudiant(e)</option>
                        <option value="parent">Parent d'étudiant(e)</option>
                        <option value="student">Autre</option>
                    </select>
                </div>
                <input type="email" name="mail" id="mail" size="40" placeholder=" Email"/>
                <textarea name="message" id="message" placeholder=" Message"></textarea>
                <button type ="submit" id = "submit"> Envoyer </button>
            </form>
            
        </div>

    </article>

</div> 
<script src = "script/carousel.js"></script>
<script src = "script/ScrollEffect.js"></script>
</body>

<?php 
include'html/Footer.html';
?>

</html>