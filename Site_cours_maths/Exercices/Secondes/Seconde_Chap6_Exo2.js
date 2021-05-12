const Exo2_Enonce = document.getElementById("Exo2_Enonce");
const Refresh_Exo2 = document.getElementById("Exo2_Refresh");
const ConfirmExo2 = document.getElementById("SendvalueExo2");
const RepExo2 = document.getElementById("Exo2_Rep");

function getRandomInt(max) // fonction qui donne un int random
{
	return Math.floor(Math.random() * Math.floor(max));
}

function Exo2()
{
	document.Exo2form.RepExo2.value = "";
	document.getElementById("Exo2form").style.visibility = 'visible';
    document.getElementById("Exo2_Rep").style.visibility = 'visible';
    RepExo2.innerHTML = "Hmm hmm bonne question... &#9757;";
	Refresh_Exo2.innerHTML = ("REFRESH &#10226;");

	const ChoixExo = getRandomInt(2); // Deviner coef ou taux ?
	let Qi = getRandomInt(500) + 1000;
	let coef = (getRandomInt(200) + 1) / 100;

	let Qf = Math.floor(Qi * coef);
	Exo2_Enonce.innerHTML = "Un village est peuplé de " + Qi + " habitants en 2019. <br/>Un an plus tard, le village est peuplé de " + Qf + " habitants. <br/>";
	if (ChoixExo == 0) // coef
	{
		Exo2_Enonce.insertAdjacentHTML("beforeend", "Quel est ici le coefficient multiplicateur ? ");
	}
	else // taux
	{
		Exo2_Enonce.insertAdjacentHTML("beforeend", "Quel est ici le taux d'évolution ? ");

	}
	ConfirmExo2.addEventListener("click", function() 
    	{
			if (ChoixExo == 0)
			{
				if (Exo2form.RepExo2.value == coef * 100)
				{
					RepExo2.innerHTML = "Bravo ! Le coefficient était bien " + coef * 100 + "%";
				}
				else 
				{
					RepExo2.innerHTML = "Dommage ! Le coefficient était " + coef * 100 + "%";
				}
			}
			else 
			{
				let taux = (coef - 1) * 100;
				if (taux - Math.floor(taux) > 0.5)
				{
					taux = Math.floor(taux) + 1;
				}
				else 
				{
					taux = Math.floor(taux);
				}
				if (Exo2form.RepExo2.value == taux)
				{
					RepExo2.innerHTML = "Bravo ! Le taux était bien de " + taux + "%";
				}
				else 
				{
					RepExo2.innerHTML = "Dommage ! Le taux était de " + taux + "%";
				} 
			}
		});
}

Refresh_Exo2.onclick = Exo2;