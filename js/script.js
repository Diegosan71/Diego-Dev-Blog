document.addEventListener("DOMContentLoaded", function(){

const form = document.getElementById("contact-form");

form.addEventListener("submit", function(e){

let valid = true;

const nombre = document.getElementById("nombre");
const email = document.getElementById("email");
const mensaje = document.getElementById("mensaje");

const errorNombre = document.getElementById("error-nombre");
const errorEmail = document.getElementById("error-email");
const errorMensaje = document.getElementById("error-mensaje");

errorNombre.textContent = "";
errorEmail.textContent = "";
errorMensaje.textContent = "";

nombre.classList.remove("error-input");
email.classList.remove("error-input");
mensaje.classList.remove("error-input");

if(nombre.value.length < 3){
errorNombre.textContent = "El nombre debe tener al menos 3 caracteres";
nombre.classList.add("error-input");
valid = false;
}

if(!email.value.includes("@")){
errorEmail.textContent = "Ingresa un email válido";
email.classList.add("error-input");
valid = false;
}

if(mensaje.value.length < 10){
errorMensaje.textContent = "El mensaje debe tener al menos 10 caracteres";
mensaje.classList.add("error-input");
valid = false;
}

if(!valid){
e.preventDefault();
}

});

});