



<?php session_start(); ?>



<!-- header -->
<?php include('layouts/head.php') ?>

     <!-- HEADER -->
     <?php include('layouts/header.php') ?>


     <!-- MENU -->
     <?php include('layouts/menu.php') ?>




     <?php
          include('Functions/APIFunctions.php');
          $newAPIFunctions = new APIFunctions();

        if(isset($_SESSION['PERMISSION_ID'])){ 
            $v= $_SESSION['ID'];
         
            }
          if(isset($_POST['app'])){
          $app_user_id = $v;
          $app_pet = $_POST["app_pet"];
          $app_consultaion = $_POST["app_consultaion"];
          $app_date = $_POST["app_date"];
          

          $newAPIFunctions->insert('appointments',['app_user_id'=>$app_user_id,
          'app_pet'=>$app_pet,
          'app_consultaion'=>$app_consultaion,
          'app_date'=>$app_date,]);

          if($newAPIFunctions){
             echo "<script>alert('sucess');</script>";
          }else{
               echo '<script>alert("May Error!");</script>';
          }
}

?>










     <!-- LOGIN -->
<!-- SELECT * FROM `appointments` RIGHT JOIN `userstables`ON `userstables`.`id`=`appointments`.`app_user_id` -->
<!-- LOGIN -->



     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    

                    <div class="col-md-6 col-sm-6">
                         <form id="appointment-form" role="form" method="POST" action="#">

                             
                              <input type="hidden"  id="app_id" name="app_id" >
                              
                                   <div class="col-md-6 col-sm-6">
                                        <label for="password">Type of Pet</label>
                                        <input type="text" class="form-control" id="app_pet" name="app_pet" placeholder="Pet">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="password">Consultaion</label>
                                        <input type="text" class="form-control" id="app_consultaion" name="app_consultaion" placeholder="Consultaion">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="password">Date</label>
                                        <input type="date" class="form-control" id="app_date" name="app_date" placeholder="Date">
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="form-control" id="cf-submit" name="app">Appoint</button>
                                   </div>

                                   

                             
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>


     <?php include('layouts/footer.php') ?>