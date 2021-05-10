$(document).ready(function(){
    var login = true;
    if(!login){
        //$('.btn-login').css('display', 'none');
        $('.login-phase').css('left', '0px');
        $('.login-phase').css('transition', '.2s ease');
    }
    $('.btn-sign').click(function(){
        $('#login-phase').fadeIn();
    });
    
    $('#close_login').click(function(){
        $('#login-phase').fadeOut();
    });


    $('.fade-in-alerts').fadeIn();


    $('.parallax-window').parallax({imageSrc: 'assets/img/city-profile.jpg'});

    /* $('.btn-login').click(function(){
        /* $('#login-phase').fadeIn(); */
    /*     alert("AWKAWHGKJH")
    }); */ 
    
    $.ajax({
             url: "http://newsapi.org/v2/top-headlines?country=ph&apiKey=c948915906cf4ef1a44f02fe585efe08",
             type: 'GET',
             dataType: 'json',
             success: function(res) {
               console.log(res)
               var count = Object.keys(res.articles).length;
               var value="";
               for (var i = 1; i < count; i++){
               value +=
               `
               <div id="row<?php echo $name; ?>" class="col-lg-12 col-md-12 col-sm-12" style="margin-top: -20px">
                    <div class="card card-stats" style="border-radius: 0px !important">
                        <div class="card-header">
                            <h5>${res.articles[i].title}</h5>
                        </div><br><br>
                        <div class="card-body">
                            <div class="text-left">
                                
                                <div class="post-img" style="margin: -20px !important">
                                    <img src="${res.articles[i].urlToImage}" alt="" style="width: 100%">
                                </div><br>
                                <div class="post-text" style="margin-bottom: 25px; font-size: 12px">
                                    <p>${res.articles[i].description}</p>
                                </div>
                                <p style="font-size: 10px;" class="text-info">Author: ${res.articles[i].author}</p>
                                <p style="font-size: 10px;" class="text-info">Publisehd at: ${res.articles[i].publishedAt}</p>
                                <div class="post-footer" style="margin-top: 20px; margin-bottom: -18px;">
                                    <div class="" style="margin: -5px;">
                                        <div class="row">
                                            <a href="${res.articles[i].url}" target="_blank" class="btn btn-white" style="width: 100%; box-shadow: 0 0 0 0;">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>`
               }
               document.getElementById('newsSection').innerHTML = value;
                 //console.log(res.aricles.lenght
             }
         });

    $('#close_login').click(function(){
        $('#login-phase').fadeOut();
    });


    $('#goToSignUp').click(function(){
        $('#login-phase').css('left', '-100%');
        $('#login-phase').css('transition', '.2s ease');
    });



    $('#openAnnexA').click(function(){
        $('#annexa').fadeIn();  
    });

    $('.btn-close-annexa').click(function(){
        $('#annexa').fadeOut();  
    });
    $('#openAnnexB').click(function(){
        $('#annexb').fadeIn();  
    });

    $('.btn-close-annexb').click(function(){
        $('#annexb').fadeOut();  
    });
    $('#openAnnexC').click(function(){
        $('#annexc').fadeIn();  
    });

    $('.btn-close-annexc').click(function(){
        $('#annexc').fadeOut();  
    });
    $('#openAnnexD').click(function(){
        $('#annexd').fadeIn();  
    });

    $('.btn-close-annexd').click(function(){
        $('#annexd').fadeOut();  
    });
    $('#openAnnexE').click(function(){
        $('#annexe').fadeIn();  
    });

    $('.btn-close-annexe').click(function(){
        $('#annexe').fadeOut();  
    });
    $('#openAnnexF').click(function(){
        $('#annexf').fadeIn();  
    });

    $('.btn-close-annexf').click(function(){
        $('#annexf').fadeOut();  
    });
    

  
    $('#tab-icon1').css('color', '#db1515');
    $('#agency-call-list').fadeOut();
    $('#buttonHide').fadeOut();
    $('#bfp_call').modal('show');
    $('#toggle-agency-call-list').click(function(){
        $('#toggle-agency-call-list').css('transform', 'rotate(360deg)');
        $('#hide-agency-call-list').css('transform', 'rotate(0deg)');
        $('#toggle-agency-call-list').css('transition', '.7s ease');
        $('#agency-call-list').fadeIn();
        $('#buttonShow').fadeOut();
        $('#buttonHide').fadeIn();
    });
    $('#hide-agency-call-list').click(function(){
        $('#hide-agency-call-list').css('transform', 'rotate(-360deg)');
        $('#toggle-agency-call-list').css('transform', 'rotate(0deg)');
        $('#hide-agency-call-list').css('transition', '.7s ease');
        $('#agency-call-list').fadeOut();
        $('#buttonHide').fadeOut();
        $('#buttonShow').fadeIn();
    });
    $('#agency-call-list').click(function(){
        $('#hide-agency-call-list').css('transform', 'rotate(-360deg)');
        $('#toggle-agency-call-list').css('transform', 'rotate(0deg)');
        $('#hide-agency-call-list').css('transition', '.7s ease');
        $('#agency-call-list').fadeOut();
        $('#buttonHide').fadeOut();
        $('#buttonShow').fadeIn();
    });
    $('#showMoreResults').click(function(){
        var value = document.getElementById("showMoreResultValue").value;
        values = Number(value);
        document.getElementById("showMoreResultValue").value = values + 8;
        console.log(values)
        readPost();
    });

   /*  $('.toggle-option').click(function(){
        $('#option').css('bottom', '0vh');
        $('#option').css('transition', '.2s ease');
    }); */
    $('.close-optionBottom').click(function(){
        $('#option').css('bottom', '0vh');
        $('#option').css('transition', '.2s ease');
    });

    
  /*   $('.toggle-chat').click(function(){
        $('#chat').css('right', '0px');
        $('#chat').css('transition', '.2s ease');
    }); */

    $('.close-chat').click(function(){
        $('#chat').css('right', '-100%');
        $('#chat').css('transition', '.2s ease');
    });

    $('#togglePost').click(function(){
        $('.announcement-container').css('bottom', '0px');
        $('.announcement-container').css('transition', '.2s ease');
    }); 

  /*   $('.toggle-showAlerts').click(function(){
        $('.show-alerts').css('bottom', '0px');
        $('.show-alerts').css('transition', '.2s ease');
    }); */

    $('.close-showAlerts').click(function(){
        $('.show-alerts').css('bottom', '-100vh');
        $('.show-alerts').css('transition', '.2s ease');
    });

    
    
    $('.toggle-announcements').click(function(){
        $('.show-announcements').css('bottom', '0px');
        $('.show-announcements').css('transition', '.2s ease');
    });
    $('.close-showAnnouncements').click(function(){
        $('.show-announcements').css('bottom', '-100vh');
        $('.show-announcements').css('transition', '.2s ease');
    });

    //Toggle the create post annoncement
    $('.close-announcement').click(function(){
        $('.announcement-container').css('bottom', '-100vh');
        $('.announcement-container').css('transition', '.2s ease');
    }); 

    $('#tab1').click(function(){
        $('.tabbdd').css('left', '0px');
        $('.tabbdd').css('transition', '.1s ease');

        $('#tab-indicator').css('transition', '.2s ease');
        $('#tab-indicator').css('left', '0%');
        $('#tab-icon1').css('color', '#de0c3b');
        $('#tab-icon2, #tab-icon3, #tab-icon4, #tab-icon5, #tab-icon6').css('color', 'dimgray');
        $('#badge-home').css('display', 'none');
        $('#tab-nav').css('bottom', '0');

        
    });
    $('#tab2').click(function(){
        $('.tabbdd').css('left', '-100%');
        $('.tabbdd').css('transition', '.1s ease');

        $('#tab-indicator').css('transition', '.2s ease');
        $('#tab-indicator').css('left', '16.66666666666667%');
        $('#tab-icon2').css('color', '#de0c3b');
        $('#tab-icon1, #tab-icon3, #tab-icon4, #tab-icon5, #tab-icon6').css('color', 'dimgray');
        //$('#badge-alert').css('display', 'none');
        $('#tab-nav').css('bottom', '40px');
        $('#tab-nav').css('transition', '.1s ease')
    });
    $('#tab3').click(function(){
        $('.tabbdd').css('left', '-200%');
        $('.tabbdd').css('transition', '.1s ease');

        $('#tab-indicator').css('transition', '.2s ease');
        $('#tab-indicator').css('left', '33.33333333333333%');
        $('#tab-icon3').css('color', '#de0c3b');
        $('#tab-icon1, #tab-icon2, #tab-icon4, #tab-icon5, #tab-icon6').css('color', 'dimgray');
        $('#badge-timeline').css('display', 'none');
        $('#tab-nav').css('bottom', '0');
    });
    $('#tab4').click(function(){
        $('.tabbdd').css('left', '-300%');
        $('.tabbdd').css('transition', '.1s ease');

        $('#tab-indicator').css('transition', '.2s ease');
        $('#tab-indicator').css('left', '50.00000000000000%');
        $('#tab-icon4').css('color', '#de0c3b');
        $('#tab-icon1, #tab-icon2, #tab-icon3, #tab-icon5, #tab-icon6').css('color', 'dimgray');
        $('#badge-news').css('display', 'none');
        $('#tab-nav').css('bottom', '0');
    });
    $('#tab5').click(function(){
        $('.tabbdd').css('left', '-400%');
        $('.tabbdd').css('transition', '.1s ease');

        $('#tab-indicator').css('transition', '.2s ease');
        $('#tab-indicator').css('left', '66.66666666666668%');
        $('#tab-icon5').css('color', '#de0c3b');
        $('#tab-icon1, #tab-icon2, #tab-icon3, #tab-icon4, #tab-icon6').css('color', 'dimgray');
        $('#badge-notification').css('display', 'none');
        $('#tab-nav').css('bottom', '0');
    });
    $('#tab6').click(function(){
        $('.tabbdd').css('left', '-500%');
        $('.tabbdd').css('transition', '.1s ease');

        $('#tab-indicator').css('transition', '.2s ease');
        $('#tab-indicator').css('left', '83.3333333333333%');
        $('#tab-icon1').css('color', 'dimgray');
        $('#tab-icon2').css('color', 'dimgray');
        $('#tab-icon3').css('color', 'dimgray');
        $('#tab-icon4').css('color', 'dimgray');
        $('#tab-icon5').css('color', 'dimgray');
        $('#tab-icon6').css('color', '#de0c3b');
        $('#tab-nav').css('bottom', '0');
    });
    $('#timeline-menu').click(function(){
        $('#tab-indicator').css('transition', '.2s ease');
        $('#tab-indicator').css('left', '33.33333333333333%');
        $('#tab-icon1').css('color', 'dimgray');
        $('#tab-icon2').css('color', 'dimgray');
        $('#tab-icon3').css('color', '#db1515');
        $('#tab-icon4').css('color', 'dimgray');
        $('#tab-icon5').css('color', 'dimgray');
        $('#tab-icon6').css('color', 'dimgray');
        $('#badge-timeline').css('display', 'none');
        $('#tab-nav').css('bottom', '0');
    });

    $('#go-to-timeline').click(function(){
        $('.tabbdd').css('left', '-200%');
        $('.tabbdd').css('transition', '.1s ease');

        $('#tab-indicator').css('transition', '.2s ease');
        $('#tab-indicator').css('left', '33.33333333333333%');
        $('#tab-icon3').css('color', '#de0c3b');
        $('#tab-icon1, #tab-icon2, #tab-icon4, #tab-icon5, #tab-icon6').css('color', 'dimgray');
        $('#badge-timeline').css('display', 'none');
        $('#tab-nav').css('bottom', '0');
    });
    

    $('#darkmode').click(function(){
        $('div').css('background-color', 'black');
        $('#btn-noted').css('background-color', 'none');
        $('#btn-share').css('background-color', 'none');
        $('p').css('color', 'white');
        $('h4').css('color', 'white');
        $('button').css('background-color', 'dimgray');
        $('#badge-home').css('border', '2px solid black');
        $('#badge-alert').css('border', '2px solid black');
        $('#badge-timeline').css('border', '2px solid black');
        $('#badge-news').css('border', '2px solid black');
        $('#badge-notification').css('border', '2px solid black');
        $('#buttonShow').css('background-color', 'transparent');
        $('#buttonHide').css('background-color', 'transparent');
        $('.btn-call').css('background-color', 'firebrick');
        $('#body').css('background-color', 'dimgray');
    });

    $('#showApplicationForm').click(function(){
        $('#toggleApplicationForm').css('transition', '.2s ease');
        $('#toggleApplicationForm').css('right', '0%');
    });

    $('#hideApplicationForm').click(function(){
        $('#toggleApplicationForm').css('transition', '.2s ease');
        $('#toggleApplicationForm').css('right', '-100%');
    });

    $('.close-photo').click(function(){
        $('#take-photo-container').css('visibility', 'hidden');
    });

    $('#deletePost').click(function(){
        $('#option').css('bottom', '-100vh');
        Swal.fire({
            text: 'This record will be deleted and not retrieve',
            icon: 'warning',
            showCancelButton: true,
            style: 'fontSize: 5px',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete'
          }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Good Job',
                    'Fsic Removed',
                    'success'
                )
            } else {
                $('#option').css('bottom', '0vh');
            }
        }); 
    });
});


function takePhoto(){
    document.getElementById("take-photo-container").style.visibility = "visible";
}



function toggleClose(){
    document.getElementById("option").style.bottom = "-100vh";
    document.getElementById("option").style.transition = ".2s ease";
}

function noted_button(){
    document.getElementById("btn-noted").style.color = "red";
    document.getElementById("btn-noted-icon").style.transition = "1s ease";
    document.getElementById("btn-noted-text").style.transition = "1s ease";
    document.getElementById("btn-noted-text").innerHTML = "dis-noted";
    document.getElementById("btn-noted-text").style.fontWeight = "bold";
}

function toggleAgencyCall(){
    document.getElementById("agency-call-list").style.bottom = "95px";
    document.getElementById("agency-call-list").style.transition = ".1s ease";
}
