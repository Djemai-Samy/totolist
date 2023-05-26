document.querySelector("nav img").addEventListener("click", function () {
	let menu = document.querySelector("nav ul");

	menu.id = menu.id === "closed" ? "open" : "closed";
});
