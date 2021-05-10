<!-- INSERT Modal -->
<div class="modal fade" id="AddInspectionRecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white" style="background-color: #de0c3b !important">
                <h5 class="modal-title" id="exampleModalLabel">Add Inspection Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Name Of Estalishment</label>
                                    <input v-model="newUser.establishment" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <v-col cols="12" sm="12" md="12" style="margin-top: -36px">
                                        <v-select v-model="newUser.inspector" :items="inspectors" attach chips label="Inspector(s)" multiple></v-select>
                                    </v-col>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -30px">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">First Name</label>
                                    <input v-model="newUser.fname" type="text" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Middle Initial</label>
                                    <input v-model="newUser.mname" type="text" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Last Name</label>
                                    <input v-model="newUser.lname" type="text" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Amount</label>
                                    <input type="number" class="form-control w-100" v-model="newUser.amount" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                    <v-col cols="12" sm="12" md="12" style="margin-top: -25px">
                                        <v-select v-model="newUser.occupancy" :items="occupancies" attach label="Occupancy"></v-select>
                                    </v-col>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" v-model="newUser.date" type="date" />
                                    <!--  <div class="col-md-8">
                                <div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
                                <input class="form-control" size="11" type="text" value="" readonly name="bday" id="bday">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -25px">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">FSIC Series</label>
                                    <input v-model="newUser.fsic" type="text" value="RO1-056-AFS-LU-" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">OR#</label>
                                    <input type="number" v-model="newUser.or" class="form-control" style="width: 100%" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <v-autocomplete style="margin-top: 27px" v-model="newUser.region" :items="states" dense label="Region" :rules="[rules.required]" @change="choose_region()"></v-autocomplete>
                            </div>
                            <div class="col-md-3">
                                <v-autocomplete style="margin-top: 27px" v-model="newUser.province" :items="provinces" dense label="Province" :rules="[rules.required]" @change="choose_province()"></v-autocomplete>
                            </div>
                            <div class="col-md-3">
                                <v-autocomplete style="margin-top: 26px" v-model="newUser.municipality" :items="municipalities" dense label="Municipality" :rules="[rules.required]" @change="choose_municipality()"></v-autocomplete>
                            </div>
                            <div class="col-md-3">
                                <v-autocomplete style="margin-top: 26px" v-model="newUser.barangay" :items="barangays" dense label="Barangay" :rules="[rules.required]"></v-autocomplete>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" @click="addFsicRecord" class="btn btn-success" id="btn-save_record">Save Record</button>
            </div>
        </div>
    </div>
</div>


<!-- UPDATE Modal -->
<div class="modal fade" id="UpdateInspectionRecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white" style="background-color: #de0c3b !important">
                <h5 class="modal-title" id="exampleModalLabel">Update Inspection Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Name Of Estalishment</label>
                                    <input v-model="currentInspection.establishment" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Occupancy</label>
                                    <input v-model="currentInspection.occupancy" type="text" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">First Name</label>
                                    <input v-model="currentInspection.firstname" type="text" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Middle Initial</label>
                                    <input v-model="currentInspection.middlename" type="text" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Last Name</label>
                                    <input v-model="currentInspection.lastname" type="text" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Amount</label>
                                    <input type="number" class="form-control w-100" v-model="currentInspection.amount" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">OR#</label>
                                    <input type="number" v-model="currentInspection.ornum" class="form-control w-100" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" v-model="currentInspection.establish_date" type="date" />
                                    <!--  <div class="col-md-8">
                                <div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
                                <input class="form-control" size="11" type="text" value="" readonly name="bday" id="bday">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">FSIC Series</label>
                                    <input v-model="currentInspection.fsic" type="text" value="RO1-056-AFS-LU-" class="form-control" required />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" @click="editFsicRecord" class="btn btn-success" id="btn-save_record">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- 
<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Importing Inspection Data</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <template>
                                <v-file-input show-size counter multiple label="Import (.sql) data" accept=".sql"></v-file-input>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <v-btn text small data-dismiss="modal">Close</v-btn>
                <v-btn text small data-dismiss="modal">Go</v-btn>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Exporting Inspection Data</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <v-btn color="rgb(15, 189, 116)" class="w-100" dark large data-toggle="modal" data-target="#AddInspectionRecord">
                                <v-icon left>mdi-microsoft-excel</v-icon> Export to Excel
                            </v-btn>
                        </div>
                        <div class="col-md-12">
                            <v-btn color="rgb(128, 15, 189)" class="w-100" dark large data-toggle="modal" data-target="#AddInspectionRecord">
                                <v-icon left>mdi-database</v-icon> Export to Sql
                            </v-btn>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <v-btn text small data-dismiss="modal">Close</v-btn>
                </div>
            </div>
        </div>
    </div>
</div> -->

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
</template>

<template>
    <v-row justify="center">
        <v-dialog v-model="dialog_export" max-width="290">
            <v-card>
                <v-card-title class="headline">Exporting Inspection Data<</v-card-title> <div class="container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <v-btn color="rgb(15, 189, 116)" class="w-100" dark large data-toggle="modal" data-target="#AddInspectionRecord">
                                        <v-icon left>mdi-microsoft-excel</v-icon> Export to Excel
                                    </v-btn>
                                </div>
                                <div class="col-md-12">
                                    <v-btn color="rgb(128, 15, 189)" class="w-100" dark large data-toggle="modal" data-target="#AddInspectionRecord">
                                        <v-icon left>mdi-database</v-icon> Export to Sql
                                    </v-btn>
                                </div>
                            </div>
                        </div>

                        <v-card-actions>
                            <v-spacer></v-spacer>

                            <v-btn color="green darken-1" text @click="dialog_export = false">
                                Disagree
                            </v-btn>
                        </v-card-actions>
            </v-card>
        </v-dialog>
    </v-row>
</template>
