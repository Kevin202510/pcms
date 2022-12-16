
<section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand">Pet <i class="fa fa-h-square"></i>ealth Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <?php if(isset($_SESSION['PERMISSION_ID'])){
                        if($_SESSION['PERMISSION_ID']!=4){
                       ?>
                         <li><a href="adminViews/usersList.php" class="smoothScroll">Admin</a></li>
                         <?php }}?>
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="appointments.php" class="smoothScroll">Appointments</a></li>
                         <li><a href="aboutus.php" class="smoothScroll">About Us</a></li>
                         <li><a href="veterenarian.php" class="smoothScroll">Doctors</a></li>
                         <li><a href="news.php" class="smoothScroll">News</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         
                       
                         <!-- <li class="appointment-btn"><a href="login.php">Sign in</a></li>
                         <li class="appointment-btn"><a href="signup.php">Sign up</a></li> -->
                    <?php if(isset($_SESSION['PERMISSION_ID'])){?>
                        <a href="#" class="smoothScroll" style="margin-right:30px" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['FULLNAME']; ?></a>
                        <ul class="dropdown-menu">
                        <li><a href="appoint.php" class="smoothScroll">My Appoinment</a></li>
                                <form method="post">
                                    <input type="submit" name="logoutnako" class="btn btn-primary btn-sm" style="width:100%" class="nav-link" value="Logout">
                                </form>
                            </li>
                        </ul>
                    <?php }else{ ?>
                         <li class="appointment-btn"><a href="login.php">Make an appointment</a></li>
                         <?php }?>
                         <!-- <li class="appointment-btn"><a href="<?php echo $urlappointment; ?>">Start a meeting</a></li> -->
                    </ul>
               </div>

          </div>
     </section>

