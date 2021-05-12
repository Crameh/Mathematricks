<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/Body.css" />
    <link rel="stylesheet" href="style/PageCours.css" />
    <script async="true" src="https://cdn.jsdelivr.net/npm/mathjax@2/MathJax.js?config=AM_CHTML"> </script>
    <title>Seconde Chapitre 6</title>
</head>

<?php
include'html/Header.html';
?>  

<body>

    <div id="banner-area">
    </div>
    
    <div id = "content-area">
        <article id = "bloc">
           <h1> Statistiques descriptives </h1>

           <h2> Pourcentage  </h2>

           <p class = "Intro"> Quand on travaille sur des statistiques ou sur des probabilités, on utilise pas mal de fois le terme « pourcentage ». C’est un concept qui devrait te sembler familier mais sais-tu les utiliser ? Pas de galère si ce n’est pas le cas car je suis justement là pour ça ! </p>

           <h3> Proportion en pourcentage </h3>

           <p> Il faut savoir qu’un pourcentage est un rapport entre deux valeurs et s’écrit avec un %. </p>

           <div class = "Def Special"> <strong> Définition 1 : </strong> Une proportion en pourcentage d’une quantité `Q_a` par rapport à une quantité  `Q_b`  se calcule par :  
            <br/>
            <p>`P = frac(Q_a)(Q_b) * 100` </p>
        </div>

        <p> <span class = "Exemple">Exemple</span> : La part en pourcentage de `12` élèves par rapport à une classe de `30` élèves est de `frac(12)(30) * 100 -> 40%`. </p>

        <p class = "Remarque Special"> <strong> Remarque : </strong> Une proportion peut s’écrire de 3 manières différentes :
            <br/>
            <span>Sous forme de fraction : `frac(15)(200) = frac(3)(40)`</span>
            <br/>
            <span>Sous forme de décimale : `0.075`</span>
            <br/>
            <span>Sous forme de pourcentage : `7.5%`</span> </p>

            <p class = "Remarque Special"> <strong> Remarque : </strong> Si tu veux retrouver une quantité à l'aide de sa proportion, tu n’as qu’à appliquer la formule suivante `Q_a = Q_b * frac(P)(100)` </p>   

            <p class = "Intro"> Si t’es un peu familier avec les équations, tu peux remarquer que c’est exactement la même formule qu’en haut. </p>

            <p> <span class = "Exemple">Exemple</span> : T’as `50€` dans ton portefeuille et tu veux savoir à quoi correspond `30%` de ton portefeuille. D’après la formule : `Q_a = 50*frac(30)(100) = 15€`, si t’as un doute, tu peux toujours vérifier ce que je dis en réappliquant la première formule. </p>

            <div class="BlocExo">
                <div class="Zone_Btn"> 
                    <button id = "Exo1_Refresh" class = "Btn"> START &#10148;</button> 
                    <span class = "ExTitle"> Exercice n°1 </span>
                    <button id ="SendvalueExo1" class = "Btn">CONFIRMER &#10162;</button>                     
                </div>
                <span id="Exo1_Enonce" class = "Enonce"> </span>
                <form name = "Exo1form" id = "Exo1form">
                    <input type= "text" name = "RepExo1" id = "RepExo1" size = "6" onsubmit="return false;"/> <span id = "Exo1_unite"> </span>
                </form>
                <span id="Exo1_Rep" class = "Rep"> </span>
            </div>

            <h3> Evolution </h3>

            <p> Une évolution `t` peut se caractériser de trois façons : une augmentation &#8599; (`t` est donc positif), une diminution &#8600; (`t` est donc négatif) ou une évolution nulle &#8594; (`t` est donc nulle). </p>

            <div class = "Def Special"> <strong> Définition 2 : </strong> Faire évoluer une quantité `Q_{i nitial e}` d’une valeur `t` % revient à faire le calcul suivant :
                <br/>
                <p>`Q_{fi nal e} = Q_{i nitial e} * ( 1 + frac(t)(100) )` </p>
                On notera la valeur `c = ( 1 + frac(t)(100) )`, le coefficient multiplicateur. 
            </div>

            <p> <span class = "Exemple">Exemples</span> : <br/> 
                Le prix d’un jeu Pokémon est de `40€`, durant les soldes, le prix du jeu diminuera de `25%`. Le nouveau prix sera de `30€` car `40*(1-frac(25)(100))=30`.
            </p> 

            <img class = "ImgLine" src="Cours_Images/Seconde/Chap6/Exemple_Evol_Pokemon.jpg" alt="Exemple d'évolution avec carte pokemon" width="700px" />

            <br/>

            <p>
                Tu as un portefeuille de `50€`, à Noël, la valeur de ton portefeuille a augmenté de `45%`. Ton portefeuille contient maintenant `72,5€` car `50*(1+frac(45)(100))=72,5`.
            </p>

            <img class = "ImgLine" src="Cours_Images/Seconde/Chap6/Exemple_Evol_Sous.jpg" alt="Exemple d'évolution avec portefeuille" width="700px" />

            <div class = "Def Special"> <strong> Définition 3 : </strong> Ce qu’on a noté t depuis le début est ce qu’on appelle un taux d’évolution. On peut le calculer de la manière suivante : 
                <br/>
                <p>`t = frac(Q_{fi nal e} - Q_{i nitial e})(Q_{i nitial e})` </p>
            </div>

            <p> Encore une fois, je t’invite à vérifier si ce que je dis est vrai en essayant de retrouver le taux d’évolution avec l’un des exemples. </p>
            <p> PS : N’oublie pas de le transformer en pourcentage. </p>

            <p class="Remarque Special"> <strong> Remarque : </strong> Fais très très attention à ne pas confondre le taux d'évolution et le coefficient multiplicateur. </p>

            <div class="BlocExo">
                <div class="Zone_Btn"> 
                    <button id = "Exo2_Refresh" class = "Btn"> START &#10148;</button> 
                    <span class = "ExTitle"> Exercice n°2 </span>
                    <button id ="SendvalueExo2" class = "Btn">CONFIRMER &#10162;</button>                     
                </div>
                <span id="Exo2_Enonce" class = "Enonce"> </span>
                <form name = "Exo2form" id = "Exo2form">
                    <input type= "text" name = "RepExo2" id = "RepExo2" size = "6"/> %
                </form>
                <span id="Exo2_Rep" class = "Rep"> </span>
            </div>            


            <h3> Evolutions successives et réciproques </h3>

            <p class = "Prop Special"> <strong> Propriété 1 : </strong> Durant des évolutions successives, les coefficients multiplicateurs se multiplient entre eux. </p>

            <p class = "Remarque Special"> <strong> Remarque : </strong> <span class = "Warning"> &#9888; Attention </span>, erreur très fréquente et à ne surtout pas faire ! Lorsqu’on calcule des évolutions successives, les coefficients se multiplient mais il ne faut surtout pas additionner les pourcentages. </p>

            <p class = "Remarque Special"> <strong> Remarque : </strong> Quand on parlera d'évolutions successives, les calculs se feront avec les coefficients et non les taux. </p>

            <p> <span class = "Exemple"> Exemple</span> : 
                <br/>
                La valeur de mon compte en banque est de `500€` en 2018. Cette valeur augmente de `15%` en 2019 puis diminue de `10%` en 2020. <br/>
                Le taux d’évolution globale de mon compte en banque entre 2018 et 2020 est de `103,5%` car `(1+frac(15)(100))*(1- frac(10)(100))=103,5%` et non de `105%` comme certains pourraient le croire. <br/>
            Bon, je me répète mais faut bien pour que ça rentre dans ta tête mais essaie de calculer la valeur finale de mon compte et vérifie si tu trouves la même chose avec ce coefficient. Tu as toutes les cartes en main pour pouvoir y arriver ! </p>

            <img class = "ImgLine" src="Cours_Images/Seconde/Chap6/Exemple_Evol_Succ.jpg" alt="Exemple d'évolution successives avec banque" width="700px" />

            <p class = "Def Special"> <strong> Défintion 4 : </strong> Lorsqu’il y a évolution entre une quantité `Q_{i nitial e}` vers une quantité `Q_{fi nal e}`. On appelle le coefficient multiplicateur inverse `c_{im} = frac(1)(c)` tel que `Q_{i nitial e} = c_{im} * Q_{fi nal e}`. <br/> En gros, c’est le coefficient qui va te permettre de passer de la quantité finale à la quantité initial e quoi.  </p>

            <p> <span class = "Exemple"> Exemple</span> : J’ai la flemme de trouver un nouvel exemple donc je ressors celui du jeu Pokémon. Le jeu coûte `40€` et on avait dit que le coefficient multiplicateur pour les soldes était `c = 1 - frac(25)(100)=75%`. <br/> 
                Le nouveau prix était donc de `30€`. Je veux maintenant déterminer le coefficient multiplicateur inverse. On a d’après la formule `c_{im} = frac(1)(c) =(1)/(0,75)=frac(4)(3) ≃ 1.333333`. <br/>
            Bon bah go vérifier ça : `30*frac(4)(3) = 40`. Héhé on retrouve bien le prix de départ qui est `40€`.  </p>

            <img class = "ImgLine" src="Cours_Images/Seconde/Chap6/Exemple_Evol_reciproque.jpg" alt="Exemple d'évolution réciproque avec la banque" width="700px" />

            <div class="BlocExo">
                <div class="Zone_Btn"> 
                    <button id = "Exo3_Refresh" class = "Btn"> START &#10148;</button> 
                    <span class = "ExTitle"> Exercice n°3 </span>
                    <button id ="SendvalueExo3" class = "Btn">CONFIRMER &#10162;</button>                     
                </div>
                <span id="Exo3_Enonce" class = "Enonce"> </span>
                <form name = "Exo3form" id = "Exo3form">
                    <input type= "text" name = "RepExo3" id = "RepExo3" size = "6"/> %
                </form>
                <span id="Exo3_Rep" class = "Rep"> </span>
            </div>   

        </article>

    </div>

    <script src = "script/Page_Cours.js"> </script>
    <script src = "Exercices/Secondes/Seconde_Chap6_Exo1.js"> </script>
    <script src = "Exercices/Secondes/Seconde_Chap6_Exo2.js"> </script>
    <script src = "Exercices/Secondes/Seconde_Chap6_Exo3.js"> </script>
</body>

<?php 
include'html/Footer.html';
?>

</html>