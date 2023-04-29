<?php  

include '../components/connect.php';

if(isset($_COOKIE['agent_id'])){
   $user_id = $_COOKIE['agent_id'];
}else{
   $user_id = '';
   header('location:login.php');
}


if(isset($_POST['post'])){

   $id = create_unique_id();
   $property_name = $_POST['property_name'];
   $property_name = filter_var($property_name, FILTER_SANITIZE_STRING);
   $price = $_POST['price'];
   $price = filter_var($price, FILTER_SANITIZE_STRING);
   $address = $_POST['address'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);
   $offer = $_POST['offer'];
   $offer = filter_var($offer, FILTER_SANITIZE_STRING);
   $type = $_POST['type'];
   $type = filter_var($type, FILTER_SANITIZE_STRING);
   $bhk = $_POST['bhk'];
   $bhk = filter_var($bhk, FILTER_SANITIZE_STRING);
   $bedroom = $_POST['bedroom'];
   $bedroom = filter_var($bedroom, FILTER_SANITIZE_STRING);
   $bathroom = $_POST['bathroom'];
   $bathroom = filter_var($bathroom, FILTER_SANITIZE_STRING); 
   $room_floor = $_POST['room_floor'];
   $room_floor = filter_var($room_floor, FILTER_SANITIZE_STRING);
   $description = $_POST['description'];
   $description = filter_var($description, FILTER_SANITIZE_STRING);

   if(isset($_POST['lift'])){
      $lift = $_POST['lift'];
      $lift = filter_var($lift, FILTER_SANITIZE_STRING);
   }else{
      $lift = 'no';
   }
   if(isset($_POST['security_guard'])){
      $security_guard = $_POST['security_guard'];
      $security_guard = filter_var($security_guard, FILTER_SANITIZE_STRING);
   }else{
      $security_guard = 'no';
   }

   if(isset($_POST['garden'])){
      $garden = $_POST['garden'];
      $garden = filter_var($garden, FILTER_SANITIZE_STRING);
   }else{
      $garden = 'no';
   }
   if(isset($_POST['power_backup'])){
      $power_backup = $_POST['power_backup'];
      $power_backup = filter_var($power_backup, FILTER_SANITIZE_STRING);
   }else{
      $power_backup = 'no';
   }
   if(isset($_POST['parking_area'])){
      $parking_area = $_POST['parking_area'];
      $parking_area = filter_var($parking_area, FILTER_SANITIZE_STRING);
   }else{
      $parking_area = 'no';
   }
   if(isset($_POST['gym'])){
      $gym = $_POST['gym'];
      $gym = filter_var($gym, FILTER_SANITIZE_STRING);
   }else{
      $gym = 'no';
   }


   $image_02 = $_FILES['image_02']['name'];
   $image_02 = filter_var($image_02, FILTER_SANITIZE_STRING);
   $image_02_ext = pathinfo($image_02, PATHINFO_EXTENSION);
   $rename_image_02 = create_unique_id().'.'.$image_02_ext;
   $image_02_tmp_name = $_FILES['image_02']['tmp_name'];
   $image_02_size = $_FILES['image_02']['size'];
   $image_02_folder = '../uploaded_files/'.$rename_image_02;

   if(!empty($image_02)){
      if($image_02_size > 2000000){
         $warning_msg[] = 'image 02 size is too large!';
      }else{
         move_uploaded_file($image_02_tmp_name, $image_02_folder);
      }
   }else{
      $rename_image_02 = '';
   }

   $image_03 = $_FILES['image_03']['name'];
   $image_03 = filter_var($image_03, FILTER_SANITIZE_STRING);
   $image_03_ext = pathinfo($image_03, PATHINFO_EXTENSION);
   $rename_image_03 = create_unique_id().'.'.$image_03_ext;
   $image_03_tmp_name = $_FILES['image_03']['tmp_name'];
   $image_03_size = $_FILES['image_03']['size'];
   $image_03_folder = '../uploaded_files/'.$rename_image_03;

   if(!empty($image_03)){
      if($image_03_size > 2000000){
         $warning_msg[] = 'image 03 size is too large!';
      }else{
         move_uploaded_file($image_03_tmp_name, $image_03_folder);
      }
   }else{
      $rename_image_03 = '';
   }

  
   $image_01 = $_FILES['image_01']['name'];
   $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
   $image_01_ext = pathinfo($image_01, PATHINFO_EXTENSION);
   $rename_image_01 = create_unique_id().'.'.$image_01_ext;
   $image_01_tmp_name = $_FILES['image_01']['tmp_name'];
   $image_01_size = $_FILES['image_01']['size'];
   $image_01_folder = '../uploaded_files/'.$rename_image_01;

   if($image_01_size > 2000000){
      $warning_msg[] = 'image 01 size too large!';
   }else{
      $insert_property = $conn->prepare("INSERT INTO `property`(id, user_id, property_name, address, price, type, offer, bhk, bedroom, bathroom, room_floor, lift, security_guard, garden, power_backup, parking_area, gym, image_01, image_02, image_03, description) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"); 
      $insert_property->execute([$id, $user_id, $property_name, $address, $price, $type, $offer, $bhk, $bedroom, $bathroom, $room_floor, $lift, $security_guard, $garden, $power_backup, $parking_area, $gym, $rename_image_01, $rename_image_02, $rename_image_03, $description]);
      move_uploaded_file($image_01_tmp_name, $image_01_folder);
      $success_msg[] = 'property posted successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>post property</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   


<section class="property-form">

   <form action="" method="POST" enctype="multipart/form-data">
      <h3>property details</h3>
      <div class="box">
         <p>Name <span>*</span></p>
         <input type="text" name="property_name" required maxlength="50" placeholder="Enter Property Name" class="input">
      </div>
      <div class="flex">
         <div class="box">
            <p>Price <span>*</span></p>
            <input type="number" name="price" required min="0" max="9999999999" maxlength="10" placeholder="Enter Property Price" class="input">
         </div>
         <div class="box">
            <p>Address <span>*</span></p>
            <select name="address" class="input" required>
                  <option value="Banani">Banani</option>
                  <option value="Mohakhali">Mohakhali</option>
                  <option value="Uttara">Uttara</option>
               </select>
         </div>
         <div class="box">
            <p>Offer Type <span>*</span></p>
            <select name="offer" required class="input">
               <option value="Sale">Sale</option>
               <option value="Resale">Resale</option>
               <option value="Rent">Rent</option>
            </select>
         </div>
         <div class="box">
            <p>Type <span>*</span></p>
            <select name="type" required class="input">
               <option value="Flat">Flat</option>
               <option value="House">House</option>
            </select>
         </div>

         <div class="box">
            <p>Number of BHK <span>*</span></p>
            <select name="bhk" required class="input">
               <option value="1">1 BHK</option>
               <option value="2">2 BHK</option>
               <option value="3">3 BHK</option>
               <option value="4">4 BHK</option>
               <option value="5">5 BHK</option>
            </select>
         </div>
         <div class="box">
            <p>Number of Bedrooms <span>*</span></p>
            <select name="bedroom" required class="input">
               <option value="0">0 Bedroom</option>
               <option value="1" selected>1 Bedroom</option>
               <option value="2">2 Bedrooms</option>
               <option value="3">3 Bedrooms</option>
               <option value="4">4 Bedrooms</option>
            </select>
         </div>
         <div class="box">
            <p>Number of Bathrooms <span>*</span></p>
            <select name="bathroom" required class="input">
               <option value="1">1 Bathroom</option>
               <option value="2">2 Bathrooms</option>
               <option value="3">3 Bathrooms</option>
               <option value="4">4 Bathrooms</option>
            </select>
         </div>
         <div class="box">
            <p>Floor Room <span>*</span></p>
            <input type="number" name="room_floor" required min="0" max="15" maxlength="2" placeholder="Floor Number" class="input">
         </div>
      </div>
      <div class="box">
         <p>Description <span>*</span></p>
         <textarea name="description" maxlength="1000" class="input" required cols="30" rows="10" placeholder="write about property..."></textarea>
      </div>
      <div class="checkbox">
         <div class="box">
            <p><input type="checkbox" name="lift" value="yes" />Lifts</p>
            <p><input type="checkbox" name="security_guard" value="yes" />Security Guard</p>
            <p><input type="checkbox" name="garden" value="yes" />Garden</p>
         </div>
         <div class="box">
            <p><input type="checkbox" name="parking_area" value="yes" />Parking Area</p>
            <p><input type="checkbox" name="gym" value="yes" />Gym</p>
            <p><input type="checkbox" name="power_backup" value="yes" />Power Backup</p>
         </div>
      </div>
      <div class="box">
         <p>Image 01 <span>*</span></p>
         <input type="file" name="image_01" class="input" accept="image/*" required>
      </div>
      <div class="flex"> 
         <div class="box">
            <p>Image 02</p>
            <input type="file" name="image_02" class="input" accept="image/*">
         </div>
         <div class="box">
            <p>Image 03</p>
            <input type="file" name="image_03" class="input" accept="image/*">
         </div>
      </div>
      <input type="submit" value="post property" class="btn" name="post">
   </form>

   <div class="box">
      <a href="dashboard.php" class="btn">Dashboard</a>
   </div>

</section>





<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>