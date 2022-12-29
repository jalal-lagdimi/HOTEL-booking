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
        <input class="form-control" name="fullname${i+1}" type="text"/>

        <label class="mb-1">Birthday of guest ${i+1}</label>
        <input class="form-control" name="date${i+1}" type="date"/>

        <hr>`
        
        i++
        } 
    } else {
        guestInfo.innerHTML = "";
    }
});