<!-- header -->
<?php include('layouts/head.php') ?>

     <!-- HEADER -->
     <?php include('layouts/header.php') ?>


     <!-- MENU -->
     <?php include('layouts/menu.php') ?>


<?php

          include('Functions/APIFunctions.php');
          $newAPIFunctions = new APIFunctions();

          if(isset($_POST['register'])){
          $firstname = $_POST["firstname"];
          $lastname = $_POST["lastname"];
          $address = $_POST["address"];
          $contact = $_POST["contact"];
          $email = $_POST["email"];
          $password = $_POST["password"];
          $permission_id = 4;

          $newAPIFunctions->insert('userstables',['permission_id'=>$permission_id,
          'firstname'=>$firstname,
          'lastname'=>$lastname,
          'address'=>$address,
          'contact'=>$contact,
          'email'=>$email,
          'password'=>$password,]);

          if($newAPIFunctions){
             echo "<script>alert('sucess');</script>";
          }else{
               echo '<script>alert("May Error!");</script>';
          }
}

?>









     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <form id="appointment-form" role="form" method="POST" >

                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>SIGN UP</h2>
                              </div>
                              <input type="hidden"  id="ids" name="id" >
                              <input type="hidden"  id="permission_ids " name="permission_ids " value="4">   
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">First Name </label>
                                        <input type="text" class="form-control" id="firstnames" name="firstname" placeholder="First Name">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Last Name </label>
                                        <input type="text" class="form-control" id="lastnames" name="lastname" placeholder="Last Name">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Address</label>
                                        <input type="text" class="form-control" id="addresss" name="address" placeholder="Address">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="emails" name="email" placeholder="Your Email">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control" id="contacts" name="contact" placeholder="+63">
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <label for="telephone">Password</label>
                                        <input type="tel" class="form-control" id="passwords" name="password" placeholder="Password">
                                    </div>

                                    <div class="col-lg-12 col-lg-12">
                                        <button type="submit" class="form-control" id="cf-submit" name="register">Sign up</button>
                                   </div>



                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>


     <!-- GOOGLE MAP -->
     <!-- <section id="google-map"> -->
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>            -->


     <!-- FOOTER -->
     <?php include('layouts/footer.php') ?>