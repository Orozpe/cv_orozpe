function product_calif(id_producto) {
	let ref = document.querySelector('.referencias');
	let ref2 = document.getElementById('ref2');
	let ref3 = document.getElementById('ref3');
	let cardtoggle = document.querySelector('.toggle');

	if (id_producto == 1){
		/*alert("uno");*/
		ref.classList.toggle('active');	
	}
	else if(id_producto == 2){
		/*alert("dos");*/
		ref2.classList.toggle('active');	
	}
	else if(id_producto == 3){
		/*alert("tres");*/
		ref3.classList.toggle('active');	
	}
	else{

	}
}