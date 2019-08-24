$(document).ready(function(){
	/*Mostrar menu movil*/
	var NavBar=$('.NavBar');
	var body=$('body,html');
	var btnMenu=$('.btn-menu');
	$('.btn-menu').on('click', function(e){
		e.preventDefault();
		if(NavBar.hasClass('NavBar-show')){
			btnMenu.removeClass('zmdi-close').addClass('zmdi-more-vert');
			NavBar.removeClass('NavBar-show');
			body.removeClass('No-Scroll');
		}else{
			btnMenu.removeClass('zmdi-more-vert').addClass('zmdi-close');
			NavBar.addClass('NavBar-show');
			body.addClass('No-Scroll');
		}
	});
	/*Mostrar carrito de compras*/
	$('.btn-shopcart').on('click', function(e){
		e.preventDefault();
		var kart=$('.ShoppingCart');
		if(kart.hasClass('ShoppingCart-show')){
			kart.removeClass('ShoppingCart-show');
		}else{
			kart.addClass('ShoppingCart-show');
		}
		btnMenu.removeClass('zmdi-close').addClass('zmdi-more-vert');
		NavBar.removeClass('NavBar-show');
		body.removeClass('No-Scroll');
	});
	/*Mostrar modal*/
	$('.modal-trigger').leanModal({
		dismissible: false
	});
	/*Mostrar tooltips*/
	$('.tooltipped').tooltip({delay: 50});
});

/*document.addEventListener("DOMContentLoaded",() =>{
	let form = document.getElementById('RegModal');

	form.addEventListener("submit", function(event){
		event.preventDefault();
		subir_archivos(this);
	});
});

//RegModal
function subir_archivos(form){
	let barra_estado = document.getElementById('barra_estado'),
		span =  document.getElementById('spanbar'),
		boton_cancelar = document.getElementById('_cancelar');

	barra_estado.classList.remove('barra_verde','barra_roja');

	let peticion = new XMLHttpRequest();

	peticion.upload.addEventListener("progress",(event)=>{
		let procentaje = Math.round((event.loaded/event.total)*100);
		console.log(procentaje);
		barra_estado.style.width = procentaje+'%';
		span.innerHTML = procentaje+'%';
	});

	peticion.addEventListener("load",()=>{
		barra_estado.classList.add('barra_verde');
		span.innerHTML ="Carga Completa";
	});


	//cancelar

	boton_cancelar.addEventListener("click", () =>{
		peticion.abort();
		barra_estado.classList.remove('barra_verde');
		barra_estado.classList.add('barra_roja');
		span.innerHTML = "Cancelado";
	});
}
*/