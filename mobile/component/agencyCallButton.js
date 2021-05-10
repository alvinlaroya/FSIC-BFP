var agency = ['BFP', 'PNP', 'LUMC', 'LUMC', 'LUMC', 'LUMC', 'LUMC', 'LUMC', 'LUMC', 'LUMC', 'LUMC'];

function agencyCallButton(){
    var buttons = document.getElementById("agencyCalButton");
    var value = '';
    var buttonCount;
    buttons.innerHTML = '';
    for(buttonCount = 0; buttonCount < agency.length; buttonCount++){
        value += `
            <a href="tel:09381453259" class="btn btn-danger btn-sm btn-round" style="box-shadow: 0 0 5px -1px black;"><i class="fas fa-phone" style="transform: rotate(90deg)"></i>&nbsp;${agency[buttonCount]}</a>
        `
    }
    buttons.innerHTML += value;
}

