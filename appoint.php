<?php session_start(); ?>
<!-- header -->
<?php
include('layouts/head.php') 
?>

     <!-- HEADER -->
     <?php include('layouts/header.php') ?>


     <!-- MENU -->
     <?php include('layouts/menu.php') ?>

     <?php
        include('Functions/APIFunctions.php');
        $newAPIFunctions = new APIFunctions();


       
         
       
        $newAPIFunctions->select("appointments","*");
        $userLists = $newAPIFunctions->sql;

        $index = 1;
        if(isset($_SESSION['PERMISSION_ID'])){ 
            $v= $_SESSION['ID'];
        while ($data = mysqli_fetch_assoc($userLists)){
            if($data["app_user_id"]== $v)
        ?>

            <p><?php $index = 1; ?></p><br>
            <p><?php echo $data["app_user_id"]; ?></p><br>
            <p><?php echo $data["app_pet"]; ?></p><br>
            <p><?php echo $data["app_consultaion"]; ?></p><br>
            <p><?php echo $data["app_date"]; ?></p>
    

<?php }}?>

     <!-- FOOTER -->
     <?php include('layouts/footer.php') ?>