
setInterval(function(){ mover() },2000);
		var tiempo = 1;
		
		function mover(){
			if (tiempo == 1) {		
				var x=$("#imgADes");
				x.attr("src", "img/ades.jpg");				
  					
			}
			if (tiempo == 2) {
				var x=$("#imgADes");
				x.attr("src", "img/ades2.jpg");	
			}
			if (tiempo == 3) {
				var x=$("#imgADes");
				x.attr("src", "img/ades3.jpg");		
			}
			if (tiempo == 4) {
				var x=$("#imgADes");
				x.attr("src", "img/ades4.jpg");		
			}
			if (tiempo == 5) {
				var x=$("#imgADes");
				x.attr("src", "img/ades5.jpg");	
			}		
					
		tiempo++;
		if(tiempo==6){
			tiempo=1;
		}
	}
 setInterval(function(){ mover2() },3000);
		var tiempo2 = 1;
		
		function mover2(){
			if (tiempo2 == 1) {		
				var y=$("#imgPc");
  				y.attr("src", "img/pc1.jpg");
			}
			if (tiempo2 == 2) {
				var y=$("#imgPc");
  				y.attr("src", "img/pc2.jpg");
			}
			if (tiempo2 == 3) {
				var y=$("#imgPc");
  				y.attr("src", "img/pc3.jpg");
			}			
					
		tiempo2++;
		if(tiempo2==4){
			tiempo2 = 1;
		}
	}


/*
var Imtech = {};
Imtech.Pager = function() {
	this.productosPorPagina = 12;
	this.paginaActual = 1;
	this.contenedorControladores = '.Cpagination';
	this.contenedorDeProductos = '.espacioProductos';

	this.numPages = function() {
		var numPages = 0;
		if (this.productos != null && this.productosPorPagina != null) {numPages = Math.ceil(this.productos.length / this.productosPorPagina);
		}
		return numPages;
	};

	this.showPage = function(page) {
		this.paginaActual = page;
		var html = '';
		this.productos.slice((page-1) * this.productosPorPagina,
		((page-1)*this.productosPorPagina) + this.productosPorPagina).each(function() {
			html += '<div class="center">' + $(this).html() + '</div>';
			});
		$(this.contenedorDeProductos).html(html);
		renderControls(this.contenedorControladores, this.paginaActual, this.numPages());
		}

	var renderControls = function(container, paginaActual, numPages) {
		var controladores = "<ul class='pagination'>";
		for (var i = 1; i <= numPages; i++) {
			if (i != paginaActual) {
			controladores += '<li><a href="#" onclick="pager.showPage(' + i + '); return false;">' + i + '</a></li> ';
			} else {
			controladores +=  '<li>' + i + ' </li>';
			}
			controladores += "</ul>";
		}
		$(container).html(controladores);
	}
}*/
