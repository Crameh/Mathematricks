<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style/Body.css" />
  <link rel="stylesheet" href="style/PageCours.css" />
  <script async="true" src="https://cdn.jsdelivr.net/npm/mathjax@2/MathJax.js?config=AM_CHTML"> </script>
  <title>Seconde Chapitre 9</title>
</head>

<?php
include'html/Header.html';
?>  

<body>

  <div id="banner-area">
  </div>

  <div id = "content-area">
    <article id = "bloc">

     <h1> Vecteurs du plan </h1>

     <h2>Notion de vecteur</h2>

     <p class = "Intro"> Alors là on s’attaque à du très très lourd. Les vecteurs c’est quelque chose de nouveau pour toi mais c’est fondamental. Ils te poursuivront jusqu’à la fin de ta scolarité si tu comptes faire des maths ou de la physique ! Tu vas voir, ça peut paraître flou au début (moi-même j’avais du mal) mais en vrai ça va et c’est même plutôt pratique. </p>

     <h3> Avant tout, qu’est-ce qu’une translation ? </h3>

     <p class="Def Special"> <strong> Définition 1 : </strong> Une translation est une transformation géométrique, un déplacement de points. C’est ce qui correspond à l’idée de glissement "tout droit", sans rotation ni rien. </p>

     <p> La figure rouge correspond à la figure bleue mais qui a ‘glissé’ vers la droite. On dit que la figure bleue a été translaté. </p>

     <img class = "ImgLine" src="Cours_Images/Seconde/Chap9/Exemple_Translation.png" alt="Forme bleue qui se fait translater sous forme rouge" width="300px">

     <p>Pour les vecteurs c’est pareil. Un vecteur correspond juste à la translation d’un point vers un autre !</p>

     <p class="Def Special"> <strong> Définition 2 : </strong> Un vecteur est un objet mathématique représentant la translation d’un point vers un autre. On le représente par une flèche qui va du premier point au deuxième point.
      Si A est le premier point et B le deuxième. On note le vecteur `vec(AB)`.
    </p>

    <p> Ici on voit le résultat de la translation de A vers B. On la représente par le vecteur `vec(AB)` dessiné à droite. </p>

    <img class = "ImgLine" src="Cours_Images/Seconde/Chap9/Exemple_VecteurAB.jpg" alt="Simplement un vecteur allant de A à B" width="200px">

    <p class="Def Special"> <strong> Définition 3 : </strong> Un vecteur est défini par 3 caractéristiques qui lui sont propres :
      <br/>
      - Sa direction <br/>
      - Son sens <br/>
      - Sa norme <br/>
    Deux vecteurs seront donc égaux s’ils ont la même norme, la même direction et le même sens ! </p>

    <p class="Def Special"> <strong> Définition 4 : </strong> La norme correspond à la longueur du vecteur, c’est-à-dire la distance qui sépare A et B. On la note `norm(vec(AB))`. On a bien sûr : `norm(vec(AB)) = AB`. </p>

    <p class="Remarque Special"> <strong> Remarque : </strong> <span class = "Warning"> &#9888; Attention </span>, Il ne faut pas confondre la direction et le sens d’un vecteur. </p>

    <p>En fait, dans le langage courant, on utilise le mot « direction » pour parler du « sens » et c’est un problème. La direction c’est uniquement la droite sur laquelle repose le « chemin » qu’a parcouru ton point.  Le sens ça définit d’où à où ton point va. Ce sera plus clair avec des exemples !</p>

    <p> <br/> <span class = "Exemple"> Exemple 1</span> : 
      Si tu vas de Paris à Lyon en avion (ce que je te déconseille de faire, ça pollue beaucoup), la direction de ton trajet serait le chemin Lyon-Paris ou Paris-Lyon, le sens serait de Paris vers Lyon et la norme serait la distance entre Paris et Lyon à vol d’oiseau, soit 490km.
    </p>

    <div class = "ZoneImg">

      <p> <br/> <span class = "Exemple"> Exemple 2</span> : Sur la figure de droite on a représenté un vecteur. Le point A est translaté vers le point B. La direction de ce vecteur est donc la droite (AB). Le sens de ce vecteur est de A vers B. Sa norme est 3cm.
      </p>

      <img src="Cours_Images/Seconde/Chap9/Exemple_Norme.jpg" alt="Un vecteur AB qui a une norme de 3cm." width="230">

    </div>

    <p> <br/> <span class = "Exemple"> Exemple 3</span> : <br/>
      1. Les vecteurs `vec(AB)` et `vec(CD)` ont la même direction mais ils n'ont pas le même sens, ni la même direction. 
    </p>
    <img class = "ImgLine" src="Cours_Images/Seconde/Chap9/Exemple_Sens.jpg" alt="Deux vecteurs qui n'ont pas le même sens.">
    <p> 2. Ici, les vecteurs `vec(AB)` et `vec(CD)` n'ont pas la même direction ni le même sens. Par contre, ils ont la même norme. </p>
    <img class = "ImgLine" src="Cours_Images/Seconde/Chap9/Exemple_Sens2.jpg" alt="Deux vecteurs qui n'ont pas le même sens ni la même direction.">
    <p> 3. Ici, les vecteurs `vec(AB)` et `vec(CD)` ont la même direction, le même sens et la même norme. Ils sont donc égaux !
    </p>
    <img class = "ImgLine" src="Cours_Images/Seconde/Chap9/Exemple_Egalité.jpg" alt="Deux vecteurs qui sont égaux" width="230">

    <p class="Remarque Special"> <strong> Remarque : </strong> Deux vecteurs ne peuvent pas avoir le même sens s’ils n’ont pas la même direction. </p>

    <p>Pour nommer un vecteur, on peut soit : <br/>
      - Utiliser les deux points qui le composent. <br/>
      - Lui donner un nom (souvent `vec(u), vec(v), vec(w)`).
    </p>

    <img src="Cours_Images/Seconde/Chap9/VecteurU.jpg" alt="Un vecteur u" width="230">

    <p> On dit que le point I est le milieu du segment `[AB]` si et seulement si  `vec(AI) = vec(IB)`. </p>

    <img class = "ImgLine" src="Cours_Images/Seconde/Chap9/Vecteur_Milieu.png" alt="Le milieu d'un vecteur AB" width="230">

    <p class="Remarque Special"> <strong> Remarque : </strong> Montrer que `AI = IB` n’est pas suffisant pour montrer que I est le milieu de `[AB]`. Ça montre juste que I est équidistant de A et de B (donc que I appartient à la médiatrice de `[AB]`). </p>

    <div class = "ZoneImg">

      <div>

        <p class = "Prop Special"> <strong> Propriété 1 : </strong> Un quadrilatère (ABCD) est un parallélogramme si est seulement si `vec(AB) = vec(DC)` </p>

        <p class="Remarque Special"> <strong> Remarque : </strong> C'est bien `vec(AB) = vec(DC)` et non `vec(AB) = vec(CD)` </p>

      </div>

      <img src="Cours_Images/Seconde/Chap9/Parallelogramme.png" alt="Un parallélogramme avec ses vecteurs u et v">

    </div>

    <p class = "Prop Special"> <strong> Propriété 2 : </strong> Le vecteur qui fait translater un point sur lui même est égal au vecteur nul : <br/> 
      `vec(A A) = vec(0)` <br/>
      On peut changer le sens d’un vecteur en le multipliant par `-1`: <br/>
      `-1 * vec(AB) = - vec(AB) = vec(BA)`. <br/>
    On dit alors que les vecteurs `vec(AB)` et `vec(BA)` sont opposés. </p>

    <h2> Opérations sur les vecteurs </h2>

    <p class = "Intro"> Comme pour tous les objets mathématiques, on peut faire des opérations opération sur les vecteurs. On va en étudier 2, la somme et la multiplication par un scalaire (un nombre réel). </p>

    <h3>La somme de deux vecteurs</h3>

    <p>On obtient la somme de deux vecteurs en mettant un vecteur au bout du deuxième et en reliant le premier et le dernier point. Hyper facile !</p>

    <img src="Cours_Images/Seconde/Chap9/Relation_Chasles.jpg" alt="Trois vecteurs qui montrent la relation de Chasles" >

    <p>C’est ce qu’on appelle la Relation de Chasles. <br/>
    C’est une relation fondamentale qu’il faut connaitre absolument !</p>

    <p class = "Prop Special"> <strong> Propriété 3 : </strong> Pour tous les points A, B, C, on a la relation : `vec(AC) = vec(AB) + vec(BC)`. </p>

    <p>(En gros, tu peux séparer un vecteur en ajoutant un point au milieu et en faisant la somme) <br/>
      En mettant les points A, B, C, on s’en rend bien compte !
    </p>

    <img src="Cours_Images/Seconde/Chap9/Relation_Chasles2.jpg" alt="Trois vecteurs qui montrent la relation de Chasles mais cette fois avec des lettres" width="300px">

    <p class = "Prop Special"> <strong> Propriété 4 : </strong> Si ABCD est un parallélogramme alors `vec(AC) = vec(AB) + vec(AD)` </p>

    <img class = "ImgLine" src = "Cours_Images/Seconde/Chap9/Parallelogramme2.png" alt = "parallélogramme avec la propriété" width="400px" />

    <h3>Différence de deux vecteurs</h3>

    <p>J’espère que tu sais déjà que soustraire des nombres réels, c’est tout simplement les additionner un prenant l’opposé du deuxième : `6` `– 3 = 6 + (-3)`. <br/>
    Pour les vecteurs, c’est exactement la même chose ! On a bien : `vec(u) - vec(v) = vec(u) + (-vec(v))` </p>

    <img src = "Cours_Images/Seconde/Chap9/Vecteurs_Soustraction.jpg" alt = "Soustraction de deux vecteurs qui forment un autre vecteur" width="700px" />

    <h3>Produit d’un vecteur par un nombre réel λ</h3>

    <p>Un vecteur peut être multiplié par un nombre réel. Après cette opération, on peut : <br/>
      -Augmenter la norme d’un vecteur si `|λ| > 1` <br/> 
      -Diminuer la norme d’un vecteur si `|λ|<1` <br/>
      -Changer le sens d’un vecteur  `λ < 0`
    </p>

    <div class = "ZoneImg">

      <div>

        <p> <br/> <span class = "Exemple"> Exemples </span> : <br/>
          Multiplier un vecteur -6 c’est multiplier sa norme par 6 et changer son sens. <br/>
          Multiplier un vecteur par 0.5 c’est diviser sa norme par 2 sans changer son sens. <br/> 
          Multiplier un vecteur par 1 c’est comme si on n’avait rien fait. <br/>
        </p>

        <p class = "Remarque Special"> <strong> Remarque :</strong> On ne peut pas changer la direction d’un vecteur en le multipliant par un scalaire. </p>

      </div>

      <img src = "Cours_Images/Seconde/Chap9/3Vecteurs.jpg" alt = "3 exemples de vecteurs" width="400px" />

    </div>

  </article>

</div>

<script src = "js/Page_Cours.js"> </script>

</body>

<?php 
include'html/Footer.html';
?>

</html>