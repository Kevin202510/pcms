



<?php session_start(); ?>



<!-- header -->
<?php include('layouts/head.php') ?>

     <!-- HEADER -->
     <?php include('layouts/header.php') ?>


     <!-- MENU -->
     <?php include('layouts/menu.php') ?>



     <!-- LOGIN -->
<?php 
          include('Functions/APIFunctions.php');
          $newAPIFunctions = new APIFunctions();

          if(isset($_POST["login"])){

          $email=$_POST["email"];
          $password=$_POST["password"];

          $login = "email='$email' AND password='$password'";
          $newAPIFunctions->select("userstables","*",$login);
          $userLists = $newAPIFunctions->sql;
          $user_id;
          while ($data = mysqli_fetch_assoc($userLists)){
               if($data['permission_id']==1 || $data['permission_id']==2 || $data['permission_id']==3){
                    $_SESSION['PERMISSION_ID'] = $data['permission_id'];
                    $_SESSION['FULLNAME'] = $data['firstname']." ".$data['lastname'];
                    
                    echo "<script>location.href = 'http://localhost/pcms/index.php';</script>";
               }else{
                    $_SESSION['PERMISSION_ID'] = $data['permission_id'];
                    $_SESSION['FULLNAME'] = $data['firstname']." ".$data['lastname'];
                    $_SESSION['ID'] = $data['id'];
                    echo "<script>location.href = 'http://localhost/pcms/index.php';</script>";
               }
          }
          }
?>

<!-- SELECT * FROM `appointments` RIGHT JOIN `userstables`ON `userstables`.`id`=`appointments`.`app_user_id` -->
<!-- LOGIN -->



     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/wends.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <form id="appointment-form" role="form" method="post" action="#">

                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Login</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="********">
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="form-control" id="cf-submit" name="login">Login</button>
                                   </div>

                                   <a href="signup.php">Don't have account? Sign up</a>
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