
<nav id="nav" class="navbar bg-white navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">
                    <img src="../assets/img/faces/avatar.jpg" style="width: 30px; border-radius: 50%" alt=""> Mike John responded to your email
                  </a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li> -->
              <li class="nav-item dropdown">
              
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <!--  <i class="material-icons">person</i> -->
                 <img src="../assets/img/faces/witness_pic.png" alt="" style="width: 25px; height: 25px; border-radius: 50%">
                 <!-- <img src="../assets/img/faces/avatar.jpg" alt="" style="width: 25px; height: 25px; border-radius: 50%"> -->
                 <!--  <p class="d-lg-none d-md-block">
                    Account
                  </p> -->
                  
                </a>
                <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdownProfile" style="width: 300px; margin-top: 11px;">
                  <i class="fas fa-caret-up" style="position: absolute; top: -24px; right: 16px; color: white; font-size: 36px;"></i>
                  
                  <img src="../assets/img/faces/witness_pic.png" alt="" style="width: 90px; border-radius: 50%; margin-top: 20px">
                  <h4 style="font-weight: bold; margin-top: 10px"><?php echo $_SESSION['userfname']. ' ' . $_SESSION['usermname'] . ' ' . $_SESSION['userlname']; ?></h4>
                  <p style="margin-top: -10px"><?php echo $_SESSION['useremail']; ?></p>
                  <a class="dropdown-item" href="#" style="font-size: 15px;"><img src="../assets/img/icon/profile.png" style="width: 25px" alt=""> &emsp;Profile</a>
                  <a class="dropdown-item" href="#" style="font-size: 15px;" data-toggle="modal" data-target="#changePassModal"><img src="../assets/img/icon/lock.png" style="width: 25px" alt=""> &emsp;Change Password</a>
                  <a class="dropdown-item" href="../header/logout.php" style="font-size: 15px;"><img src="../assets/img/icon/signout.png" style="width: 25px" alt=""> &emsp;Log out</a>     
               <!--    <div class="fb-send-to-messenger" 
                    messenger_app_id="604335030483490" 
                    page_id="975174565892814" 
                    data-ref="varchar" 
                    color="blue" 
                    size="large">
                  </div>    -->     
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="changePass">
          <div class="modal fade modal-change" id="changePassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content" style="padding: 10px">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <?php echo '<input type="hidden" id="idForChange" value="'.$_SESSION['userid'].'" />'; ?>
                  <div class="col-md-12">
                  <v-text-field label="Old Password"id="oldpass" height="10" v-model="user.oldpass" prepend-inner-icon="mdi-lock-question" :append-icon="show3 ? 'mdi-eye' : 'mdi-eye-off'" :type="show3 ? 'text' : 'password'"  name="input-10-2" hint="Required" value="" class="input-group--focused" @click:append="show3 = !show3"></v-text-field>
                  </div>
                  <div class="col-md-12" style="margin-top: -20px">
                    <v-text-field  label="Enter your new Password" height="10" v-model="user.newpass" prepend-inner-icon="mdi-lock-question" :append-icon="show3 ? 'mdi-eye' : 'mdi-eye-off'" :type="show3 ? 'text' : 'password'"  name="input-10-2" hint="Required" value="" class="input-group--focused" @click:append="show3 = !show3"></v-text-field>
                  </div>
                </div>
                <div class="modal-footer" style="margin-top: -37px">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" @click="changePassword()">Confirm</button>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- End Navbar -->
      