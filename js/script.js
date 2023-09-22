import "../view/login.php";
import "../view/header.php";
document.getElementById("loginButton").addEventListener("click", function () {
  document.getElementById("loginPopup").style.display = "block";
});

// Khi nhấn vào nút đóng hoặc nền mờ, đóng pop-up
document.getElementById("closePopup").addEventListener("click", function () {
  document.getElementById("loginPopup").style.display = "none";
});

document.addEventListener("click", function (event) {
  if (event.target == document.getElementById("loginPopup")) {
    document.getElementById("loginPopup").style.display = "none";
  }
});