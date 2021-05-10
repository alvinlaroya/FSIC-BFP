var user_profile = new Vue({

    el: '#tabProfile',
    data: {
      pota: "HAHAHA",
      user: {
          id: null,
          mname: null,
          lname: null,
          phone: null,
          position: null
        }
    },
    mounted(){
        this.user.id = $("#ids").val();
        this.user.mname = $("#mname").val();
        this.user.lname = $("#lname").val();
        this.user.phone = $("#phone").val();
        this.user.position = $("#positionupdate").val();
    },
    methods: {
      updateProfile() {
        let profiles = {
          id: this.user.id,
          mname: this.user.mname,
          lname: this.user.lname,
          phone: this.user.phone,
          position: this.user.position
        }
        var formData = app.toFormData(profiles);

        Swal.fire({
            title: 'Are you sure?',
            text: 'Your profile will be changed',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, update it!'
          }).then((result) => {
            if (result.value) {
                axios.post('controller/update_profile.php', formData).then(response => {
                    if (response.data.error) {
                        console.log(response.data.message);
                        console.table(response.data)
                    } else {
                        Swal.fire(
                        'Profile Updated!',
                        'You succesfully update!',
                        'success'
                        )
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
      }
    }
  });