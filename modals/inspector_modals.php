<!-- INSERT FIRE INSPECTOR -->
<div class="modal fade" id="AddFireInspector" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #de0c3b">
        <h5 class="modal-title text-white" id="exampleModalLabel">Add Fire Inspector</h5>
        <button type="button" class="text-white close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Position</label>
                            <input type="text" class="form-control" id="position" v-model="newInspector.position">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">First Name</label>
                            <input type="text" class="form-control" id="inspector_fname" v-model="newInspector.fname">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Middle Initial</label>
                            <input type="text" class="form-control" id="inspector_mname" v-model="newInspector.mname">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Last Name</label>
                            <input type="text" class="form-control" id="inspector_lname" v-model="newInspector.lname">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Address</label>
                            <input type="text" class="form-control" id="inspector_address" v-model="newInspector.address">
                        </div>
                    </div>
                                 
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" @click="addInspector" class="btn btn-success" id="btn-save_inspector">Save Fire Inspector</button>
      </div>
    </div>
  </div>
</div>

<!-- UDPATE INSPECTOR -->
<div class="modal fade" id="UpdateFireInspector" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #de0c3b">
        <h5 class="modal-title text-white" id="exampleModalLabel">Edit Fire Inspector</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Position</label>
                            <input type="text" class="form-control" id="update_inspector_position" v-model="currentInspector.position">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">First Name</label>
                            <input type="text" class="form-control" id="update_inspector_firstname" v-model="currentInspector.firstname">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Middle Initial</label>
                            <input type="text" class="form-control" id="update_inspector_middlename" v-model="currentInspector.middlename">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Last Name</label>
                            <input type="text" class="form-control" id="update_inspector_lastname" v-model="currentInspector.lastname">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Address</label>
                            <input type="text" class="form-control" id="update_inspector_address" v-model="currentInspector.address_location">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Address</label>
                            <input type="text" class="form-control" id="update_inspector_address" v-model="currentInspector.inspector_status">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <label class="bmd-label-floating">Inspecrot Status</label><v-space></v-space>
                            <v-switch
                              v-model="switchStatus"
                            ></v-switch>
                        </div>      
                    </div>  
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" @click="display_inspector" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" @click="updateInspector" class="btn btn-success" id="btn-update_inspector">Save Changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="InfoFireInspector" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-black" id="exampleModalLabel"><i class="fas fa-info"></i></h5>
        <button type="button" class="close text-black" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <ul>
            <li>This Inspector Record will be displayed in FSIC Record System dropdown.</li>
            <li>Only Active Fire Inspector will be displayed in FSIC Record System dropdown.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>