
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