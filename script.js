
window.onload = init;
const toggle = document.querySelector(".btn-menu");
const navbar = document.querySelector(".navigation__list");
function init() {

	toggle.onclick = () => {
		navbar.classList.toggle("active");
		console.log("testt");
	};
}


