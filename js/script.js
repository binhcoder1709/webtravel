
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
let backToTopButton = document.getElementById(".back-to-top");

// Bắt sự kiện cuộn của trang web
window.addEventListener("scroll", () => {
    // Nếu khoảng cách cuộn lớn hơn hoặc bằng 100px, thì hiển thị nút
    if (window.scrollY >= 200) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
});

// Khi người dùng nhấp vào nút, cuộn trang lên đầu
backToTopButton.addEventListener("click", () => {
    window.scrollTo({ top: 0});
    window.scrollTo({ top: 0 }, {
        duration: 1000,
        easing: "ease-in-out",
    });
});