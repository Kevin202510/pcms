$(document).ready(function(){
    $("save").click(function(e){
         e.preventDefault();

         $.ajax({
            type:"POST",
            url: "usersModalFuntions.php",
            data: $("userForm").serialize(),
            success: function(datas){
                location.reload();
            },   
         });
    });
});

