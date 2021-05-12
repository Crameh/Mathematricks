<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style/Body.css" />
  <link rel="stylesheet" href="style/PageCours.css" />
  <script async="true" src="https://cdn.jsdelivr.net/npm/mathjax@2/MathJax.js?config=AM_CHTML"> </script>

  <title>Seconde Chapitre 1</title>
</head>

<?php
include'html/Header.html';
?>  

<body>

  <div id="banner-area">
  </div>
  
  <div id = "content-area">
    <article id = "bloc">
     <h1> Ensemble de nombres et calculs numériques </h1>

     <h2> Les ensembles de nombres </h2>

     <p class = "Intro"> Durant toute la scolarité, nous avons travaillé avec différents types de nombres sans jamais donner de noms aux ensembles utilisés. En mathématiques, les ensembles de nombres sont comme de grandes familles qui nous permettront de classer les différents types de nombres.</p>

     <h3> L'ensembles des entiers naturels </h3>

     <p> Les entiers naturels sont les nombres positifs qui permettent de dénombrer des objets « entiers » (Une personne, trois pizzas, sept jetons), ces entiers naturels se comptent donc logiquement un par un. </p>

     <p class = "Def Special"> <strong> Définition 1 : </strong> L’ensemble des entiers naturels est noté `NN` et contient tous les entiers positifs : `0; 1 ; 2 ; … ; 100 ; …`</p>

     <h3> L'ensembles des entiers relatifs </h3>

     <p> Les entiers relatifs se présentent comme des entiers naturels mais contrairement à eux, ne sont pas limités pas leur positivité.  <br/>
     On peut donc leur ajouter un signe positif ou négatif (+ ou -) indiquant sa position par rapport à `0`. Les entiers négatifs sont appelés les « opposés » de leur semblable au signe contraire, et inversement  `-5` et  `5`  sont opposés).  </p>

     <img class = "ImgLine" src = "Cours_Images/Seconde/Chap1/Entiers_relatifs.png" alt = "segment qui montre plusieurs entiers relatifs"/>

     <p class = "Def Special"> <strong> Définition 2 : </strong> L’ensemble des entiers relatifs est noté `ZZ` et contient tous les entiers relatifs : ` … ; -2; -1 ; 0 ; 1 ; 2 ; …`</p></p>

     <h3> L'ensembles des décimaux </h3>

     <p> Les nombres décimaux sont tous les nombres qui peuvent s’exprimer avec un nombre de chiffres fini après la virgule. </p>  <p> <span class = "Exemple"> Exemples</span> :  `5,3`  est un décimal ;  `1 = 1.0` est un décimal ;
     `frac(1)(3) = 0,3333333333…` , il n’est donc pas un décimal puisqu’ici le nombre de chiffre après la virgule est infini. </p>


     <p class = "Def Special"> <strong> Définition 3 : </strong> L’ensemble des décimaux est noté  &#8517;  et contient tous les décimaux : `-3.5 ; -1 ; frac(1)(2) ; 2.7 ; …`   </p>

     <h3> L'ensembles des rationnels </h3>

     <p> Les nombres rationnels sont tous les nombres qui peuvent s’exprimer par un quotient de deux entiers relatifs donc de la forme `frac(a)(b)`. </p>
     <p> <span class = "Exemple"> Exemples</span> :  `2=frac(2)(1)`  est un rationnel ; `frac(1)(3)` est un rationnel. 
     `π`  n’est pas un rationnel car ne peut pas s’exprimer sous la forme d’un quotient, il est donc irrationnel. </p>

     <p class = "Def Special"> <strong> Définition 4 : </strong> L’ensemble des rationnels est noté `QQ` et contient tous les rationnels : `-frac(7)(3); frac(8)(11)  ; 3 ; …`  </p>

     <h3> L'ensembles des réels </h3>

     <p> Les nombres réels correspondent à tous les nombres pouvant s’exprimer avec une partie entière et une liste finie ou infinie de décimales. Grossièrement pour notre niveau, n’importe quel nombre qu’on étudiera sera un réel. </p> 
     <p> <span class = "Exemple"> Exemples</span> :   `-frac(1)(3)` est un réel ; `5` est un réel ; `π`  est un réel. </p>

     <p class = "Def Special"> <strong> Définition 5 : </strong> L’ensemble des réels est noté  `RR`  et contient tous les réels : ` -5 ; frac(98)(85) ; π ; 9781.56 ; … ` </p>

     <p class = "Remarque Special"> <strong> Remarque : </strong> Tous les ensembles présentés ci-dessus sont infinis, ces ensembles possèdent donc une infinité de valeurs. </p>

     <p class = "Remarque Special"> <strong> Remarque : </strong> Si tu as fait attention, tu as peut-être pu remarquer que l’ordre que j’ai choisi pour te présenter les différents ensembles ne s’est pas fait au hasard. Eh oui ! On peut remarquer qu’à chaque fois l’ensemble présenté comprenait les ensembles précédents. En effet, certains ensembles sont plus grands que d’autres même s’ils sont infinis, ce qui amène à la propriété suivante.  </p>

     <div class = "ZoneImg">

       <p class = "Prop Special"> <strong> Propriété 1 : </strong> L’ensemble des entiers naturels est inclus dans l’ensemble des entiers relatifs qui est lui-même inclus dans l’ensembles des décimaux, lui-même inclus dans l’ensemble des rationnels qui est inclus dans l’ensemble des réels. </p>

       <img class = "ImgCote" src = "Cours_Images/Seconde/Chap1/Ensembles_bulles.png" alt = "Schéma d'ensembles qui sont de plus en plus grands"/>

     </div>

     <div class="BlocExo">
      <div class = "Zone_Btn">
        <button id = "Exo_Refresh" class = "Btn"> START &#10148;</button> 
        <span class = "ExTitle"> Exercice n°1 </span>
        <button id ="SendvalueExo_Radio" class = "Btn">CONFIRMER &#10162;</button> 
      </div>               
      <span id = "Exo_Radio_Enonce" class = "Enonce"></span>
      <form id = "Exo_form">        
        <input type="radio" name ="valueExo_Radio" id = "valueN"/> <label for="valueN">`NN`, l'ensemble des entiers naturels</label><br/>
        <input type="radio" name ="valueExo_Radio" id = "valueZ"/> <label for="valueZ">`ZZ`, l'ensemble des entiers relatifs</label><br/>
        <input type="radio" name ="valueExo_Radio" id = "valueD"/> <label for="valueD">&#8517;, l'ensemble des décimaux</label><br/>
        <input type="radio" name ="valueExo_Radio" id = "valueQ"/> <label for="valueQ">`QQ`, l'ensemble des rationnels</label><br/>
        <input type="radio" name ="valueExo_Radio" id = "valueR"/> <label for="valueR">`RR`, l'ensemble des réels</label><br/>
      </form>
      <span id = "Exo_Radio_Rep" class = "Rep"> Hmm hmm bonne question... &#9757; </span>
    </div> 
  </article>

</div>



<script src = "script/Page_Cours.js"> </script>
<script src = "Exercices/Secondes/Seconde_Chap1_Exo1.js"> </script>

</body>

<?php 
include'html/Footer.html';
?>

</html>