/*const modal = document.querySelector(".modal");
const modalToggle = document.querySelectorAll("[data-toggle=modal]");
const modalClose = document.querySelector(".modal-close");
console.log(modalToggle);
modalToggle.forEach((element) => {
  element.addEventListener("click", (event) => {
    event.preventDefault();
    modal.classList.add("is-open");
  });
});
modalClose.addEventListener("click", (event) => {
  event.preventDefault();
  modal.classList.remove("is-open");
});*/

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" || 
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) && modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});

const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const openMenu = (event) => {
  menu.classList.add("is-open");
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow="hidden";
};

const closeMenu = (event) => {
  menu.classList.remove("is-open");
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow="";
};

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
 
});

