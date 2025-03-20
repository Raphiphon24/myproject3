<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sweet Cake Shop</title>
  <meta name="description" content="ร้านเค้กสุดน่ารัก">
  <meta name="keywords" content="Cake, ร้านเค้ก, ขนมหวาน, เบเกอรี่">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="styles4.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
 
</head>

<body>
  <header class="header fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="sitename">Sweet Cake Shop</h1>
      <nav class="navmenu">
        <ul>
          <li><a href="#home" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="home" class="hero text-center" style="background-image: url('img/cake-bg.jpg');">
    <div class="container">
      <h1>Welcome to Sweet Cake Shop!</h1>
      <p>เค้กแสนอร่อย หวานละมุนทุกคำ</p>
      <a href="#menu" class="btn btn-pink">ดูเมนู</a>
    </div>
  </section>

  <section id="about" class="about section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <h2>เกี่ยวกับร้านเรา</h2>
          <p>เราใช้วัตถุดิบคุณภาพสูงสุด เพื่อให้เค้กของเรามีรสชาติที่นุ่มละมุนและเป็นเอกลักษณ์</p>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <img src="assets/img/about-cake.jpg" alt="About Cake Shop">
        </div>
      </div>
    </div>
  </section>

  <section id="menu" class="menu section-padding text-center">
    <div class="container">
      <h2 data-aos="fade-up">เมนูเค้กของเรา</h2>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="assets/img/cake1.jpg" alt="Cake 1">
            <h3>เค้กช็อกโกแลต</h3>
          </div>
          <div class="swiper-slide">
            <img src="assets/img/cake2.jpg" alt="Cake 2">
            <h3>เค้กสตรอว์เบอร์รี่</h3>
          </div>
          <div class="swiper-slide">
            <img src="assets/img/cake3.jpg" alt="Cake 3">
            <h3>เค้กเรนโบว์</h3>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact section-padding">
    <div class="container text-center">
      <h2>ติดต่อเรา</h2>
      <p>สอบถามเพิ่มเติมหรือสั่งเค้ก คลิกที่นี่</p>
      <form action="#" method="post">
        <input type="text" name="name" placeholder="ชื่อของคุณ" required>
        <input type="email" name="email" placeholder="อีเมลของคุณ" required>
        <textarea name="message" rows="5" placeholder="ข้อความของคุณ" required></textarea>
        <button type="submit" class="btn btn-pink">ส่งข้อความ</button>
      </form>
    </div>
  </section>

  <footer class="footer text-center">
    <p>&copy; 2025 Sweet Cake Shop - All Rights Reserved.</p>
  </footer>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    AOS.init({ duration: 1200 });
  </script>
</body>

</html>
