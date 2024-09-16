document.addEventListener("DOMContentLoaded", function () {
  const hamburgerMenuIcon = document.querySelector(".menu-hamburger");
  const crossIcon = document.querySelector("#menu-close");
  const menuItems = document.querySelector("#menu-items-mobile");

  // Función para abrir o cerrar el menú
  function toggleMenu() {
    if (menuItems) {
      menuItems.classList.toggle("d-none");
      menuItems.classList.toggle("d-block");

      hamburgerMenuIcon.classList.toggle("d-block");
      hamburgerMenuIcon.classList.toggle("d-none");

      crossIcon.classList.toggle("d-none");
      crossIcon.classList.toggle("d-block");
    }
  }

  if (hamburgerMenuIcon) {
    hamburgerMenuIcon.addEventListener("click", toggleMenu);
    crossIcon.addEventListener("click", toggleMenu);
  }

  // Cierra el menú si se hace clic fuera de él
  document.addEventListener("click", function (event) {
    if (
      menuItems &&
      !menuItems.contains(event.target) &&
      !hamburgerMenuIcon.contains(event.target)
    ) {
      // Cierra el menú si está abierto
      if (!menuItems.classList.contains("d-none")) {
        toggleMenu();
      }
    }
  });

  // Cierra el menú cuando se hace clic en un elemento <li>
  if (menuItems) {
    const menuLinks = menuItems.querySelectorAll("li"); // Selecciona todos los <li> dentro del menú
    menuLinks.forEach(function (link) {
      link.addEventListener("click", function () {
        // Cierra el menú solo si está abierto
        if (!menuItems.classList.contains("d-none")) {
          toggleMenu();
        }
      });
    });
  }

  // Selecciona todos los enlaces del navbar
  const navLinks = document.querySelectorAll(".nav > li");
  // Añade un event listener a cada enlace
  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      // Elimina la clase "active" de todos los enlaces
      navLinks.forEach((link) => link.classList.remove("active"));
      // Añade la clase "active" al enlace clicado
      link.classList.add("active");
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Selecciona el enlace del logo
  const logoLink = document.querySelector(".custom-logo-link");

  if (logoLink) {
    logoLink.addEventListener("click", function (event) {
      event.preventDefault(); // Previene el comportamiento por defecto del enlace

      // Desplazar suavemente al hero
      document
        .querySelector("#landing-page-section")
        .scrollIntoView({ behavior: "smooth" });
    });
  }
});
