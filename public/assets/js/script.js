// Get the container element
let navContainer = document.getElementById("list_nav");

// Get all buttons with class="btn" inside the container
let navLinks = navContainer.getElementsByClassName("nav_link");
console.log(navLinks);

// Loop through the buttons and add the active class to the current/clicked button
for (let i = 0; i < navLinks.length; i++) {
  navLinks[i].addEventListener("click", function () {
    let current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

const menuBurger = document.querySelector(".menu-tiga");
let isWhite = true;
menuBurger.addEventListener("click", () => {
  if (isWhite) {
    menuBurger.style.color = "#4361ee";
  } else {
    menuBurger.style.color = "white";
  }
  isWhite = !isWhite;
});