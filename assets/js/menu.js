const menuToggle = document.querySelector(".menu-toggle");
const menu = document.querySelector(".menu");
const menuOverlay = document.querySelector(".menu-overlay");

menuToggle.addEventListener("click", () => {
    menu.classList.toggle("activo");
    menuOverlay.classList.toggle("activo");
    menuToggle.classList.toggle("activo");
});

menuOverlay.addEventListener("click", () => {
    menu.classList.remove("activo");
    menuOverlay.classList.remove("activo");
});