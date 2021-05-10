<div id="tabProfile">
    <div style="margin-top: 90px">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Bureau of Fire Protection</label>
                          <input type="text" class="form-control" disabled value="Bureau of Fire Protection">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <?php echo '<input type="email" class="form-control" disabled value="' . $_SESSION['useremail'] . '"/>'; ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <?php echo '<input type="text" class="form-control" disabled value="' . $_SESSION['userfname'] . '" />'; ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">M.I</label>
                          <?php echo '<input id="mname" type="hidden" class="form-control" value="' . $_SESSION['usermname'] . '" />'; ?>
                          <input type="text" v-model="user.mname" class="form-control" />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <?php echo '<input id="lname" type="hidden" class="form-control" value="' . $_SESSION['userlname'] . '" />'; ?>
                          <input type="text" v-model="user.lname" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Region</label>
                          <?php echo '<input type="text" class="form-control" disabled value="' . $_SESSION['userregion'] . '" />'; ?>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Province</label>
                          <?php echo '<input type="text" class="form-control" disabled value="' . $_SESSION['userprovince'] . '" />'; ?>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Municipality</label>
                          <?php echo '<input type="text" class="form-control" disabled value="' . $_SESSION['usermunicipality'] . '" />'; ?>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Barangay</label>
                          <?php echo '<input type="text" class="form-control" disabled value="' . $_SESSION['userbarangay'] . '" />'; ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone</label>
                          <?php echo '<input id="phone"  type="hidden" class="form-control w-100" value="' . $_SESSION['userphone'] . '"/>'; ?>
                          <input type="number" class="form-control w-100" v-model="user.phone" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Position</label>
                          <?php echo '<input id="positionupdate" type="hidden" class="form-control" value="'.$_SESSION['position'].'">'; ?>
                          <input type="text" class="form-control" v-model="user.position" />
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary pull-right" @click="updateProfile">UPDATE PROFILE</button>
                    <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img src="../assets/img/faces/avatar.jpg" alt="" style="width: 120px; border-radius: 50%">
                    <!-- <?php $profile_pic = $_GET['pic'] . '&height=' . $_GET['height'] . '&width=' . $_GET['width'] . '&ext=' . $_GET['ext'] . '&hash=' . $_GET['hash'];
                    echo '<img src="' . $profile_pic . '" alt="" style="width: 120px; border-radius: 50%">'; ?> -->
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="card-category text-gray"><?php echo $_SESSION['position']; ?></h4>
                  <h4><?php echo $_SESSION['userfname'] . ' ' . $_SESSION['usermname'] . ' ' . $_SESSION['userlname']; ?></h4>
                  <div class="container text-left">
                    <div class="row">
                      <div class="col-md-6" style="margin-bottom: -50px">
                        <label for="">Province: </label>&nbsp;<?php echo $_SESSION['userprovince']; ?><br>
                        <label for="">Municipality: </label>&nbsp;<?php echo $_SESSION['usermunicipality']; ?><br>
                        <label for="">Barangay: </label>&nbsp;<?php echo $_SESSION['userbarangay']; ?><br>
                      </div>
                      <div class="col-md-6">
                        <label for="">Phone: </label>&nbsp;<?php echo $_SESSION['userphone']; ?><br>
                        <label for="">Region: </label>&nbsp;<?php echo $_SESSION['userregion']; ?><br>
                        <label for="">Email: </label>&nbsp;<?php echo $_SESSION['useremail']; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>