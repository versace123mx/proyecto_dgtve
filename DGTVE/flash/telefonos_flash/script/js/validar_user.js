//Desarrollado via versace123mx@gmail.com
//******************************************************************
//Valida Correo
function valida_correo(correo) {
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }
//******************************************************************
//Valida numeros

function valida_numero(numero){
	if (!/^([0-9])*$/.test(numero)){
		return false;
	}else{
		return true;
	}
}


//******************************************************************
//funcion para validar cadenas de solo letras
function valida_cadena(texto){
	var RegExPattern = "[1-9]";
	if (texto.match(RegExPattern)){
		return false;
	}else{
		return true;
	}
}


//******************************************************************
//Limpiar formulario
function limpiar(){
	document.form.reset();
	document.form.login.focus();
}


//******************************************************************
function validar() {
		//alert(document.form.nombres.value);
		var f = document.form;
	
		//************************
		//Validar Nombre
		
		if (f.login.value == 0){
			alert("Por favor ingrese un nombre de usuario.");
			f.login.value = "";
			f.login.focus();
			return false;
		}
	
		
		if (f.login.value.length  < 4){
			alert("Por favor ingrese mas de 3 caracteres para el Nombre de usuario.");
			f.login.value = "";
			f.login.focus();
			return false;
		}		
		
		if (f.login.value.length  > 15){
			alert("Por favor ingrese menos de 16 caracteres para el Nombre de usuario.");
			f.login.value = "";
			f.login.focus();
			return false;
		}
		
		
		//************************
		//Validar Pass
		
		if (f.pass.value == 0){
			alert("Por favor ingrese un password para el usuario.");
			f.pass.value = "";
			f.pass.focus();
			return false;
		}
	
		if (f.pass.value.length  < 5){
			alert("Por favor ingrese almenos 5 caracteres para el Password de usuario.");
			f.pass.value = "";
			f.pass.focus();
			return false;
		}		
		
		if (f.pass.value.length  > 10){
			alert("Por favor ingrese menos de 11 caracteres para el Password de usuario.");
			f.pass.value = "";
			f.pass.focus();
			return false;
		}
			
			
		//************************
		//Validar Pass2	
		
		if (f.pass2.value == 0){
			alert("Por favor confirme nuevamente el password para el usuario.");
			f.pass2.value = "";
			f.pass2.focus();
			return false;
		}
	
		if (f.pass2.value.length  < 5){
			alert("Por favor ingrese almenos 5 caracteres para el Password.");
			f.pass2.value = "";
			f.pass2.focus();
			return false;
		}		
		
		if (f.pass2.value.length  > 10){
			alert("Por favor ingrese menos de 11 caracteres para el Password.");
			f.pass2.value = "";
			f.pass2.focus();
			return false;
		}
		
		if (f.pass2.value != f.pass.value){
			alert("El Password no coincide, intentelo nuevamente.");
			f.pass2.value = "";
			f.pass2.focus();
			return false;
		}
		
		//************************
		document.form.submit();
}