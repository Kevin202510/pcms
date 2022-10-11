<?php

    include('../../Functions/APIFunctions.php');
    $newAPIFunctions = new APIFunctions();


    if(isset($_POST['addnewuser'])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $address = $_POST["address"];
        $contact = $_POST["contact"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $permission_id = $_POST["permission_id"];

        $newAPIFunctions->insert('userstables',['permission_id'=>$permission_id,
        'firstname'=>$firstname,
        'lastname'=>$lastname,
        'address'=>$address,
        'contact'=>$contact,
        'email'=>$email,
        'password'=>$password,]);

        if($newAPIFunctions){
            header('location: ../../adminViews/usersList.php');
        }else{
            echo '<script>alert("May Error!");</script>';
        }
    }

?>