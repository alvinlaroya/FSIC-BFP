Vue.use(Vuetify);

var archives = new Vue({
    vuetify: new Vuetify(),
    el: '#fsic_inspection_archives',
    data: {
      search: '',
      headers: [
        {text: 'Establishment', align: 'start', sortable: true, value: 'establishment'},
        {text: 'Inspector', value: 'inspectors'},
        {text: 'First Name', value: 'firstname'},
        {text: 'M.I', value: 'middlename'},
        {text: 'Last Name', value: 'lastname'},
        {text: 'Address', value: 'address'},
        {text: 'Occupancy', value: 'occupancy'},
        {text: 'Date', value: 'establish_date'},
        {text: 'FSIC', value: 'fsic'},
        {text: 'OR #', value: 'ornum'},
        {text: 'Amount', value: 'amount'},
        { text: 'Actions', value: 'actions', sortable: false },
      ],
      bfpInspections: [],
      header_card_address: null,
      newUser: {
        establishment: '', 
        inspector: '',
        fname: '',
        mname: '',
        lname: '',
        address: '',
        occupancy: '',
        date: '',
        fsic: '',
        or: '',
        amount: ''
      },
      currentInspection: {},
      idToEdit: null,
      messages: 'awgwag',
      inputs: '',
    },
    mounted(){
       this.display_inspection_archives()
    },
   methods: {
    display_inspection_archives(){
      var region = $("#session_region").val();
      var province = $("#session_province").val();
      var municipality = $("#session_municipality").val();
      var barangay = $("#session_barangay").val();
      
      axios.get('../controller/view_archives.php?r=' +region+'&p='+province+'&m='+municipality+'&b='+barangay).then(response => {
        this.bfpInspections = response.data.html
      }) 

      this.header_card_address = region + ' ' + barangay + ' ' + municipality + ', ' + province

    },
    selectFsicDelete(inspections){
        archives.currentInspection = inspections;
        this.deleteFsicRecord();
    },
    selectFsicUnarchive(inspections){
        archives.currentInspection = inspections;
        this.unarchiveFsicRecord();
    },
    unarchiveFsicRecord(){
        var formData = archives.toFormData(archives.currentInspection);
        Swal.fire({
          title: 'Are you sure?',
          text: 'This record will be stored again in BFP Inspections',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, unarchive it!'
        }).then((result) => {
          if (result.value) {
            axios.post('../controller/archive_inspection.php', formData).then(response => {
              archives.currentInspection = {};
              axios.post('../controller/unarchive_inspection.php', formData).then(response => {
                archives.currentInspection = {};
                if(response.data.error) {
                console.log(response.data.message);
                console.table(response.data)
                } else {
                    archives.display_inspection_archives();
                    Swal.fire(
                        'Record Unarchive!',
                        'You succesfully unarchived the record!',
                        'success'
                    )
                }
              }) 
            })
          }
        })     
    },
    deleteFsicRecord(){
        var formData = archives.toFormData(archives.currentInspection);
        Swal.fire({
            title: 'Are you sure?',
            text: 'This record will be permanantly deleted',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
            axios.post('../controller/delete_inspection.php', formData).then(response => {
                archives.currentInspection = {};
                if(response.data.error) {
                console.log(response.data.message);
                console.table(response.data)
                } else {
                archives.display_inspection_archives();
                Swal.fire(
                    'Record Deleted!',
                    'You succesfully Delete the record!',
                    'success'
                )
                }
            }) 
            }
        })
    },
    cancelEditFsicRecord(){
      archives.display_inspection_archives();
    },
     toFormData(obj){
       var fd = new FormData();
       for(var i in obj){
         fd.append(i, obj[i]);
       }
       return fd;
     },
   }
});
