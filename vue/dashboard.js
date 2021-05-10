var firebaseConfig = {
    apiKey: "AIzaSyDNb8hNdOJDq5mBE6BmkWuiRK6mc1dgGEs",
    authDomain: "mobalert-955bf.firebaseapp.com",
    databaseURL: "https://mobalert-955bf.firebaseio.com",
    projectId: "mobalert-955bf",
    storageBucket: "mobalert-955bf.appspot.com",
    messagingSenderId: "625319003477",
    appId: "1:625319003477:web:e6517323d73bc4162c9bdc",
    measurementId: "G-V069QBNT2G"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

Vue.use(Vuetify);

var dashboard = new Vue({
    el: '#dashboard_app',
    vuetify: new Vuetify(),
    inject: ['theme'],
    data: {
        session: [],
        picker: new Date().toISOString().substr(0, 10),
        fsicApplicants: [],
        folders: [],
        alerts: [],
        currentApplicant: {},
        currentAlert: {},
        confirmedApplicant: [],
        addToFolder: {},
        attach: {
            id: null,
            fsic1: false,
            fsica: false,
            fsicb: false,
            fsicc: false,
            fsicd: false,
            fsice: false,
            fsicf: false,
            fsicg: false,
            fsich: false,
            fsici: false,
            fsicj: false,
            fsick: false,
            fsicl: false
        },
        showAlertsNavigate: null,
        applicantPhone: null
    },
    mounted(){
        this.session_user()
        this.displayFolders()
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
        displayFolders(){
            axios.get('../controller/view_folders.php').then(response => {
                this.folders = response.data.html
            })
        },
        viewApplicant(fsic){
            this.currentApplicant = fsic
            console.log(this.currentApplicant)
            $("#applicantModalView").modal("show");
        },
        confirmApplicant(fsic){ 
            this.addToFolder = fsic
            this.confirmedApplicant = fsic
            console.log(fsic)
            this.attach.id = fsic
            this.applicantPhone = fsic.phone
            $("#applicantModalConfirm").modal("show");
            
        },
        dowloadDocument(fsic){
            this.addToFolder = {
                address: fsic.complete_address,
                bin: fsic.bin,
                tin: fsic.tin,
                email: fsic.email,
                establishment: fsic.establishment,
                name: fsic.fullname,
                business_nature: fsic.business_nature,
                phone: fsic.phone,
                representative: fsic.representative,
                tradename: fsic.tradename
            }
            this.downloadPdf()
        },
        downloadPdf(){
            window.open('../includes/overwritepdf.php?address='+this.addToFolder.address+'&bin='+this.addToFolder.bin+'&email='+this.addToFolder.email+'&establishment='+this.addToFolder.establishment+'&name='+this.addToFolder.name+'&nature='+this.addToFolder.business_nature+'&phone='+this.addToFolder.phone+'&representative='+this.addToFolder.representative+'&tin='+this.addToFolder.tin+'&tradename='+this.addToFolder.tradename);
        },
        sendApplication(){
            let dateId = new Date();
            let timeId = dateId.getTime();
            let counter = timeId;
            var applicationFire = {
                id: counter,
                applicant:this.attach.id,
                phone: this.addToFolder.phone,
                fsic1: this.attach.fsic1,
                fsica: this.attach.fsica,
                fsicb: this.attach.fsicb,
                fsicc: this.attach.fsicc,
                fsicd: this.attach.fsicd,
                fsice: this.attach.fsice,
                fsicf: this.attach.fsicf,
                fsicg: this.attach.fsicg,
                fsich: this.attach.fsich,
                fsici: this.attach.fsici,
                fsicj: this.attach.fsicj,
                fsick: this.attach.fsick,
                fsicl: this.attach.fsicl
            }

            var formData = dashboard.toFormData(applicationFire);
            axios.post('../controller/send_sms_attached.php', formData).then(response => {
                if (response.data.error) {
                console.log(response.data.message);
                } else {
                    Swal.fire(
                        'Attach Sent!',
                        'You succesfully sent the applicant attachment!',
                        'success'
                    )
                    $("#applicantModalConfirm").modal("hide");
                    this.displayFolders()
                    this.attach = {}
                }
            })


            //adding folder applicant data
            var formDataFolder = dashboard.toFormData(this.addToFolder);
            axios.post('../controller/add_to_folder.php', formDataFolder).then(response => {
                if (response.data.error) {
                    console.log(response.data.message);
                } else {
                    console.log("ADD FOLDER FAILED")
                }
            })         
        
/* 
            let db = firebase.database().ref("applicant/" + counter);
            db.set(applicationFire);
            this.attach  = {
                id: null,
                fsic1: false,
                fsica: false,
                fsicb: false,
                fsicc: false,
                fsicd: false,
                fsice: false,
                fsicf: false,
                fsicg: false,
                fsich: false,
                fsici: false,
                fsicj: false,
                fsick: false,
                fsicl: false
            } */

           /*  console.log(applicationFire)
            Swal.fire(
                'Attached Sent!',
                'You succesfully sent the attached document!',
                'success'
              ) */
        },
        showAlerts(alerts){
            $("#showAlerts").modal("show");
            this.currentAlert = alerts
            this.showAlertsNavigate = 'https://waze.com/ul?ll='+alerts.witness_lat+','+alerts.witness_long+'&navigate=yes'
        },
        toFormData(obj) {
            var fd = new FormData();
            for (var i in obj) {
              fd.append(i, obj[i]);
            }
            return fd;
        }
    },
    created(){
        var fsicdb = firebase.database().ref("fsic/");
        var fsicsdb = [];

        fsicdb.on("child_added", function(data){
            var fsicValue = data.val();
     /*        console.log(fsicValue); */
            fsicsdb.push(fsicValue);
        });
        this.fsicApplicants = fsicsdb;
  /*       console.log(this.fsicApplicants); */


        var alertdb = firebase.database().ref("inccidents/");
        var alertsdb = [];

        alertdb.on("child_added", function(data){
            var alertValue = data.val();
    /*        console.log(fsicValue); */
            alertsdb.push(alertValue);
            
        });
        this.alerts = alertsdb;
/*       console.log(this.fsicApplicants); */
    }
});