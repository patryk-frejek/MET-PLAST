window.onload = init;
const toggle = document.querySelector(".btn-menu");
const navbar = document.querySelector(".navigation__list");
const header = document.querySelector(".header");
function init() {
	toggle.onclick = () => {
		navbar.classList.toggle("active");
		header.classList.toggle("active");
	};
}

window.onscroll = checkBox;
checkBox();

function checkBox() {
	const box = document.getElementsByClassName("box");
	const activationPoint = (window.innerHeight / 5) * 4;
	console.log(top);
	for (let i = 0; i < box.length; i++) {
		var top = box[i].getBoundingClientRect().top;
		if (top < activationPoint) {
			box[i].classList.remove("box");
		}
	}
}
