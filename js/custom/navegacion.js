'use strict'

//Capturamos los elementos

let mainNav = document.getElementById('main-nav')
let toggleMenu = document.getElementById('toggle-menu')

// Programamos las funciones

function prueba(){
	alert('funciona');
}

function mostrarOcultar(){
	mainNav.classList.toggle('mostrar')
}

function ocultarMenu(){
	mainNav.classList.remove('mostrar')
}

//Ejecutamos las funciones

document.addEventListener('click', e => {
	if (e.target !== mainNav && e.target !== toggleMenu) ocultarMenu()
})

toggleMenu.addEventListener('click', mostrarOcultar)
mainNav.addEventListener('mouseleave', prueba, false)

