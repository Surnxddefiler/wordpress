
let menuBtn = document.querySelector('.menu-btn');
let header__menu = document.querySelector('.menu');
menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	header__menu.classList.toggle('active');
})