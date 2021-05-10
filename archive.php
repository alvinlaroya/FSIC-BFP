<div id="fsic_inspection_archives">
  <div style="margin-top: 60px">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-danger">
              <h4 class="card-title ">Fire Safety Inspection Record Management System (Archives)</h4>
              <p class="card-category"> Agoo, La Union</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <template>
                  <v-card>  
                    <v-card-title>
                      Archive
                      <v-spacer></v-spacer>
                      <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details></v-text-field>
                    </v-card-title>
                    <v-data-table :headers="headers" :items="bfpInspections" :search="search" :items-per-page="10" class="elevation-1">
                      <template v-slot:item.address="{ item }">
                        <td>{{ item.barangay }}&nbsp;{{ item.municipality }},&nbsp;{{ item.province }}</td>
                      </template>
                      <template v-slot:item.actions="{ item }">
                        <v-icon
                          small
                          class="mr-2"
                          @click="selectFsicUnarchive(item)"
                        >
                          mdi-package-up
                        </v-icon>
                        <v-icon
                          small
                          @click="selectFsicDelete(item)"
                        >
                          mdi-delete
                        </v-icon>
                      </template>
                    </v-data-table>
                  </v-card>
                </template>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>