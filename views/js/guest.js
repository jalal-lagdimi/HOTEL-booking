var guestNumber = document.getElementById("guestNumber");
var guestInfo = document.getElementById("guestInfo");


guestNumber.addEventListener('input', function() {

    let i = 0;

    if (guestNumber.value !== "") {
        guestInfo.innerHTML = "";
        while(i < guestNumber.value){
            guestInfo.innerHTML +=
        `
        <label class="mb-1">Full Name of guest ${i+1}</label>
        <input class="form-control" type="text"/>

        <label class="mb-1">Birthday of guest ${i+1}</label>
        <input class="form-control" type="date"/>

        <hr>`
        
        i++
        } 
    } else {
        guestInfo.innerHTML = "";
    }
});