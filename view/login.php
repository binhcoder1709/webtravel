<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Button/link để kích hoạt pop-up -->
<button id="loginButton">Đăng nhập</button>

<!-- Cửa sổ pop-up -->
<div id="loginPopup" class="popup">
  <div class="popup-content">
    <span class="close" id="closePopup">&times;</span>
    <nav class="form">
      <!-- <h2>Đăng nhập/Đăng ký</h2> -->
          <div class="container" id="container">
              <div class="form-container sign-up-container">
                  <form action="../model/insert.php" method="post" class="loginform">
                      <h1>Tạo tài khoản</h1>
                      <div class="social-container">
                          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                      <span>hoặc sử dụng email để đăng ký</span>
                      <input type="text" name="user" placeholder="Tên tài khoản" />
                      <input type="email" name="email" placeholder="Email" />
                      <input type="password" name="pass" placeholder="Mật khẩu" />
                      <input type="submit" name="dangky" value="Đăng ký">
                  </form>
              </div>
              <div class="form-container sign-in-container">
                  <form action="../controller/index.php?act=login" method="post">
                      <h1>Đăng nhập</h1>
                      <div class="social-container">
                          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                      <span>hoặc sử dụng tài khoản của bạn</span>
                      <input type="text" name="user" placeholder="Tên tài khoản" />
                      <input type="password" name="pass" placeholder="Mật khẩu" />
                      <a href="#">Quên mật khẩu của bạn?</a>
                      <input type="submit" name="dangnhap" value="Đăng nhập">
                  </form>
              </div>
              <div class="overlay-container">
                  <div class="overlay">
                      <div class="overlay-panel overlay-left">
                          <h1>Chào mừng trở lại!</h1>
                          <p>Để duy trì kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn.</p>
                          <button class="ghost" id="signIn">Đăng nhập</button>
                      </div>
                      <div class="overlay-panel overlay-right">
                          <h1>Chào bạn!</h1>
                          <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình cùng chúng tôi.</p>
                          <button class="ghost" id="signUp">Đăng ký</button>
                      </div>
                  </div>
              </div>
          </div>
      </nav>
  </div>
</div>

</body>
<script src="./script.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add('right-panel-active');
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove('right-panel-active');
        });
    </script>
</html>
