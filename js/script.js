function validateDivision(){
    let Division = document.getElementById("Division").value;
    console.log(Division.length);
    if (Division.length==0 || Division.length==1 ){
        alert("El campo Division debe tener al menos 2 caracteres");
    }else if(Division.length==2){
        document.getElementById("Division").value=Division.toUpperCase();
    }

}
function validateTElFijo(){
    let TelefonoFijo = document.getElementById("TelFijo").value;
    if(TelefonoFijo.length==0 || TelefonoFijo.length<=10){
        alert("El campo Telefono Fijo debe tener al menos 10 caracteres");
    }
}
function validateTelMovil(){
    let TelefonoMovil = document.getElementById("TelCel").value;
    if(TelefonoMovil.length==0 || TelefonoMovil.length<=10){
        alert("El campo Telefono Movil debe tener al menos 10 caracteres");
    }
}
function validateNumberService(){
    let numeroServicio = document.getElementById("NumberService").value;
    console.log(numeroServicio.length)
    if(numeroServicio.length==0 || numeroServicio.length<12 || numeroServicio>12){
        alert("El campo Numero de Servicio debe tener al menos 12 caracteres y no debe contener letras");
    }
}
function validateArea(){
    let Area= document.getElementById("Area").value;
    if(Area.length==0 || Area.length<=16 || Area.length>16){
        alert("El campo Area debe tener al menos 16 caracteres");
    }
}
function validateZona(){
    let Zona = document.getElementById("Zona").value;
    if(Zona.length==0 || Zona.length<=5 || Zona.length>5){
        alert("El campo Zona debe tener al menos 5 caracteres");
    }
}
function validateColonia(){
    let Colonias = document.getElementById("Colonia").value;
    if(Colonias.length==0){
        alert("El campo Colonia es necesario");
    }
}
function validateSolicitudes(){
    let solicitudes= document.getElementById("Solicitudes").value;
    if(solicitudes.length==0 || solicitudes.length<=10 || solicitudes.length>10){
        alert("El campo Solicitudes debe tener al menos 10 caracteres");
    }
}
function validateObservaciones(){
    let observaciones = document.getElementById("Observaciones").value;
    if(observaciones.length==0){
        alert("El campo Observaciones es necesario.");
    }
}
