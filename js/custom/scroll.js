'use strict'

const header = document.querySelector('#mainHeader')
const logoContainer = document.querySelector('#logoContainer')
const logoText = document.querySelector('#logoText')

function addHeaderColor(){
	if(window.scrollY >= 50){
		header.classList.add('header-color')
		logoContainer.classList.add('logo-onScroll')
		logoText.classList.add('logo-text-onScroll')
	}else{
		header.classList.remove('header-color')
		logoContainer.classList.remove('logo-onScroll')
		logoText.classList.remove('logo-text-onScroll')
	}
}

window.addEventListener('scroll', addHeaderColor)
