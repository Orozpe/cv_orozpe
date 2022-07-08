const btnSwitch = document.querySelector('#switch');

btnSwitch.addEventListener('click', () => {
	document.body.classList.toggle('dark');
	btnSwitch.classList.toggle('active');
	let element = document.getElementById("page-top");
	if (element.classList.contains("dark")){
		// alert("Activado");
		// document.getElementById('dark_mode').style.visibility = "visible";
		document.getElementById('dark_mode').classList.add('dark_mode');
	}
	else{
		// alert("Desactivado");
		// document.getElementById('dark_mode').style.visibility = "hidden";
		document.getElementById('dark_mode').classList.add('light_mode');

	}	
}
);
