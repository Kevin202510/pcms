<!-- header -->
<?php

include('config.php');
include('api.php');

$arr['topic']='Test by Vishal';
$arr['start_date']=date('2021-05-16 00:02:30');
$arr['duration']=30;
$arr['password']='vishal';
$arr['type']='2';
$result=createMeeting($arr);
if(isset($result->id)){
     $urlappointment = $result->join_url;
	// echo "Join URL: <a href='".$result->join_url."'>".$result->join_url."</a><br/>";
	// echo "Password: ".$result->password."<br/>";
	// echo "Start Time: ".$result->start_time."<br/>";
	// echo "Duration: ".$result->duration."<br/>";
}else{
	echo '<pre>';
	print_r($result);
}

include('layouts/head.php') 
?>

     <!-- HEADER -->
     <?php include('layouts/header.php') ?>


     <!-- MENU -->
     <?php include('layouts/menu.php') ?>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Let's make your life happier</h3>
                                             <h1>Healthy Living</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Aenean luctus lobortis tellus</h3>
                                             <h1>New Lifestyle</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Pellentesque nec libero nisi</h3>
                                             <h1>Your Health Benefits</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <?php include('layouts/footer.php') ?>