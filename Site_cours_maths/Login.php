<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name ="viewport" content ="width=device-width, initial-scale = 1.0">     
    <link rel ="stylesheet" href= "style/Body.css" />
    <link rel ="stylesheet" href= "style/Login.css" />
    <title>Mat'Hematips</title>
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
            <!-- page de connexion -->
            <div class="log_wrapper">
                <div class="title-texte">
                    <div class="title login">Connexion</div>
                    <div class="title signup">Inscription</div>
                </div>
                <!-- bloc contenant le form -->
                <div class="form-container">
                    <!-- deux boutons radio pour choisir le mode -->
                    <div class="slide-controls">
                        <input type="radio" name ="slider" id="login" checked>
                        <input type="radio" name ="slider" id="signup">
                        <label for="login" class="slide login">Connexion</label>
                        <label for="signup" class="slide signup">Inscription</label>
                        <div class="slide-tab"></div>
                    </div>
                    <!-- Le vrai form -->
                    <div class="form-inner">
                        <!-- form connexion -->
                        <form method ="post" action="#" class="login">
                            <div class="field">
                                <input type="text" placeholder="Sorry ce service ne marche pas encore" required>
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Mot de passe" required>
                            </div>
                            <div class="pass-link"><a href="#">Mot de passe oublié ?</a></div>
                            <div class="field">
                                <input type="submit" value="Connexion">
                            </div>
                            <div class="signup-link">Pas encore membre ? <a href="#">Inscris toi maintenant</a></div>
                        </form>
                        <!-- form inscription -->
                        <form method ="post" action="#" class="signup">
                            <div class="field">
                                <input type="text" placeholder="Addresse mail" required>
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Mot de passe" required>
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Confirmer Mot de passe" required>
                            </div>
                            <div class="field">
                                <input type="submit" value="Inscription">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </div>

<script src = "js/Login.js"></script>

</body>

<?php 
include'html/Footer.html';
?>

</html>