const navMenu = document.getElementById("nav-menu"),
  navToggle = document.getElementById("nav-toggle");
navClose = document.getElementById("nav-close");
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
  });
}

if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
  });
} else {
  console.error("L'élément nav-close n'existe pas.");
}

/*==================== RETIRER LE MENU MOBILE ====================*/
const navLink = document.querySelectorAll(".nav__link");

function linkAction() {
  const navMenu = document.getElementById("nav-menu");
  // Lorsque nous cliquons sur chaque nav__link, nous retirons la classe show-menu
  navMenu.classList.remove("show-menu");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));

/*======================= ACCORD DES COMPÉTENCES ======================*/

const skillsContent = document.getElementsByClassName("skills__content"),
  skillsHeader = document.querySelectorAll(".skills__header");

function toggleSkills() {
  let itemClass = this.parentNode.className;

  for (i = 0; i < skillsContent.length; i++) {
    skillsContent[i].className = "skills__content skills__close";
  }
  if (itemClass === "skills__content skills__close") {
    this.parentNode.className = "skills__content skills__open";
  }
}

skillsHeader.forEach((el) => {
  el.addEventListener("click", toggleSkills);
});

/*============== Qualifications des compétences ===============*/

/*const tabs = document.querySelectorAll('[data-target]'),
      tabContents = document.querySelectorAll('[data-content]')
tabs.forEach(tab =>{
    tab.addEventListener('click', () =>{
        const target = document.querySelector(tab.dataset.target)
        tabContents.forEach(tabContent =>{
            tabContent.classList.remove('qualification__active')
        })
        target.classList.add('qualification__active')
        tab.forEach(tab =>{
            tab.classList.remove('qualification__active')
        })
        tab.classList.add('qualification__active')
    })
})      
*/

/*======================= Modal des services ===================*/
const modalViews = document.querySelectorAll(".services__modal"),
  modalBtns = document.querySelectorAll(".services__button"),
  modalCloses = document.querySelectorAll(".services__modal-close");

let modal = function (modalClick) {
  modalViews[modalClick].classList.add("active-modal");
};

modalBtns.forEach((modalBtn, i) => {
  modalBtn.addEventListener("click", () => {
    modal(i);
  });
});

modalCloses.forEach((modalClose) => {
  modalClose.addEventListener("click", () => {
    modalViews.forEach((modalView) => {
      modalView.classList.remove("active-modal");
    });
  });
});

/*======================= Swiper du portfolio ===================*/
var swiper = new Swiper(".portfolio__container", {
  cssMode: true,
  loop: true,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

/*==================== LIEN ACTIF DES SECTIONS DÉFILEMENT ====================*/
const sections = document.querySelectorAll("section[id]");

function scrollActive() {
  const scrollY = window.pageYOffset;

  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.add("active-link");
    } else {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.remove("active-link");
    }
  });
}
window.addEventListener("scroll", scrollActive);

/*==================== CHANGER L'EN-TÊTE DE FOND ====================*/
function scrollHeader() {
  const nav = document.getElementById("header");
  // Lorsque le défilement est supérieur à 200 hauteurs de viewport, ajoutez la classe scroll-header à la balise d'en-tête
  if (this.scrollY >= 80) nav.classList.add("scroll-header");
  else nav.classList.remove("scroll-header");
}
window.addEventListener("scroll", scrollHeader);

/*==================== MONTRER LE DÉFILEMENT ====================*/
function scrollUp() {
  const scrollUp = document.getElementById("scroll-up");
  // Lorsque le défilement est supérieur à 560 hauteurs de viewport, ajoutez la classe show-scroll à la balise a avec la classe scroll-top
  if (this.scrollY >= 560) scrollUp.classList.add("show-scroll");
  else scrollUp.classList.remove("show-scroll");
}
window.addEventListener("scroll", scrollUp);

/*==================== THÈME SOMBRE CLAIR ====================*/
const themeButton = document.getElementById("theme-button");
const darkTheme = "dark-theme"; // Si vous avez des couleurs spécifiques pour le thème sombre, changez-les ici
const iconTheme = "uil-sun";

// Sujet précédemment sélectionné (si l'utilisateur a sélectionné)
const selectedTheme = localStorage.getItem("selected-theme");
const selectedIcon = localStorage.getItem("selected-icon");

// Nous obtenons le thème actuel que l'interface a en validant la classe dark-theme
const getCurrentTheme = () =>
  document.body.classList.contains(darkTheme) ? "dark" : "light";
const getCurrentIcon = () =>
  themeButton.classList.contains(iconTheme) ? "uil-moon" : "uil-sun";

// Appliquer le thème sombre par défaut
if (!selectedTheme) {
  document.body.classList.add(darkTheme); // Ajoute la classe du thème sombre
  themeButton.classList.add(iconTheme); // Ajoute l'icône du thème sombre
  localStorage.setItem("selected-theme", "dark"); // Enregistre le thème sombre dans le stockage local
  localStorage.setItem("selected-icon", iconTheme); // Enregistre l'icône du thème sombre dans le stockage local
} else {
  // Si un thème a été précédemment sélectionné, appliquez-le
  document.body.classList[selectedTheme === "dark" ? "add" : "remove"](darkTheme);
  themeButton.classList[selectedIcon === "uil-sun" ? "add" : "remove"](iconTheme);
}

// Ajout d'une vérification pour s'assurer que l'icône est correctement définie
if (selectedTheme === "dark" && selectedIcon !== iconTheme) {
  themeButton.classList.add(iconTheme); // Assurez-vous que l'icône est correcte
} else if (selectedTheme === "light" && selectedIcon === iconTheme) {
  themeButton.classList.remove(iconTheme); // Assurez-vous que l'icône est correcte
}

// Activer / désactiver le thème manuellement avec le bouton
themeButton.addEventListener("click", () => {
  // Ajouter ou retirer le thème sombre / icône
  document.body.classList.toggle(darkTheme);
  themeButton.classList.toggle(iconTheme);
  // Nous sauvegardons le thème et l'icône actuelle que l'utilisateur a choisie
  localStorage.setItem("selected-theme", getCurrentTheme());
  localStorage.setItem("selected-icon", getCurrentIcon());
});
