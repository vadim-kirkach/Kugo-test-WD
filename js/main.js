
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

const forms = document.querySelectorAll("form"); // собираем все формы
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation 
  .addField("[name=useremail]", [
    {
      rule: 'required',
      errorMessage: "Укажите email",
    },
    {
      rule: 'maxLength',
      value: 30,
      errorMessage: "Максимально 30 символов",
    },
  ])
  .addField("[name=userphone]", [
    {
      rule: 'required',
      errorMessage: "Укажите телефон",
    },
    {
      rule: 'required',
    },
  ])
  .addField("[name=agree]", [
    {
      rule: 'required',
      errorMessage: "Укажите согласие",
    },
    {
      rule: 'required',
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target; 
    const formData = new FormData(thisForm);
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
       method: thisForm.getAttribute("method"),
       body: formData,
    }).then((response) => {
     if (response.ok) {
      thisForm.reset();
      currentModal.classList.remove("is-open");
      alertModal.classList.add("is-open");
      currentModal = alertModal;
      modalDialog = currentModal.querySelector(".modal-dialog");
    /* отслеживаем клик по окну и пустым областям */
    currentModal.addEventListener("click", (event) => {
      /* если клик в пустую область */
      if (!event.composedPath().includes(modalDialog)) {
        /* закрываем окно */
        currentModal.classList.remove("is-open");
      }
    });
     } else {
      alert("Ошибка. Текст ошибки: ".response.statusText);
     }
    });
    };
    ajaxSend(formData);
  });
});