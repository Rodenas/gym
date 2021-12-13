//funciones js
//valida la edad despues de enviar los datos desde 
//http://planidear.com.ar/a5-g6-gimnasio/form_registro.html
function EresMayoEdad(){
	alert("Eres mayor de edad");
}

function EresMenorEdad(){
	alert("Eres Menor de edad se enviara un correo!!!");
}

//Esta funcion esta en la pagina index.html
//cuando se pasa el mouse por encima del logo en el cuero de la pagina
//esta cambia de tamaño
function CambiarImagen(){
	document.getElementById("logo").style.height="200px"
	document.getElementById("logo").style.width="200px"	
}


//validar nombre y apellido lo hace cuando existe un cambio
//en el formulario registro, si tiene  menos de los caracteres da un aviso, ademas cambia el DOM h4
function validaNombre(){
		if(document.getElementById("txtNombre").value.length <= 2 ){
			document.getElementById ("AvNombre").innerHTML = "ingrese un nombre con al menos 2 caracteres" ;		
			swal ( "ingrese un nombre de minimo 2 caracteres" ) ;
			return false;
		}else{
			document.getElementById ("AvNombre").innerHTML = "ok con el ingreso nombre" ;	
		}
	}
function validaApellido(){
	if(document.getElementById("txtApellido").value.length <= 2){
		document.getElementById ("AvApellido").innerHTML = "ingrese un apellido con al menos 2 caracteres" ;	
		swal ( "ingrese un apellido de minimo 2 caracteres" ) ;
		return false;
	}else{
		document.getElementById ("AvApellido").innerHTML = "ok con el ingreso apellido" ;		
	}
}