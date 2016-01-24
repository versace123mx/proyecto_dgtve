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
	document.form.nom.focus();
}



//******************************************************************
function validar() {
		//alert(document.form.nombres.value);
		var f = document.form;
	
		//************************
		//Validar Nombre
		
		if (f.nom.value == 0){
			alert("Por favor ingrese su nombre.");
			f.nom.value = "";
			f.nom.focus();
			return false;
		}
	
		
	
		if (valida_cadena(f.nom.value) == false){
			alert("Ingresar solo letras para el nombre.");
			f.nom.value = "";
			f.nom.focus();
			return false;
		}
		
		
		if (f.nom.value.length  > 30){
			alert("Por favor ingrese menos de 31 caracteres para el Nombre.");
			f.nom.value = "";
			f.nom.focus();
			return false;
		}
		
		//************************
		//Validar Apellido Paterno20
		
		if (f.appaterno.value == 0){
			alert("Por favor ingrese su Apellido Paterno.");
			f.appaterno.value = "";
			f.appaterno.focus();
			return false;
		}
	
		
	
		if (valida_cadena(f.appaterno.value) == false){
			alert("Ingresar solo letras para el Apellido.");
			f.appaterno.value = "";
			f.appaterno.focus();
			return false;
		}
		
		
		if (f.appaterno.value.length  > 20){
			alert("Por favor ingrese menos de 21 caracteres para el Apellido.");
			f.appaterno.value = "";
			f.appaterno.focus();
			return false;
		}
		
		//************************
		//Validar Apellido Materno20
		
		if (f.apmaterno.value == 0){
			alert("Por favor ingrese su Apellido Materno.");
			f.apmaterno.value = "";
			f.apmaterno.focus();
			return false;
		}
	
		
	
		if (valida_cadena(f.apmaterno.value) == false){
			alert("Ingresar solo letras para el Apellido.");
			f.apmaterno.value = "";
			f.apmaterno.focus();
			return false;
		}
		
		
		if (f.apmaterno.value.length  > 20){
			alert("Por favor ingrese menos de 21 caracteres para el Apellido.");
			f.apmaterno.value = "";
			f.apmaterno.focus();
			return false;
		}
		
		//************************
		//Validar Area20
		
		if (f.area.value == 0){
			alert("Por favor ingrese su area.");
			f.area.value = "";
			f.area.focus();
			return false;
		}
	
		
	
		if (valida_cadena(f.area.value) == false){
			alert("Ingresar solo letras para el area.");
			f.area.value = "";
			f.area.focus();
			return false;
		}
		
		
		if (f.area.value.length  > 20){
			alert("Por favor ingrese menos de 21 caracteres para el Area.");
			f.area.value = "";
			f.area.focus();
			return false;
		}
		
		
		//************************
		//Validar Modelo10
		
		if (f.modelo.value == 0){
			alert("Por favor ingrese el Modelo del Telefono.");
			f.modelo.value = "";
			f.modelo.focus();
			return false;
		}
					
		if (f.modelo.value.length  > 6){
			alert("Por favor ingrese menos de 7 caracteres para el Modelo Telefonico.");
			f.modelo.value = "";
			f.modelo.focus();
			return false;
		}
		
		//************************
		//Validar Inventario20
		
		if (f.inventario.value == 0){
			alert("Por favor ingrese el Numero del Inventario.");
			f.inventario.value = "";
			f.inventario.focus();
			return false;
		}
			
		if (f.inventario.value.length  > 7){
			alert("Por favor ingrese menos de 8 caracteres para el # de inventario.");
			f.inventario.value = "";
			f.inventario.focus();
			return false;
		}
		
		//************************
		//Validar Serie20
		
		if (f.serie.value == 0){
			alert("Por favor ingrese # de serie del Telefono.");
			f.serie.value = "";
			f.serie.focus();
			return false;
		}
	
		if (f.serie.value.length  > 21){
			alert("Por favor ingrese menos de 22 caracteres para el # de Serie del Telefono.");
			f.serie.value = "";
			f.serie.focus();
			return false;
		}
		
		//************************
		//Validar IP Telefono3
		
		if (f.iptel.value == 0){
			alert("Por favor ingrese ip del Telefono.");
			f.iptel.value = "";
			f.iptel.focus();
			return false;
		}
		
		
		if (f.iptel.value > 254){
			alert("Por favor ingrese un numero de ip valido ( en un rango de 1 a 255 ).");
			f.iptel.value = "";
			f.iptel.focus();
			return false;
		}
	
		
			
		if( valida_numero(f.iptel.value) == false){
			alert("Por favor ingrese solo numeros para la IP del Telefono.");
			f.iptel.value = "";
			f.iptel.focus();
			return false;
		}
	
		
		if (f.iptel.value.length  > 3){
			alert("Por favor ingrese menos de 4 caracteres para el Nombre.");
			f.iptel.value = "";
			f.iptel.focus();
			return false;
		}
		
			
		//************************
		//Validar MAC12
		
		if (f.mac.value == 0){
			alert("Por favor ingrese la MAC del Telefono.");
			f.mac.value = "";
			f.mac.focus();
			return false;
		}
	
		
		if (f.mac.value.length  < 12){
			alert("Por favor ingrese 12 caracteres para la MAC del Telefono.");
			f.mac.value = "";
			f.mac.focus();
			return false;
		}

		
		if (f.mac.value.length  > 12){
			alert("Por favor ingrese 12 caracteres para la MAC del Telefono.");
			f.mac.value = "";
			f.mac.focus();
			return false;
		}
		
		//************************
		//Validar EXT6
		
		if (f.ext.value == 0){
			alert("Por favor ingrese su Extención.");
			f.ext.value = "";
			f.ext.focus();
			return false;
		}
	
		if( valida_numero(f.ext.value) == false){
			alert("Por favor ingrese solo numeros para la extención de Telefono");
			f.ext.value = "";
			f.ext.focus();
			return false;
		}		
		
		if (f.ext.value.length  > 6){
			alert("Por favor ingrese menos de 7 caracteres para la Extención Telefonica.");
			f.ext.value = "";
			f.ext.focus();
			return false;
		}
		
		//************************
		//Validar Core1
		
		if (f.core.value == 0){
			alert("Por favor ingrese el Core del Telefono.");
			f.core.value = "";
			f.core.focus();
			return false;
		}
	
		if( valida_numero(f.core.value) == false){
			alert("Por favor ingrese solo numeros para el Core del Telefono");
			f.core.value = "";
			f.core.focus();
			return false;
		}		
		
		if (f.core.value.length  > 1){
			alert("Por favor ingrese solo 1 caracteres para el Core Telefonica.");
			f.core.value = "";
			f.core.focus();
			return false;
		}
		
		
		//************************
		//Validar Clan5
		
		if (f.clan.value == 0){
			alert("Por favor ingrese la CLAN del Telefono.");
			f.clan.value = "";
			f.clan.focus();
			return false;
		}
	
		if( valida_numero(f.clan.value) == false){
			alert("Por favor ingrese solo numeros para la CLAN del  Telefono");
			f.clan.value = "";
			f.clan.focus();
			return false;
		}

		if (f.clan.value.length  > 5){
			alert("Por favor ingrese menos de 6 caracteres para la Clan Telefonica.");
			f.clan.value = "";
			f.clan.focus();
			return false;
		}
		
		//************************
		//Validar Vlan2
		
		if (f.vlan.value == 0){
			alert("Por favor ingrese la VLAN del Telefono.");
			f.vlan.value = "";
			f.vlan.focus();
			return false;
		}
		
		if( valida_numero(f.vlan.value) == false){
			alert("Por favor ingrese solo numeros para la VLAN del Telefono.");
			f.vlan.value = "";
			f.vlan.focus();
			return false;
		}	
		
		if (f.vlan.value.length  > 2){
			alert("Por favor ingrese menos de 3 caracteres para la Vlan Telefonica.");
			f.vlan.value = "";
			f.vlan.focus();
			return false;
		}
		
		//************************
		//Validar Compañia20
		
		if (f.compania.value == 0){
			alert("Por favor ingrese la Compañia fabricante del Telefono.");
			f.compania.value = "";
			f.compania.focus();
			return false;
		}
	
		
	
		if (valida_cadena(f.compania.value) == false){
			alert("Ingresar solo letras para el nombre de la Compañia del Telefono.");
			f.compania.value = "";
			f.compania.focus();
			return false;
		}
		
		
		if (f.compania.value.length  > 20){
			alert("Por favor ingrese menos de 21 caracteres para el Nombre del Fabricante del Telefono.");
			f.compania.value = "";
			f.compania.focus();
			return false;
		}
		

		//************************
		//Validar Foto40

		
		
		//************************
		document.form.submit();
}