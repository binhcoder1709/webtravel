let backToTopButton = document.getElementById("back-to-top");

// Bắt sự kiện cuộn của trang web
window.addEventListener("scroll", () => {
    if (window.scrollY >= 200) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
});
backToTopButton.addEventListener("click", () => {
    window.scrollTo({ top: 0});
    window.scrollTo({ top: 0 }, {
        duration: 1000,
        easing: "ease-in-out",
    });
});