<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>Choosing us means choosing a reliable and professional real estate website that provides a user-friendly platform for finding, buying, or selling properties. We offer a comprehensive listing of properties, valuable insights, and excellent customer service to help you make informed decisions and achieve your real estate goals.</p>
         <a href="contact.html" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>search property</h3>
         <p>Search for your desirable location of your dream home. It is easy and convenient.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contact agents</h3>
         <p>We have some  highly qualified agent whom each excelled in their field.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy property</h3>
         <p>Thank you for choosing us as a helping hand throughout your journey.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.jpg" alt="">
            <div>
               <h3>Alvee</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Just bought my dream house from here!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Dip</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>The flat is well maintained and the environment is also soothing!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Sadiq</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  
               </div>
            </div>
         </div>
         <p>The house has a good security system with a lift. Loved it.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.jfif" alt="">
            <div>
               <h3>Sakib</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>My family loves my new home.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Jalil</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>The kitchen could have been bigger</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.jfif" alt="">
            <div>
               <h3>Alam</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Best website to look for properties!</p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>