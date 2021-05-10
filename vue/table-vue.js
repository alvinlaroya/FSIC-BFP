Vue.use(Vuetify);

var app = new Vue({
  vuetify: new Vuetify(),
  el: '#fsic_inspection',
  data: {
    dialog_export: false,
    dialog_import: false,
    snackbar_saved: false,
    header_card_address: null,
    inspectors: [],
    value: [],
    search: '',
    expanded: [],
    singleExpand: false,
    selected_inspectors: null,
    headers: [
      {text: 'Establishment', align: 'start', sortable: true, value: 'establishment'},
      {text: 'Inspector', value: 'inspectors'},
      {text: 'First Name', value: 'firstname'},
      {text: 'M.I', value: 'middlename'},
      {text: 'Last Name', value: 'lastname'},
      {text: 'Address', value: 'address'},
      {text: 'Occupancy', value: 'occupancy'},
      /* {text: 'Date', value: 'establish_date'}, */
     /*  {text: 'FSIC', value: 'fsic'}, */
      /* {text: 'OR #', value: 'ornum'}, */
      /* {text: 'Amount', value: 'amount'}, */
      { text: 'Actions', value: 'actions', sortable: false },
      { text: '', value: 'data-table-expand' },
    ],
    bfpInspections: [],
    onSessionId: null,
    session: [],
    options: {
      headings: {
        'establishment': 'Establishment',
        'inspectors': 'Inspector(s)',
        'firstname': 'First Name',
        'middlename': 'M.I',
        'lastname': 'Last Name',
        'address_location': 'Address',
        'occupancy': 'Occupancy',
        'establish_date': 'Establish Date',
        'fsic': 'FSIC',
        'ornum': 'OR #',
        'amount': 'Amount',
        'actions': 'Actions',
      },
      selectable:{
        mode: 'multiple', // or 'multiple'
        only: function(row) {
           return true // any condition
        }
      },
      sortable: [
        'establishment',
        'inspectors',
        'firstname',
        'middlename',
        'lastname',
        'address_location',
        'occupancy',
        'establish_date',
        'fsic',
        'ornum',
        'amount',
        'actions'
      ],
      filterable: [
        'establishment',
        'inspectors',
        'firstname',
        'middlename',
        'lastname',
        'address_location',
        'occupancy',
        'establish_date',
        'fsic',
        'ornum',
        'amount',
        'actions'
      ],
      pagination:{
        virtual: true
      },
      selectable:{
        mode: 'single', // or 'multiple'
        only: function(row) {
           return true // any condition
        }
      }
    },
    newUser: {
      establishment: '',
      inspector: '',
      fname: '',
      mname: '',
      lname: '',
      region: '',
      province: '',
      municipality: '',
      barangay: '',
      occupancy: '',
      date: '',
      fsic: 'RO1-056-AFS-LU-2020-',
      or: '',
      amount: ''
    },
    states: [],
    regions: [],
    provinces: [],
    municipalities: [],
    barangays: [],
    occupancies: [
      "Assembly	Educational", "Health Care", "Detention and Correctional", "Residential", "Merchantile", "Businesss", "Insdustrial", "Storage", "Mixed Occupancies", "Miscellaneous"
    ],
    dataTable: null,
    currentInspection: {},
    idToEdit: null,
    messages: 'awgwag',
    inputs: '',
    print: null,
    rules: {
      required: value => !!value || 'Required.',
      min: v => v.length >= 8 || 'Min 8 characters',
      emailMatch: () => ('The email and password you entered don\'t match'),
      emailRequired: v => !!v || 'E-mail is required',
      emailValid: v => /.+@.+/.test(v) || 'E-mail must be valid',
      sizeLimit: value => !value || value.size < 2000000 || 'Avatar size should be less than 2 MB!'
  },
  },
  mounted() {
    this.display_inspection();
    this.display_inspectors();
    this.json_states();
    this.session_user();
  },
  methods: {
    session_user(){
      var id = $("#session_id").val();
      let user = {
        user_id: id
      }
      var formData = this.toFormData(user);
      axios.post('../controller/session.php', formData).then(response => {
          /* app.onSessionId =  */
          this.onSessionId = response.data.html[0].id
          this.session = response.data.html[0]
      })
    },
    choose_region() {
      app.provinces = []
      app.municipalities = []
      app.barangays = []
      /* 'https://raw.githubusercontent.com/flores-jacob/philippine-regions-provinces-cities-municipalities-barangays/master/philippine_provinces_cities_municipalities_and_barangays_2019v2.json' */
      axios.get('../assets/json_api/states.json').then(response => {
          console.log(response.data["01"].province)
          for (var province in response.data[app.newUser.region].province_list) {
              if (response.data[app.newUser.region].province_list.hasOwnProperty(province)) {
                  app.provinces.push(province);
                  console.log(app.provinces)
                  /*  app.provinces.push(state[app.user.region].provinces) */
              }
          }

      })

  },
  choose_province() {
      app.municipalities = []
      axios.get('../assets/json_api/states.json').then(response => {
          var region = response.data[app.newUser.region].province_list[app.newUser.province];
          console.log(app.newUser.region)
          for (var municipality in region.municipality_list) {

              if (region.municipality_list.hasOwnProperty(municipality)) {
                  app.municipalities.push(municipality);

                  /*  app.provinces.push(state[app.user.region].provinces) */
              }
              console.log(app.provinces)
          }

      })

  },
    choose_municipality() {
        app.barangays = []
        axios.get('../assets/json_api/states.json').then(response => {
            var region = response.data[app.newUser.region].province_list[app.newUser.province].municipality_list[app.newUser.municipality].barangay_list;

            console.log(region)
            app.barangays = region

            /*   console.log(app.user.region)
              for (var barangay in region.barangay_list) {
                  
                  if (region.barangay_list.hasOwnProperty(barangay)) {
                      app.barangays.push(barangay);
                      
                      app.provinces.push(state[app.user.region].provinces)
                  }
                  
              }
              console.log(app.barangays) */

        })

    },
    json_states() {
        axios.get('../assets/json_api/states.json').then(response => {
            console.log("STATES")
            var number = '01';


            for (var state in response.data) {
                if (response.data.hasOwnProperty(state)) {
                    app.states.push(state);

                    /*  app.provinces.push(state[app.user.region].provinces) */
                }
            }


        })
    },
    display_inspectors() {      
      axios.get('../controller/view_inspector_active.php').then(response => {
        var i;
        for(i=0; i < response.data.html.length; i++){
          var fullname = response.data.html[i].position + ' ' + response.data.html[i].fname + ' ' + response.data.html[i].mname + ' ' + response.data.html[i].lname;
          this.inspectors.push(fullname)
        }
        
      })
    },
    display_inspection() {
      var region = $("#session_region").val();
      var province = $("#session_province").val();
      var municipality = $("#session_municipality").val();
      var barangay = $("#session_barangay").val();

      axios.get('../controller/view_inspection.php?r=' +region+'&p='+province+'&m='+municipality+'&b='+barangay).then(response => {
        this.bfpInspections = response.data.html
      })

      this.header_card_address = region + ' ' + barangay + ' ' + municipality + ', ' + province
    },
    selectFsic(inspections) {
      console.log(inspections)
      this.selected_inspectors = inspections.inspectors
      $('#UpdateInspectionRecord').modal('show');
      app.currentInspection = inspections;
    },
    addFsicRecord() {
      var formData = app.toFormData(app.newUser);
      axios.post('../controller/insert_inspection.php', formData).then(response => {
        if (response.data.error) {
          console.log(response.data.message);
          console.table(response.data)
        } else {
          this.display_inspection();
          Swal.fire(
            'Record Added!',
            'You succesfully add the record!',
            'success'
          )
          $('#AddInspectionRecord').modal('hide');   
          app.snackbar_saved = true
          app.newUser = {}
        }
      })
    },
    editFsicRecord() {
      var formData = app.toFormData(app.currentInspection);
      axios.post('../controller/update_inspection.php', formData).then(response => {
        app.currentInspection = {};
        if (response.data.error) {
          console.log(response.data.message);
          console.table(response.data)
        } else {
          app.display_inspection();
          Swal.fire(
            'Record Updated!',
            'You succesfully Update the record!',
            'success'
          )
          $('#UpdateInspectionRecord').modal('hide');
        }
      })
    },
    pdf(inspections){
      var toPrint = [];
      toPrint = inspections
      window.open('../includes/makepdf.php?establishment=' + toPrint.establishment + '&inspectors=' + toPrint.inspectors + '&firstname=' + toPrint.firstname +
      '&middlename=' + toPrint.middlename + '&lastname=' + toPrint.lastname + '&address=' + toPrint.address_location + '&occupancy=' + toPrint.occupancy +
      '&date=' + toPrint.establish_date + '&fsic=' + toPrint.fsic + '&ornum=' + toPrint.ornum + '&amount=' + toPrint.amount)
    },
    printFsicRecord(inspections) {
      var toPrint = [];
      toPrint = inspections
      console.log("POTANGINA")
      var address = `${inspections.barangay} ${inspections.municipality} ${inspections.province}`
      /* window.open('../print.php?establishment=' + toPrint.establishment + '&establish_date=' +toPrint.establish_date+ '&inspectors=' + toPrint.inspectors + '&firstname=' + toPrint.firstname +
      '&middlename=' + toPrint.middlename + '&lastname=' + toPrint.lastname + '&address=' + address+ '&occupancy=' + toPrint.occupancy +
      '&date=' + toPrint.establish_date + '&fsic=' + toPrint.fsic + '&ornum=' + toPrint.ornum + '&amount=' + toPrint.amount) */

      window.open(`../print.php?establishment=${toPrint.establishment}&establish_date=${toPrint.establish_date}&inspectors=${toPrint.inspectors}&firstname=${toPrint.firstname}&
      middlename=${toPrint.middlename}&lastname=${toPrint.lastname}&address=${address}&occupancy=${toPrint.occupancy}&date=${toPrint.establish_date}&fsic=${toPrint.fsic}&ornum=${toPrint.ornum}&amount=${toPrint.amount}`)
      /* console.log("GUMANA KA")
      app.currentInspection = inspections;
      var formData = app.toFormData(app.currentInspection);
      axios.post('includes/makepdf.php', formData).then(response => {
        app.currentInspection = {};
        if(response.data.error) {
          console.log(response.data.message);
        } else {
          app.display_inspection();
          console.table(response.data)
        }
      }).catch(error => {
        console.log(error)
        console.log("POTANGINA NAMAN TALAGA")
      }) */
    },
    archiveFsicRecord(inspections) {
      app.currentInspection = inspections;
      var formData = app.toFormData(app.currentInspection);

      Swal.fire({
        title: 'Are you sure?',
        text: 'This record will be stored in archives',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, archive it!'
      }).then((result) => {
        if (result.value) {
          axios.post('../controller/archive_inspection.php', formData).then(response => {
            app.currentInspection = {};
            if (response.data.error) {
              console.log(response.data.message);
              console.table(response.data)
            } else {
              this.display_inspection();
              Swal.fire(
                'Record Archived!',
                'You succesfully Archive the record!',
                'success'
              )
              $('#mydatatable').DataTable();
            }
          })
        }
      })
    },
    toFormData(obj) {
      var fd = new FormData();
      for (var i in obj) {
        fd.append(i, obj[i]);
      }
      return fd;
    },
  }
});


