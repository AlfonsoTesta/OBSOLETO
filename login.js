let bd_usuarios = new Map();
var ocupado = false;
var logeado= false;
x=0;
function pruebaObj(a,b,c,d){
    let codigo=a;
    let usu = {
        nombre:b,
        email:c,
        fecha:d,
    }
    
    bd_usuarios.set(codigo,usu);
}
pruebaObj('1','b','c','d');
//Funcion Agregegar bd_usuarios al Map
function userObj(){
    let codigo=document.getElementById('contra').value;
    let usu = {
        nombre:document.getElementById('nombre').value,
        email:document.getElementById('mail').value,
        fecha:document.getElementById('cumple').value,
    }
    
    bd_usuarios.set(codigo,usu);
}
//Funciones para abrir y cerrar el LogIn
function openLog(x){
    document.getElementById(x).style.display="flex";
}
function closeLog(x){ 
    document.getElementById(x).style.display="none";
}
function replaceLog(x,y){
    document.getElementById(x).style.display="none";
    document.getElementById(y).style.display="block";

}
function changer(x,y){
    document.getElementById(x).style.display="none";
    document.getElementById(y).style.display="block";

}
function colorChange(){
   
    colador= document.getElementById("portadac").value;
    portada = document.querySelectorAll(".book3d");
    portada[x].style.setProperty('--back',colador);
    portada[x].style.border;
    alert(colador);
    x++;
}


function login(){
    ocupado=false;
    for (const [key,valor] of bd_usuarios.entries()) {
        if (valor.email == document.getElementById('mail').value && key == document.getElementById('contra').value){
          
            ocupado=true;
           
        }
        else  if (valor.name == document.getElementById('nombre').value && key == document.getElementById('contra').value){
          
            ocupado=true;
           
        }

        
       
        
    }
    if(ocupado){
        alert("LogeoExitoso")
        
    }
    else{
        
        alert("Credencial Incorrecta");
    }
}
function register(){
    ocupado=false;
    if (document.getElementById("contra").value == document.getElementById("confi").value){
        for (const [key,valor] of bd_usuarios.entries()) {
            if (valor.email == document.getElementById('mail').value){
                ocupado=true;
            }
          
            
        }
        if(ocupado){
            alert("Email Ocupado");
        }
        else{
            alert("Registro exitoso")
            userObj();
        }
    }
    else{
        alert("Contrase??as diferentes")
    }
    
    
    
}
function restorePassword(x,y,z){
    document.getElementById(x).style.display= "none";
    document.getElementById(y).style.display="none";
    document.getElementById(z).style.display="block";
   
   
} 
function restoreback(){
    replaceLog('recuperar','loginH');
    document.getElementById('log').style.display="block";
}

function checkEmail(){
    ocupado=false;
    for (const [key,valor] of bd_usuarios.entries()) {
        if (valor.email == document.getElementById('recuperaremail').value){
            ocupado=true;
             llave = key;
        }
      
        
    }
    if(ocupado){
        alert('Si el email existe se enviara un mensaje con los pasos de recuperacion');
        alert(llave);
        
        
    }
    else{
        alert('Si el email existe se enviara un mensaje con los pasos de recuperacion');
       
    }
}

// Comprobar que un usuario este en la base de datos
