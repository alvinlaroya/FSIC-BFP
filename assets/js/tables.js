  /* $(document).ready(function() {
    $().ready(function() {
     
      //Archive_Inspector();
    });
  });
 */
Insert_Record();
View_Record();
Get_Inspection();
Update_Inspection();
Archive_Inspection();

Insert_Inspector();
View_Inspector();
Get_Inspector();
Update_Inspector();

  function Insert_Record(){
          $(document).on('click', '#btn-save_record', function(){
              var establishment = $('#establishment').val();
              var inspector = $('#inspectors').val();
              var firstname = $('#firstname').val();
              var middlename = $('#middlename').val();
              var lastname = $('#lastname').val();
              var address = $('#address').val();
              var occupancy = $('#occupancy').val();
              var date = $('#date').val();
              var fsic = $('#fsic').val();
              var ornum = $('#ornum').val();
              var amount = $('#amount').val();

              $.ajax(
                  {
                      url: 'controller/insert_inspection.php',
                      method: 'post',
                      data:{
                          responseEstablishment : establishment,
                          responseInspectors : inspector,
                          responseFirstname : firstname,
                          responseMiddlename : middlename,
                          responseLastname : lastname,
                          responseAddress : address,
                          responseOccupancy : occupancy,
                          responseDate : date,
                          responseFsic : fsic,
                          responseOrnum : ornum,
                          responseAmount : amount
                      },
                      success: function(){
                          Swal.fire(
                          'Record Saved!',
                          'You inserted a record successfuly!',
                          'success'
                          )
                        /*   View_Record(); */
                          $('#AddInspectionRecord').modal('hide');
                      }    
                  })

              $('#establishment').val("");
              $('#inspectors').val("");
              $('#firstname').val("");
              $('#middlename').val("");
              $('#lastname').val("");
              $('#address').val("");
              $('#occupancy').val("");
              $('#date').val("");
              $('#fsic').val("");
              $('#ornum').val("");
              $('#amount').val("");
              start();
                      function start(){
                        Push.create("MOBAlert", {
                          body: establishment + ' uInserted',
                          icon: 'includes/push-notification/MOBALERT_LOGO.png',
                          timeout: 20000,
                          onClick: function () {
                            location.href = "<?php echo'http://localhost/push/home.php';?>";
                            this.close();
                          },
                        });
                      }  

          });
      }

      function View_Record(){
              $.ajax(
                  {
                      url: 'controller/view_inspection.php',
                      method: 'post',
                      success(data){
                          data = $.parseJSON(data);
                          if(data.status == 'success'){
                              $('#table').html(data.html);
                          }
                      }
                  }
              )
      }

      function Get_Inspection(){
      $(document).on('click', '#btn_edit', function(){
          var ID = $(this).attr('data-id');
          
          $.ajax(
              {
                  url: 'get_inspection.php',
                  method: 'post',
                  data: {responseId: ID},
                  dataType: 'JSON',
                  success: function(data){
                      $('#update_userId').val(data[0]);
                      $('#update_establishment').val(data[1]);
                      $('#update_inspectors').val(data[2]);
                      $('#update_firstname').val(data[3]);
                      $('#update_middlename').val(data[4]);
                      $('#update_lastname').val(data[5]);
                      $('#update_address').val(data[6]);
                      $('#update_occupancy').val(data[7]);
                      $('#update_date').val(data[8]);
                      $('#update_fsic').val(data[9]);
                      $('#update_ornum').val(data[10]);
                      $('#update_amount').val(data[11]);
                      $('#UpdateInspectionRecord').modal('show');
                  }
              })
          })
      }

      

      function Update_Inspection(){
          $(document).on('click', '#btn-update_record', function(){
            var update_id = $('#update_userId').val();
            var new_establishment = $('#update_establishment').val();
            var new_inspectors = $('#update_inspectors').val();
            var new_firstname = $('#update_firstname').val();
            var new_middlename = $('#update_middlename').val();
            var new_lastname = $('#update_lastname').val();
            var new_address = $('#update_address').val();
            var new_occupancy = $('#update_occupancy').val();
            var new_date = $('#update_date').val();
            var new_fsic = $('#update_fsic').val();
            var new_ornum = $('#update_ornum').val();
            var new_amount = $('#update_amount').val();

            $.ajax(
              {
                url: 'controller/update_inspection.php',
                method: 'post',
                data: {
                  response_Id: update_id,
                  response_establishment: new_establishment,
                  response_inspectors: new_inspectors,
                  response_firstname: new_firstname,
                  response_middlename: new_middlename,
                  response_lastname: new_lastname,
                  response_address: new_address,
                  response_occupancy: new_occupancy,
                  response_date: new_date,
                  response_fsic: new_fsic,
                  response_ornum: new_ornum,
                  response_amount: new_amount
                  },
                  success: function(data){
                    View_Record();
                    Swal.fire(
                      'Record Updated!',
                      'You succesfully update the record!',
                      'success'
                    )
                    $('#UpdateInspectionRecord').modal('hide');
                  }
              }
            )
          })
      }


      function Archive_Inspection(){
      $(document).on('click', '#btn_archive', function(){
          var ID = $(this).attr('data-id');
          console.log(ID);
          Swal.fire({
            title: 'Are you sure?',
            text: 'This record will be stored in archives',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, archive it!'
          }).then((result) => {
            if (result.value) {
              $.ajax(
              {
                  url: 'controller/archive_inspection.php',
                  method: 'post',
                  data: {responseId: ID},
                  success: function(data){
                  Swal.fire(
                  'Record Archived!',
                  'Your file has been archive successfuly.',
                  'success'
                  )
                  View_Record();
                  }
              })
            }
            start();
            function start(){
              Push.create("MOBAlert", {
                body: 'Record Archived',
                icon: 'includes/push-notification/MOBALERT_LOGO.png',
                timeout: 20000,
                onClick: function () {
                  location.href = "<?php echo'http://localhost/push/home.php';?>";
                  this.close();
                },
              });
            }
          })
        })
      }


      function Insert_Inspector(){
        $(document).on('click', '#btn-save_inspector', function(){
            var position = $('#position').val();
            var firstname = $('#inspector_fname').val();
            var middlename = $('#inspector_mname').val();
            var lastname = $('#inspector_lname').val();
            var address = $('#inspector_address').val();
            $.ajax(
                {
                    url: 'controller/insert_inspector.php',
                    method: 'post',
                    data:{
                        responsePosition : position,
                        responseInspectorFirstname : firstname,
                        responseInspectorMiddlename : middlename,
                        responseInspectorLastname : lastname,
                        responseInspectorAddress : address,
                    },
                    success: function(data){
                        Swal.fire(
                        'Record Saved!',
                        'You inserted a record successfuly!',
                        'success'
                        )
                        View_Record();
                        $('#AddFireInspector').modal('hide');
                    }    
                })
    
            $('#position').val("");
            $('#inspector_firstname').val("");
            $('#inspector_middlename').val("");
            $('#inspector_lastname').val("");
            $('#inspector_address').val("");
            start();
                    function start(){
                      Push.create("MOBAlert", {
                        body: position + ' uInserted',
                        icon: 'includes/push-notification/MOBALERT_LOGO.png',
                        timeout: 20000,
                        onClick: function () {
                          location.href = "<?php echo'http://localhost/push/home.php';?>";
                          this.close();
                        },
                      });
                    }  
    
        });
    }
    
    function View_Inspector(){
            $.ajax(
                {
                    url: 'controller/view_inspector.php',
                    method: 'post',
                    success(data){
                        data = $.parseJSON(data);
                        if(data.status == 'success'){
                            $('#inspector_table').html(data.html);
                        }
                    }
                }
            )
    }
    
    
    function Get_Inspector(){
    $(document).on('click', '#btn_edit_inspector', function(){
        var ID = $(this).attr('data-id');
        
        $.ajax(
            {
                url: 'get_inspector.php',
                method: 'post',
                data: {responseId: ID},
                dataType: 'JSON',
                success: function(data){
                  $('#update_userId').val(data[0]);
                    $('#update_inspector_position').val(data[1]);
                    $('#update_inspector_firstname').val(data[2]);
                    $('#update_inspector_middlename').val(data[3]);
                    $('#update_inspector_lastname').val(data[4]);
                    $('#update_inspector_address').val(data[5]);
                    $('#UpdateFireInspector').modal('show');
                }
            })
        })
    }
    
    
    
    function Update_Inspector(){
        $(document).on('click', '#btn-update_inspector', function(){
          var update_id = $('#update_userId').val();
          var new_position = $('#update_inspector_position').val();
          var new_firstname = $('#update_inspector_firstname').val();
          var new_middlename = $('#update_inspector_middlename').val();
          var new_lastname = $('#update_inspector_lastname').val();
          var new_address = $('#update_inspector_address').val();
          $.ajax(
            {
              url: 'controller/update_inspector.php',
              method: 'post',
              data: {
                response_Id: update_id,
                response_inspector_position: new_position,
                response_inspector_firstname: new_firstname,
                response_inspector_middlename: new_middlename,
                response_inspector_lastname: new_lastname,
                response_inspector_address: new_address,
                },
                success: function(data){
                  View_Record();
                  Swal.fire(
                    'Record Updated!',
                    'You succesfully update the record!',
                    'success'
                  )
                  $('#UpdateFireInspector').modal('hide');
                }
            }
          )
        })
    }
    


 