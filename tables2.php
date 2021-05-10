
<div id="fsic_inspection" style="background-color: #eee; width: 100%">
  <v-app style="background-color: #eee; width: 100%; overflow-x: hidden; overflow-y: hidden">
    <div style="margin-top: 60px">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-danger">
                <h4 class="card-title ">Fire Safety Inspection Record Management System</h4>
                <p class="card-category">R{{ header_card_address }}</p>
                <!-- ADDRESS OF USER IN SESSION -->
                <?php echo '<input id="session_region" type="hidden" value="'.$_SESSION['userregion'].'" />'; ?>
                <?php echo '<input id="session_province" type="hidden" value="'.$_SESSION['userprovince'].'" />'; ?>
                <?php echo '<input id="session_municipality" type="hidden" value="'.$_SESSION['usermunicipality'].'" />'; ?>
                <?php echo '<input id="session_barangay" type="hidden" value="'.$_SESSION['userbarangay'].'" />'; ?>
              </div>
              <!-- <v-color-picker class="ma-2" dot-size="30" value="#eee"></v-color-picker> -->
              <!-- COLOR PICKER -->
              <div class="card-body">
                <div class="row">
                  <div class="text-left col-lg-6 col-md-6 col-xl-6">
                    <v-btn color="rgb(41, 152, 242)" dark large data-toggle="modal" data-target="#AddInspectionRecord">
                      <v-icon left>mdi-plus</v-icon> Add Inspections Record
                    </v-btn>
                  </div>
                  <div class="text-right col-lg-6 col-md-6 col-xl-6">
                    <v-btn href="import.php" class="mx-2" fab dark small color="rgb(165, 3, 252)" @click="dialog_import = true">
                      <v-icon dark>
                        mdi-database-import
                      </v-icon>
                    </v-btn>
                    <v-btn class="mx-2" fab dark small color="rgb(29, 194, 78)" @click.stop="dialog_export = true">
                      <v-icon dark>
                        mdi-database-export
                      </v-icon>
                    </v-btn>
                  </div>
                </div><br>
                <div>
                  <template>
                    <!--  <v-card> -->
                    <v-card-title>
                      <img src="../assets/img/logo/dilg.png" style="width: 70px" alt="">
                      <img src="../assets/img/logo/bfp.png" style="width: 70px; margin-left: 20px" alt="">
                      <v-spacer></v-spacer>
                      <v-col cols="12" sm="2" md="2" lg="3">
                        <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" width="20" single-line hide-details></v-text-field>
                      </v-col>
                    </v-card-title>
                    <v-data-table :headers="headers" :items="bfpInspections" :search="search" :items-per-page="10" :single-expand="singleExpand" :expanded.sync="expanded" show-expand class="elevation-1">
                      
                      <template v-slot:item.address="{ item }">
                        <td>{{ item.barangay }}&nbsp;{{ item.municipality }},&nbsp;{{ item.province }}</td>
                      </template>

                      <template v-slot:item.actions="{ item }">
                        <v-icon small style="color: orange" class="mr-2" @click="selectFsic(item)">
                          mdi-pencil
                        </v-icon>
                        <v-icon small style="color: indigo" class="mr-2" @click="printFsicRecord(item)">
                          mdi-printer
                        </v-icon>
                        <v-icon small style="color: green" class="mr-2" @click="selectFsic(item)">
                          mdi-file-pdf
                        </v-icon>
                        


                        <!-- <v-tooltip bottom>
                          <template v-slot:activator="{ on }">
                            <v-btn color="primary" dark v-on="on">Button</v-btn>
                          </template>
                          <span>Tooltip</span>
                        </v-tooltip> -->
                        <v-icon small style="color: red" @click="archiveFsicRecord(item)">
                          mdi-archive-arrow-down
                        </v-icon>
                      </template>
                      <template v-slot:expanded-item="{ headers, item }">
                        <tr>
                          <td :colspan="headers.length" style="border: 0"><strong style="color: black; font-weight: 500">Establish Date:</strong> {{ item.establish_date }}</td>
                        </tr>
                        <tr>
                          <td :colspan="headers.length" style="border: 0"><strong style="color: black; font-weight: 500">FSIC:</strong> {{ item.fsic }}</td>
                        </tr>
                        <tr>
                          <td :colspan="headers.length" style="border: 0"><strong style="color: black; font-weight: 500">OR #:</strong> {{ item.ornum }}</td>
                        </tr>
                        <tr>
                          <td :colspan="headers.length" style="border: 0"><strong style="color: black; font-weight: 500">Amount:</strong> &#8369;{{ item.amount }}</td>
                        </tr>
                      </template>
                    </v-data-table>
                    <!--   </v-card> -->
                  </template>
                  <template>
                    <v-snackbar v-model="snackbar_saved" color="success" :right="true" :bottom="true" :multi-line="true">
                      <v-icon>
                        mdi-check-circle-outline
                      </v-icon>
                      {{ newUser.establishment }} saved successfully!
                      <v-btn color="red" text @click="snackbar_saved = false">
                        <v-icon>
                          mdi-close-circle-outline
                        </v-icon>
                      </v-btn>
                    </v-snackbar>
                  </template>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FSIC RECORD MODAL -->
    <?php include('modals/modals.php'); ?>
    <!-- END OF FSIC RECORD MODAL -->
    <template>
    <v-row justify="center">
        <v-dialog v-model="dialog_import" max-width="290">
            <v-card>
                <v-card-title class="headline">Importing Inspection Data</v-card-title>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <template>
                                    <v-file-input show-size counter multiple label="Import (.sql) data" accept=".sql"></v-file-input>
                                </template>
                            </div>
                        </div>
                    </div>
                <v-card-actions>
                    <v-spacer></v-spacer>

                    <v-btn color="green darken-1" text @click="dialog_import = false">
                        Disagree
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-row>

    <v-row justify="center">
        <v-dialog v-model="dialog_export" max-width="290">
            <v-card>
                <v-card-title class="headline">Exporting Inspection Data<</v-card-title> <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                          <form method="post" action="excel.php">
                            <v-btn type="submit" name="export_excel" color="rgb(15, 189, 116)" class="w-100" dark large>
                                <v-icon left>mdi-microsoft-excel</v-icon> Export to Excel
                            </v-btn>
                          </form>
                        </div>
                        <div class="col-md-12">
                            <v-btn href="export.php" color="rgb(128, 15, 189)" class="w-100">
                                <v-icon left>mdi-database</v-icon> Export to Sql
                            </v-btn>
                        </div>
                    </div>
                </div>
            </v-card>
        </v-dialog>
      </v-row>
    </template>
  </v-app>
</div>

<a     > Export </a>
<br><br><hr><br>
<a > Import </a>
