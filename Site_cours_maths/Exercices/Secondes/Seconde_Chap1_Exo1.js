

const Refresh_Exo = document.getElementById("Exo_Refresh");
const Exo_Enonce = document.getElementById("Exo_Radio_Enonce");
const Exo_Rep = document.getElementById("Exo_Radio_Rep");
const ConfirmExo_Radio = document.getElementById("SendvalueExo_Radio");

    function getRandomInt(max) // fonction qui donne un int random
    {
      return Math.floor(Math.random() * Math.floor(max));
    }

function Exo1()
{
    document.getElementById("Exo_form").style.visibility = 'visible';
    document.getElementById("Exo_Radio_Rep").style.visibility = 'visible';
    document.getElementById("valueN").checked = false;
    document.getElementById("valueZ").checked = false;
    document.getElementById("valueD").checked = false;
    document.getElementById("valueQ").checked = false;
    document.getElementById("valueR").checked = false;

    Exo_Rep.innerHTML = "Hmm hmm bonne question... &#9757;";

    Refresh_Exo.innerHTML = ("REFRESH &#10226;");

    let ensemble = getRandomInt(3);

    let nombre = 0; // le nombre en question

    // a et b au cas où on est dans D ou Q 
    let a = 0;  
    let b = 0;

    if (ensemble == 0) // ensemble = 0 -> N ou Z ou R
    {
        nombre = getRandomInt(20);
        const sign = getRandomInt(2);
        if (sign == 0)
        {
            nombre = -nombre;  // Pour que nombre appartienne à Z sinon R
        }
        // si nombre = 10 ou -11 alors nombre appartient à R
        if (nombre == 10)
        {
            Exo_Enonce.innerHTML = ("Quel est l'ensemble le plus petit contenant Racine de 2 ?" );
        }
        else if (nombre == -11)
        {
            Exo_Enonce.innerHTML = ("Quel est l'ensemble le plus petit contenant &#8508; ?" );
        }
        else
        {
            Exo_Enonce.innerHTML = ("Quel est l'ensemble le plus petit contenant " + nombre + " ?" );
        }
    }

    else // ensemble = 1 ou 2 -> D ou Q
    {
        const sign = getRandomInt(2);
        a = getRandomInt(10) + 1;
        b = getRandomInt(10) + 1;
        if (sign == 0)
        {
            nombre = -a/b;
            Exo_Enonce.innerHTML = ("Quel est l'ensemble le plus petit contenant ` -frac(" + a + ")(" + b + ") ` ?" );
            MathJax.Hub.Queue(["Typeset", MathJax.Hub,Exo_Enonce]);
        }
        else
        {
            nombre = a/b;
            Exo_Enonce.innerHTML = ("Quel est l'ensemble le plus petit contenant ` frac(" + a + ")(" + b + ") ` ?" );
            MathJax.Hub.Queue(["Typeset", MathJax.Hub,Exo_Enonce]);
        }
        
    }


    ConfirmExo_Radio.addEventListener("click", function() 
    {

    // Partie où je vérifie l'ensemble
    let RepCheck = false;
    if (document.getElementById("valueR").checked == true || document.getElementById("valueN").checked == true || document.getElementById("valueD").checked == true || document.getElementById("valueQ").checked == true || document.getElementById("valueZ").checked == true)
    {

    if (nombre - Math.floor(nombre) == 0) // alors entier
    {
        if (nombre == 10 || nombre == -11)
        {
            if (document.getElementById("valueR").checked == false)
            {
                Exo_Rep.innerHTML = ("Dommage ! Ce nombre appartient à &#8477;");
            }
            else
            {
                Exo_Rep.innerHTML = ("Bonne réponse ! Ce nombre appartient bien à &#8477;");
            }
        }
        else if (nombre >= 0)
        {
            if (document.getElementById("valueN").checked == false)
            {
                Exo_Rep.innerHTML = ("Dommage ! " + nombre + " appartient à &#8469;");
            }
            else
            {
                Exo_Rep.innerHTML = ("Bonne réponse ! " + nombre +" appartient bien à &#8469;");
            }
        }
        else 
        {
            if (document.getElementById("valueZ").checked == false)
            {
                Exo_Rep.innerHTML = ("Dommage ! " + nombre + " appartient à &#8484;");
            }
            else
            {
                Exo_Rep.innerHTML = ("Bonne réponse ! " + nombre +" appartient bien à &#8484;");
            }
        }
    }
    else 
    {
        let verification = Math.floor(nombre * 10000000);
        verification = verification / 10000000;
        if (Math.abs(b * verification) != a)
        {
            if (document.getElementById("valueQ").checked == false)
            {
                if (nombre < 0)
                {
                    Exo_Rep.innerHTML = ("Dommage ! `- frac(" + a + ")(" + b + ")` appartient à &#8474;");
                    MathJax.Hub.Queue(["Typeset", MathJax.Hub,Exo_Rep]);
                }
                else 
                {
                    Exo_Rep.innerHTML = ("Dommage ! `frac(" + a + ")(" + b + ")` appartient à &#8474;");
                    MathJax.Hub.Queue(["Typeset", MathJax.Hub,Exo_Rep]);
                }
            }
            else
            {
                if (nombre < 0)
                {
                    Exo_Rep.innerHTML = ("Bonne réponse ! `- frac(" + a + ")(" + b  +")` appartient bien à &#8474;");
                    MathJax.Hub.Queue(["Typeset", MathJax.Hub,Exo_Rep]);
                }
                else 
                {
                    Exo_Rep.innerHTML = ("Bonne réponse ! `frac(" + a + ")(" + b  +")` appartient bien à &#8474;");
                    MathJax.Hub.Queue(["Typeset", MathJax.Hub,Exo_Rep]);
                }
            }
        }
        else 
        {
            if (document.getElementById("valueD").checked == false)
            {
                if (nombre < 0)
                {
                    Exo_Rep.innerHTML = ("Dommage ! `-frac(" + a + ")(" + b + ")` appartient à &#8517;");
                    MathJax.Hub.Queue(["Typeset", MathJax.Hub,Exo_Rep]);
                }
                else 
                {
                    Exo_Rep.innerHTML = ("Dommage ! `frac(" + a + ")(" + b + ")` appartient à &#8517;");
                    MathJax.Hub.Queue(["Typeset", MathJax.Hub,Exo_Rep]);
                }
            }
            else
            {
                if (nombre < 0)
                {
                    Exo_Rep.innerHTML = ("Bonne réponse ! `-frac(" + a + ")(" + b  +")` appartient bien à &#8517;");
                    MathJax.Hub.Queue(["Typeset", MathJax.Hub,Exo_Rep]);
                }
                else 
                {
                    Exo_Rep.innerHTML = ("Bonne réponse ! `frac(" + a + ")(" + b  +")` appartient bien à &#8517;");
                    MathJax.Hub.Queue(["Typeset", MathJax.Hub,Exo_Rep]);
                }
            }
        }
    }
    }
    else 
    {
        Exo_Rep.innerHTML = ("Hmm tu devrais ptet cocher une réponse avant de voir la réponse nan ?");
    }

});
}

Refresh_Exo.onclick = Exo1;
