<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['send'])){

   $msg_id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $message = $_POST['message'];
   $message = filter_var($message, FILTER_SANITIZE_STRING);

   $verify_contact = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $verify_contact->execute([$name, $email, $number, $message]);

   if($verify_contact->rowCount() > 0){
      $warning_msg[] = 'message sent already!';
   }else{
      $send_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
      $send_message->execute([$msg_id, $name, $email, $number, $message]);
      $success_msg[] = 'message send successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">
      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>
      <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
         <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>how to cancel booking?</span><i class="fas fa-angle-down"></i></h3>
         <p>To cancel a booking, please check the terms and conditions of the booking agreement to understand the cancellation policy. If you are eligible for cancellation, please contact our customer support team, who will guide you through the cancellation process.</p>
      </div>

      <div class="box active">
         <h3><span>when will I get the possession?</span><i class="fas fa-angle-down"></i></h3>
         <p>The possession date varies from property to property and is dependent on various factors such as construction progress, legal clearances, and other regulatory approvals. Please check the possession date in the agreement and consult with the developer or seller for any updates.</p>
      </div>

      <div class="box">
         <h3><span>where can I pay the rent?</span><i class="fas fa-angle-down"></i></h3>
         <p>Please check the payment details mentioned in your rental agreement. Typically, you can pay the rent through various modes such as bank transfer, online payment portals, or by visiting the landlord's office. If you have any queries, please reach out to your landlord for clarification.</p>
      </div>

      <div class="box">
         <h3><span>how to contact with the buyers?</span><i class="fas fa-angle-down"></i></h3>
         <p>If you want to contact buyers, you can use our platform's messaging system, which enables communication between buyers and sellers. Alternatively, you can mention your contact details in your listing, and buyers can reach out to you directly</p>
      </div>

      <div class="box">
         <h3><span>why my listing not showing up?</span><i class="fas fa-angle-down"></i></h3>
         <p>There could be various reasons why your listing is not showing up, such as incomplete information, unverified details, or non-compliance with our website's policies. Please review your listing, make necessary changes, and contact our customer support team if you need further assistance.</p>
      </div>

      <div class="box">
         <h3><span>how to promote my listing?</span><i class="fas fa-angle-down"></i></h3>
         <p>To promote your listing, you can use our website's marketing tools such as sponsored listings, featured listings, and social media promotions. You can also optimize your listing by providing high-quality images, detailed descriptions, and accurate information. Finally, you can share your listing with your network to attract potential buyers or renters.</p>
      </div>

   </div>

</section>

<!-- faq section ends -->










<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>