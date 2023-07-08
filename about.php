<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Kenapa Foodie Restaurant?</h3>
         <p>Foodie Restaurant adalah perusahaan dibidang kuliner yang menyediakan berbagai menu seperti makanan berat, makanan cepat saji, minuman dan makanan penutup. Tak hanya memesan makanan di tempat, kini Foodie Restaurant menyediakan layanan pemesanan makanan secara online.</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">step pemesanan online</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>memilih pesanan</h3>
         <p>Pembeli dapat memilih pesanan sesuai dengan menu yang diinginkan secara online tanpa harus keluar rumah.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>pengantaran yang cepat</h3>
         <p>Setelah pesanan diproses tim Foodie Restaurant akan mengantarkan pesanan sesuai tujuan.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>nikmati makanan</h3>
         <p>Makanan akan datang dan pengunjung dapat menikmati pesanan tanpa harus datang langsung ke restoran.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">reviews pelanggan</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.jpg" alt="">
            <p>Suka bangetttt.. roasted aromatic chickennya the best, pengirimannya cepat, recomended dehh</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Annisa</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.jpg" alt="">
            <p>Beef burger sama cheesy lovers pizza nya juara, udah gitu pelayanannya cepet, packagingnya rapi, good job.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Ashifa</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.jpg" alt="">
            <p>Dessertnya enak enak bangeeet, packagingnya rapi. Ga perlu repot bikin dessert tinggal order datangnya cepet.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Aulia</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.jpg" alt="">
            <p>Suka banget sama chocolate party, meski pengiriman jauh tetep dingin dan enakk.. repeat order ini sih</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Isny</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.jpg" alt="">
            <p>Lemonade squash nya kemanisan buat aku, tapi overall enak enak ko menunya, apalagi steak sama pastanya</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fa-regular fa-star"></i>
            </div>
            <h3>Rahayu</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.jpg" alt="">
            <p>Menunya enak enak, cocok buat acara keluarga tapi dirumah aja. Pengirimannya oke, pengantar makanannya ramah, mantul</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Rahma</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>