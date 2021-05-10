<div id="inspector" style="margin-top: 90px">
<v-app style="background-color: #eee">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header card-header-rose card-header-mobalert">
            <h4 class="card-title ">Fire Inspector</h4>
            <p class="card-category">List of Fire Inspector to be added in fire inspector dropdown list</p>
          </div>
          <div class="card-body">
              <div class="container" style="margin: -5px">
                  <div class="row">
                      <div class="col-md-6">
                        <button type="button" class="btn btn-rose" disabled  data-toggle="modal" data-target="#AddFireInspector"> <!-- style="cursor: not-allowed" -->
                          <i class="material-icons">add</i> Add Fire Inspector
                        </button>
                      </div>
                      <div class="col-md-6 text-right">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#InfoFireInspector">
                          <i class="fas fa-info"></i>
                        </button>
                      </div>
                  </div>
              </div>
              <v-card-title style="margin-top: -40px; margin-bottom: -15px">
                <v-spacer></v-spacer>
                <v-col cols="12" sm="6" md="6" lg="6">
                  <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" width="50" single-line hide-details></v-text-field>
                </v-col>
              </v-card-title>
            <div style="height: 100%;">
             <template>
                <v-data-table 
                    :headers="headers1" 
                    :items="inspectors" 
                    :search="search" 
                    :items-per-page="5" 
                    :single-expand="singleExpand"
                    :expanded.sync="expanded" 
                    class="elevation-1"
                    >
                    <template v-slot:item.avatar="{ item }">
                    <v-avatar>
                      <img
                        src="../assets/img/faces/avatar.jpg"
                        alt="John"
                        style="width: 40px; height: 40px"
                      >
                    </v-avatar>
                    </template>
                    <template v-slot:item.action="{ item }">
                      <v-btn icon color="indigo" data-toggle="modal" data-target="#menuInspector" @click="selectInspectorList(item)">
                        <v-icon>mdi-tune</v-icon>
                      </v-btn>
                     <!--  <v-switch
                        v-model="item.user_status"
                        @change=""
                      ></v-switch> -->
                    </template>
                    <template v-slot:item.status="{ item }">
                      <span v-if="item.to_active_status == 1">
                        <v-chip
                          class="ma-2"
                          color="#de0c3b"
                          text-color="white"
                        >
                          Active  
                        </v-chip>
                      </span>
                      <span v-else>
                        <v-chip
                          class="ma-2"
                          color="#eee"
                          text-color="black"
                        >
                          In-active
                        </v-chip>
                      </span>
                    </template>
                  </v-data-table>
              </template>
              </div>
          </div>
          <?php include('modals/inspector_modals.php'); ?>
        </div>
        
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Admins (MOBAlert Mobile Platform)</h4>
            <p class="card-category">List of admin request</p>
          </div>
          <div class="card-body" style="height: 550px">
              <div>
                <template>
                  <v-card
                    class="mx-auto w-100"
                    color="#ffff"
                    dark
                  >
                    <v-card-actions>
                      <v-list-item class="grow">
                        <v-list-item-avatar color="grey darken-3">
                          <v-img
                            class="elevation-6"
                            src="../assets/img/faces/avatar.jpg"
                          ></v-img>
                        </v-list-item-avatar>

                        <v-list-item-content>
                          <v-list-item-title style="color: black">Evan You</v-list-item-title>
                        </v-list-item-content>

                        <v-row
                          align="center"
                          justify="end"
                        >
                        <v-card-actions>
                         <!--  <template v-slot:item.approve="{ item }"> -->
                          <v-btn icon color="info">
                            <v-icon>mdi-eye-plus-outline</v-icon>
                          </v-btn>
                          <v-btn icon color="success">
                            <v-icon>mdi-account-check-outline</v-icon>
                          </v-btn>
                          <v-btn icon color="warning">
                            <v-icon>mdi-account-remove-outline</v-icon>
                          </v-btn>
                           <!--  </template> -->
                        </v-card-actions>
                        </v-row>
                      </v-list-item>
                    </v-card-actions>
                  </v-card>
                </template><br>
              </div>
          </div>
        </div>
      </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Fire Inspector Pending</h4>
              <p class="card-category">List of Fire Inspector admin request from your municipality</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <template>
                 <!--  <v-card> -->
                    <v-card-title>
                      <v-spacer></v-spacer>
                      <v-col cols="12" sm="2" md="2" lg="3">
                        <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" width="20" single-line hide-details></v-text-field>
                      </v-col>
                    </v-card-title>
                    <v-data-table 
                      :headers="headers" 
                      :items="inspector_request" 
                      :search="search" 
                      :items-per-page="10" 
                      :single-expand="singleExpand"
                      :expanded.sync="expanded" 
                      class="elevation-1"
                      >
                      <template v-slot:item.avatar="{ item }">
                      <v-avatar>
                        <img
                          src="../assets/img/faces/avatar.jpg"
                          alt="John"
                          style="width: 40px; height: 40px"
                        >
                      </v-avatar>
                      </template>
                      <template v-slot:item.approve="{ item }">
                        <v-btn class="ma-2" 
                          rounded
                          outlined color="info"
                          @click="approved(item.id)"
                        >
                        <v-icon left>mdi-account-check-outline</v-icon> Accept
                      </v-btn>
                        <v-btn class="ma-2"
                          rounded
                          outlined 
                          color="warning"
                          @click="declined(item.id)"
                        >
                        <v-icon left>mdi-account-remove-outline</v-icon>Declined
                      </v-btn>
                      </template>
                      <!-- <template v-slot:item.decline="{ item }">
                      <v-btn class="ma-2" tile outlined color="warning">
                        <v-icon left>mdi-account-check-outline</v-icon> Approved
                      </v-btn>
                      </template> -->
                    </v-data-table>
                <!--   </v-card> -->
                </template>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="menuInspector" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #de0c3b">
            <h5 class="modal-title" id="exampleModalLabel" style="color: white">Operation Management</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: white">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="container-fluid">
            <h4>Web Application</h4>
              <div class="row">
             
                <div class="col-md-6">
                  <table>
                    <tr>
                      <td style="width: 80%;">
                        <span style="font-size: 15px">Able to add Fire Inspection record</span>
                      </td>
                      <td style="width: 20%; text-align: right">
                        <v-switch style="margin-left: 30px;"
                        v-model="currentInspectorList.to_add"
                        ></v-switch>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 80%">
                        <span style="font-size: 15px">Able to archive Fire Inspection record</span>
                      </td>
                      <td style="width: 20%; text-align: right">
                        <v-switch style="margin-left: 30px;"
                        v-model="currentInspectorList.to_archive">
                        </v-switch>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 80%">
                        <span style="font-size: 15px">Able to Respond FSIC applicant</span>
                      </td>
                      <td style="width: 20%; text-align: right">
                        <v-switch style="margin-left: 30px;"
                        v-model="currentInspectorList.to_respond_fsic"></v-switch>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="col-md-6" style="border-left: 1px solid #eee">
                  <table>
                      <tr>
                        <td style="width: 80%">
                          <span style="font-size: 15px">Able to accept/decline Fire Inspector request</span>
                        </td>
                        <td style="width: 20%; text-align: right">
                          <v-switch style="margin-left: 30px;"
                          v-model="currentInspectorList.to_accept_request"></v-switch>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 80%">
                          <span style="font-size: 15px">Able to switch Fire Inspector Status</span>
                        </td>
                        <td style="width: 20%; text-align: right">
                          <v-switch style="margin-left: 30px;"
                          v-model="currentInspectorList.to_switch_status"></v-switch>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 80%">
                          <span style="font-size: 15px">Able to accept/decline MOBAlert mobile app request</span>
                        </td>
                        <td style="width: 20%; text-align: right">
                          <v-switch style="margin-left: 30px;"
                          v-model="currentInspectorList.to_accept_mobile_request"></v-switch>
                        </td>
                      </tr>
                    </table>
                </div>
                <div class="col-md-12 text-center">
                <hr>
                  <table class="mx-auto">
                    <tr>
                      <td style="width: 80%">
                        <span style="font-size: 15px">Add as (active) status in Fire Inspector list</span>
                      </td>
                      <td style="width: 20%; text-align: right">
                        <v-switch style="margin-left: 30px;"
                        v-model="currentInspectorList.to_active_status"></v-switch>
                      </td>
                      </tr>
                  </table>
                </div>
                <div class="col-md-12">
                <hr>
                  <h4>Mobile Application</h4>
                  <table>
                    <tr>
                      <td style="width: 80%">
                        <span style="font-size: 15px">Able to post</span>
                      </td>
                      <td style="width: 20%; text-align: right">
                        <v-switch style="margin-left: 30px;"
                        v-model="currentInspectorList.to_post"></v-switch>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 80%">
                        <span style="font-size: 15px">Able to ban respondent/applicant user</span>
                      </td>
                      <td style="width: 20%; text-align: right">
                        <v-switch style="margin-left: 30px;"
                        v-model="currentInspectorList.to_ban"></v-switch>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" @click="confirmUpdate">Confirm</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="dialogApproved" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #de0c3b">
          <h5 class="modal-title" id="exampleModalLabel" style="color: white">Operation Management</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="color: white">&times;</span>
          </button>
        </div>
          <div class="modal-body">
            <div class="container-fluid">
            <h4>Web Application</h4>
              <div class="row">
             
                <div class="col-md-6">
                  <table>
                    <tr>
                      <td style="width: 80%;">
                        <span style="font-size: 15px">Able to add Fire Inspection record</span>
                      </td>
                      <td style="width: 20%; text-align: right">
                        <v-switch style="margin-left: 30px;"
                        v-model="to_add"
                        ></v-switch>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 80%">
                        <span style="font-size: 15px">Able to archive Fire Inspection record</span>
                      </td>
                      <td style="width: 20%; text-align: right">
                        <v-switch style="margin-left: 30px;"
                        v-model="to_archive">
                        </v-switch>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 80%">
                        <span style="font-size: 15px">Able to Respond FSIC applicant</span>
                      </td>
                      <td style="width: 20%; text-align: right">
                        <v-switch style="margin-left: 30px;"
                        v-model="to_respond_fsic"></v-switch>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="col-md-6" style="border-left: 1px solid #eee">
                  <table>
                      <tr>
                        <td style="width: 80%">
                          <span style="font-size: 15px">Able to accept/decline Fire Inspector request</span>
                        </td>
                        <td style="width: 20%; text-align: right">
                          <v-switch style="margin-left: 30px;"
                          v-model="to_accept_request"></v-switch>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 80%">
                          <span style="font-size: 15px">Able to switch Fire Inspector Status</span>
                        </td>
                        <td style="width: 20%; text-align: right">
                          <v-switch style="margin-left: 30px;"
                          v-model="to_switch_status"></v-switch>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 80%">
                          <span style="font-size: 15px">Able to accept/decline MOBAlert mobile app request</span>
                        </td>
                        <td style="width: 20%; text-align: right">
                          <v-switch style="margin-left: 30px;"
                          v-model="to_accept_mobile_request"></v-switch>
                        </td>
                      </tr>
                    </table>
                </div>
                <div class="col-md-12 text-center">
                <hr>
                  <table class="mx-auto">
                    <tr>
                      <td style="width: 80%">
                        <span style="font-size: 15px">Add as (active) status in Fire Inspector list</span>
                      </td>
                      <td style="width: 20%; text-align: right">
                        <v-switch style="margin-left: 30px;"
                        v-model="to_active_status"></v-switch>
                      </td>
                      </tr>
                  </table>
                </div>
                <div class="col-md-12">
                <hr>
                  <h4>Mobile Application</h4>
                  <table>
                    <tr>
                      <td style="width: 80%">
                        <span style="font-size: 15px">Able to post</span>
                      </td>
                      <td style="width: 20%; text-align: right">
                        <v-switch style="margin-left: 30px;"
                        v-model="to_post"></v-switch>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 80%">
                        <span style="font-size: 15px">Able to ban respondent/applicant user</span>
                      </td>
                      <td style="width: 20%; text-align: right">
                        <v-switch style="margin-left: 30px;"
                        v-model="to_ban"></v-switch>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" @click="confirmApproved">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  </v-app>

  
</div>
</div>

