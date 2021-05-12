const Exo1_Enonce = document.getElementById("Exo1_Enonce");
const Refresh_Exo1 = document.getElementById("Exo1_Refresh");
const ConfirmExo1 = document.getElementById("SendvalueExo1");
const RepExo1 = document.getElementById("Exo1_Rep");
const Exo1_Unit = document.getElementById("Exo1_unite");

function getRandomInt(max) // fonction qui donne un int random
{
	return Math.floor(Math.random() * Math.floor(max));
}


function Exo1()
{
	document.Exo1form.RepExo1.value = "";
	document.getElementById("Exo1form").style.visibility = 'visible';
	document.getElementById("Exo1_Rep").style.visibility = 'visible';
	RepExo1.innerHTML = "Hmm hmm bonne question... &#9757;";
	Refresh_Exo1.innerHTML = ("REFRESH &#10226;");

	const ChoixExo = getRandomInt(2); // Deviner pourcentage ou bien retrouver Quantité ?
	if (ChoixExo == 0)
	{
		const Qa = getRandomInt(30) + 1;
		const Qb = getRandomInt(20) + 31;
		Exo1_Enonce.innerHTML = "Quelle est la proportion en pourcentage de " + Qa + " élèves dans une classe de " + Qb + " élèves ?";
		Exo1_Unit.innerHTML = "%";
		ConfirmExo1.addEventListener("click", function() 
		{
			let value = document.Exo1form.RepExo1.value;
			let rep = 100 * (Qa / Qb);
			if (rep - Math.floor(rep) > 0.5)
			{
				rep = Math.floor(rep) + 1;
			}
			else 
			{
				rep = Math.floor(rep);
			}
			if (value == rep)
			{
				RepExo1.innerHTML = "Bravo ! " + rep + "% est la bonne réponse";
			}
			else 
			{
				RepExo1.innerHTML = "Dommage ! La bonne réponse était : " + rep + "%";
			}
		});
	}
	else 
	{
		const P = getRandomInt(90) + 1;
		const Qb = getRandomInt(90) * 100 + 10;
		Exo1_Enonce.innerHTML = "A quoi correspondent " + P + " % de " + Qb + " € ?"
		Exo1_Unit.innerHTML = "€";
		ConfirmExo1.addEventListener("click", function() 
		{
			let value = document.Exo1form.RepExo1.value;
			let rep = Qb * (P / 100);
			if (rep - Math.floor(rep) > 0.5)
			{
				rep = Math.floor(rep) + 1;
			}
			else 
			{
				rep = Math.floor(rep);
			}
			if (value == rep)
			{
				RepExo1.innerHTML = "Bravo !  " + rep + "€ est la bonne réponse";
			}
			else 
			{
				RepExo1.innerHTML = "Dommage ! La bonne réponse était : " + rep + "€";
			}
		});
	}
}

Refresh_Exo1.onclick = Exo1;