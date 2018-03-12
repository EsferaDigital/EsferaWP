'use strict'

const mainNav = document.getElementById('main-nav')
const toggleMenu = document.getElementById('toggle-menu')

toggleMenu.addEventListener('click', () => {
	mainNav.classList.toggle('mostrar')
})

