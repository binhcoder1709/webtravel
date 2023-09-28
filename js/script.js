// const header = document.querySelector(".header");

// window.addEventListener("scroll", () => {
//   if (window.pageYOffset > 100) {
//     header.style.backgroundColor = "#fff";
//   } else {
//     header.style.backgroundColor = "transparent";
//   }
// });
const header2 = document.querySelector(".header");
const toggleClass = "is-sticky";
window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll > 100) {
    header2.classList.add(toggleClass);
  } else {
    header2.classList.remove(toggleClass);
  }
});