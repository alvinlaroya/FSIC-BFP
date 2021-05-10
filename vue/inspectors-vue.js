Vue.use(Vuetify);

var inspector = new Vue({
    vuetify: new Vuetify(),
    el: '#inspector',
    data: {
        session: [],
        switchStatus: 0,
        dialog_approved: false,
        search: '',
        tat: 'agwgw',
        expanded: [],
        singleExpand: false,
        headers: [
            {text: 'Avatar', value: 'avatar', sortable: false },
            {text: 'Position', align: 'start', sortable: true, value: 'position'},
            {text: 'First Name', value: 'fname'},
            {text: 'M.I', value: 'mname'},
            {text: 'Last Name', value: 'lname'},
            {text: 'Email', value: 'email'},
            {text: 'Region', value: 'region'},
            {text: 'Province', value: 'province'},
            {text: 'Municipality', value: 'municipality'},
            {text: 'Barangay', value: 'barangay'},
            /* {text: 'Date', value: 'establish_date'}, */
            /*  {text: 'FSIC', value: 'fsic'}, */
            /* {text: 'OR #', value: 'ornum'}, */
            /* {text: 'Amount', value: 'amount'}, */
            { text: 'Request Action', value: 'approve', sortable: false },
        ],
        headers1: [
            {text: 'Avatar', align: 'start', value: 'avatar', sortable: false },
            {text: 'Position', value: 'position'},
            {text: 'First Name', value: 'fname'},
            {text: 'M.I', value: 'mname'},
            {text: 'Last Name', value: 'lname'},
            { text: 'Status', value: 'status', sortable: false },
            { text: 'Action', value: 'action', sortable: false },
        ],
        options: {
            selectable:{
                mode: 'multiple', // or 'multiple'
                only: function(row) {
                return true // any condition
                }
            },
            sortable: [
                'position',
                'fname',
                'mname',
                'lname',
                'email',
                'region',
                'province',
                'municipality',
                'barangay',

            ],
            filterable: [
                'position',
                'fname',
                'mname',
                'lname',
                'email',
                'region',
                'province',
                'municipality',
                'barangay',
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
        inspector_request: [],
        inspectors: [],
        checked: 'checked',
        newInspector: {
            position: '',
            fname: '',
            mname: '',
            lname: '',
            address: '',
            status: '',
        },
        currentStatus: {},
        currentInspector: {},
        currentInspectorList: {
            id: null,
            to_add : 0,
            to_archive : 0,
            to_respond_fsic : 0,
            to_accept_request : 0,
            to_switch_status : 0,
            to_active_status : 0,
        },
        acceptInspector: {},
        approve_id: null,
        to_add : 0,
        to_archive : 0,
        to_respond_fsic : 0,
        to_accept_request : 0,
        to_switch_status : 0,
        to_active_status : 0,
    },
    mounted() {
        this.display_inspector()
        this.display_inspector_request()
        this.session_user()
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
        display_inspector() {
            axios.get('../controller/view_inspector.php').then(response => {
                this.inspectors = response.data.html
            })
        },
        display_inspector_request(){
            var region = $("#session_region").val();
            var province = $("#session_province").val();
            var municipality = $("#session_municipality").val();
            var barangay = $("#session_barangay").val();

            axios.get('../controller/view_inspector_request.php?r='+region+'&p='+province+'&m='+municipality+'&b='+barangay).then(response => {
                this.inspector_request = response.data.html
                console.log(this.inspector_request)
            })
        },
        addInspector(){
            var formData = this.toFormData(this.newInspector);
            axios.post('../controller/insert_inspector.php', formData).then(response => {
                this.newInspector= {
                    position: '',
                    fname: '',
                    mname: '',
                    lname: '',
                    address: '',
                    status: ''
                };
                if(response.data.error) {
                console.log(response.data.message);
                console.table(response.data)
                } else {
                    this.display_inspector();
                    Swal.fire(
                        'Record Added!',
                        'You succesfully add the record!',
                        'success'
                    )
                    $('#AddFireInspector').modal('hide');
                }
            }) 
        },
        selectInspector(inspector) {
            this.currentInspector = inspector;
            this.switchStatus = inspector.inspector_status
        },
        change(inspector) {
            this.currentStatus = inspector;
            this.updateStatus();
        },
        updateStatus(){
            //console.log("STATUS: "  + inspector.inspector_status)
            var formData = this.toFormData(this.currentStatus);
            axios.post('../controller/update_inspector_status.php', formData).then(response => {
                this.currentStatus = {}
                if (response.data.error) {
                    console.log(response.data.message);
                    console.table(response.data)
                } else {
                    inspector.display_inspector();
                    inspectorDopdown.inspectors = this.inspectors
                }
            })
        },  
        updateInspector(){
            var formData = inspector.toFormData(this.currentInspector);
            axios.post('../controller/update_inspector.php', formData).then(response => {
              this.currentInspector = {};
              if(response.data.error) {
                console.log(response.data.message);
                console.table(response.data)
              } else {
                this.display_inspector();
                Swal.fire(
                  'Record Updated!',
                  'You succesfully Update the record!',
                  'success'
                )
                $('#UpdateFireInspector').modal('hide');
              }
            }) 
        },
        approved(id){   
            this.approve_id = id
            $("#dialogApproved").modal("show");
        },
        confirmApproved(){
            var opr1  = this.to_add == true ? 1 : 0
            var opr2  = this.to_archive == true ? 1 : 0
            var opr3  = this.to_respond_fsic == true ? 1 : 0
            var opr4  = this.to_accept_request == true ? 1 : 0
            var opr5  = this.to_switch_status == true ? 1 : 0
            var opr6  = this.to_active_status == true ? 1 : 0

            acceptInspector = {
                id: this.approve_id,
                to_add : opr1,
                to_archive :opr2,
                to_respond_fsic : opr3,
                to_accept_request: opr4,
                to_switch_status : opr5,
                to_active_status : opr6,
            }

            console.log(acceptInspector)

            /* console.log(acceptInspector) */
            var formData = inspector.toFormData(acceptInspector);
            axios.post('../controller/approved_request.php', formData).then(response => {
              if(response.data.error) {
                console.log(response.data.message);
                console.table(response.data)
              } else {
                this.display_inspector_request();
                $("#dialogApproved").modal("hide");
                Swal.fire(
                  'User Approved!',
                  'You succesfully approved the user request!',
                  'success'
                )
                
                inspector.to_add = 0
                inspector.to_archive = 0
                inspector.to_respond_fsic = 0
                inspector.to_accept_request = 0
                inspector.to_switch_status = 0
                inspector.to_active_status = 0
              }
            }) 
        },
        declined(id){
            Swal.fire({
                title: 'Are you sure?',
                text: "You will not be able to restore this user again",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, archive it!'
              }).then((result) => {
                if (result.value) {
                    axios.get('../controller/declined_request.php?id=' +id).then(response => {
                        inspector.currentInspection = {};
                        if (response.data.error) {
                      console.log(response.data.message);
                      console.table(response.data)
                    } else {
                    this.display_inspector_request();
                      Swal.fire(
                        'User Declined!',
                        'You succesfully Declined the user request!',
                        'success'
                      )
                    }
                  })
                }
            })
        },
        selectInspectorList(items){
            var to_add = items.to_add == 1 ? true : false;
            var to_archive = items.to_archive == 1 ? true : false;
            var to_respond_fsic = items.to_respond_fsic == 1 ? true : false;
            var to_accept_request = items.to_accept_request == 1 ? true : false;
            var to_switch_status = items.to_switch_status == 1 ? true : false;
            var to_active_status = items.to_active_status == 1 ? true : false;


            this.currentInspectorList.id = items.id
            this.currentInspectorList.to_add = to_add
            this.currentInspectorList.to_archive = to_archive
            this.currentInspectorList.to_respond_fsic = to_respond_fsic
            this.currentInspectorList.to_accept_request = to_accept_request
            this.currentInspectorList.to_switch_status = to_switch_status
            this.currentInspectorList.to_active_status = to_active_status
            console.log(this.currentInspectorList)
        },
        confirmUpdate(){

            var formData = inspector.toFormData(this.currentInspectorList);
            axios.post('../controller/update_inspector_list.php', formData).then(response => {
                if(response.data.error) {
                console.log(response.data.message);
                console.table(response.data)
                } else {
                    this.display_inspector();
                    Swal.fire(
                        'Fire Inspector Updated!',
                        'You succesfully update the fire inspector!',
                        'success'
                    )
                    $("#menuInspector").modal("hide");
                }
            });
        },
        toFormData(obj){
            var fd = new FormData();
            for(var i in obj){
              fd.append(i, obj[i]);
            }
            return fd;
          }
    },
    watch: {
        too_add(newValue){
            alert('switch toggled to ' + newValue);
        }
    }
});