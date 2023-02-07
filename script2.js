const nav_item = document.querySelectorAll(".navigation__item");
const dropmenu = document.querySelectorAll(".dropmenu");
window.onload = init;
function init() {
	for (let i = 0; i < nav_item.length; i++) {
		nav_item[i].onmouseenter = () => dropmenu[i].classList.add("active");
		dropmenu[i].onmouseenter = () => dropmenu[i].classList.add("active");
		dropmenu[i].onmouseleave = () => {
			setTimeout(() => {
				dropmenu[i].classList.remove("active");
			}, 100);
		};
		nav_item[i].onmouseleave = () =>
			setTimeout(() => {
				dropmenu[i].classList.remove("active");
			}, 100);
	}
}
