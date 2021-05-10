function toggleOptionBottom(){
    document.getElementById("toggleOptionBottom").innerHTML = `
    <div id="option" class="bg-white" style="width: 100%; z-index: 9999999999; height: 100vh; position: fixed; bottom: -100vh; box-shadow: 0 0 0 0 !important">
        <div>    
            <a class="close btn btn-white btn-sm" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 0px; top: -3px; height: 45px; width: 30px; border-radius: 0%; box-shadow: 0 0 0 0" onclick="toggleClose()box">
            <span aria-hidden="true" style="font-size: 20px; position: absolute; top: 0px; left: 15px">&times;</span>
            </a>
        </div>
        <div style="margin-top: 30px" class="option_container">
            <button class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; height: 50px; font-weight: bold; border-radius: 0% !important">
                <i class="fas fa-edit" style="font-size: 18px"></i>&emsp;Update Post
            </button>
            <button id="deletePost" class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; height: 50px; font-weight: bold; border-radius: 0% !important">
                <i class="fas fa-trash" style="font-size: 18px"></i>&emsp;Delete Post
            </button>
            <button class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; height: 50px; font-weight: bold; border-radius: 0% !important">
                <i class="fas fa-sign-out-alt" style="font-size: 18px"></i>&emsp;Report
            </button>
        </div>
    </div>
    `
}

$(document).ready(function(){
    $('$toggleoptionBottom').innerHTML("HAHAHha");
});

