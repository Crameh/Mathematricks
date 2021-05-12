const Exo3_Enonce = document.getElementById("Exo3_Enonce");
const Refresh_Exo3 = document.getElementById("Exo3_Refresh");
const ConfirmExo3 = document.getElementById("SendvalueExo3");
const RepExo3 = document.getElementById("Exo3_Rep");

function getRandomInt(max) // fonction qui donne un int random
{
	return Math.floor(Math.random() * Math.floor(max));
}

function Exo3()
{
	document.Exo3form.RepExo3.value = "";
	document.getElementById("Exo3form").style.visibility = 'visible';
	document.getElementById("Exo3_Rep").style.visibility = 'visible';
	RepExo3.innerHTML = "Hmm hmm bonne question... &#9757;";
	Refresh_Exo3.innerHTML = ("REFRESH &#10226;");

	const ChoixExo = getRandomInt(2);

	const coef = (getRandomInt(200) + 1) / 100;
	let taux = (coef - 1) * 100;

	if (taux - Math.floor(taux) > 0.5)
	{
		taux = Math.floor(taux) + 1;
	}
	else 
	{
		taux = Math.floor(taux);
	}

	const coef2 = (getRandomInt(200) + 1) / 100;
	let taux2 = (coef2 - 1) * 100;

	if (taux2 - Math.floor(taux2) > 0.5)
	{
		taux2 = Math.floor(taux2) + 1;
	}
	else 
	{
		taux2 = Math.floor(taux2);
	}

	if (ChoixExo == 0) // 0 pour exo c récip et 1 pour exo succ
	{
		if (taux < 0)
		{
			Exo3_Enonce.innerHTML = "Un prix diminue de " + -(taux) + "%. <br/> Retrouve moi le taux d'évolution réciproque pour que ce prix retrouve son prix initial ?";
		}
		else 
		{
			Exo3_Enonce.innerHTML = "Un prix augmente de " + taux + "%. <br/> Retrouve moi le taux d'évolution réciproque pour que ce prix retrouve son prix initial ?";
		}
	}
	else 
	{

		if (taux < 0)
		{
			Exo3_Enonce.innerHTML = "Un prix diminue de " + -(taux) + "%. <br/>";
		}
		else 
		{
			Exo3_Enonce.innerHTML = "Un prix augmente de " + taux + "%. <br/>";
		}	
		if (taux2 < 0)
		{
			Exo3_Enonce.insertAdjacentHTML("beforeend","Plus tard, le prix diminue de " + -(taux2) + "%.");
		}
		else 
		{
			Exo3_Enonce.insertAdjacentHTML("beforeend","Plus tard, le prix augmente de " + (taux2) + "%.");
		}	

		Exo3_Enonce.insertAdjacentHTML("beforeend","<br/> Quel est le taux d'évolution global ?");
	}

	ConfirmExo3.addEventListener("click", function() 
	{
		if (ChoixExo == 0)
		{
			let cim = 1 / coef;
			let tauxI = (cim - 1) * 100;

			if (tauxI - Math.floor(tauxI) > 0.5)
			{
				tauxI = Math.floor(tauxI) + 1;
			}
			else 
			{
				tauxI = Math.floor(tauxI);
			}
			if (Exo3form.RepExo3.value == tauxI)
			{
				RepExo3.innerHTML = "Bravo ! Le taux d'évolution inverse était bien " + tauxI + "%";
			}
			else 
			{
				RepExo3.innerHTML = "Dommage ! Le taux d'évolution inverse était de " + tauxI + "%";
			}
		}
		else 
		{
			let coefG = coef * coef2;
			let tauxG = (coefG - 1) * 100;

			if (tauxG - Math.floor(tauxG) > 0.5)
			{
				tauxG = Math.floor(tauxG) + 1;
			}
			else 
			{
				tauxG = Math.floor(tauxG);
			}

			if (Exo3form.RepExo3.value == tauxG)
			{
				RepExo3.innerHTML = "Bravo ! Le taux d'évolution global était bien " + tauxG + "%";
			}
			else 
			{
				RepExo3.innerHTML = "Dommage ! Le taux d'évolution global était de " + tauxG + "%";
			}
		}
	});
}

Refresh_Exo3.onclick = Exo3;