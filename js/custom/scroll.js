'use strict'

const header = document.querySelector('#mainHeader')

function addHeaderColor(){
	if(window.scrollY >= 50){
		header.classList.add('header-color')
	}else{
		header.classList.remove('header-color')
	}
}

window.addEventListener('scroll', addHeaderColor)
