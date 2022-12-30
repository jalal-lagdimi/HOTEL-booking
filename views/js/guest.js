var guestNumber = document.getElementById("guestNumber");
var guestInfo = document.getElementById("guestInfo");


guestNumber.addEventListener('input', function() {

    let i = 0;

    if (guestNumber.value !== "") {
        guestInfo.innerHTML = "";
        while(i < guestNumber.value&&guestNumber.value<=6){
            
            guestInfo.innerHTML +=
        `

        <label for="" class="form-label">Full Name of guest ${i+1}</label>
        <input class="form-control" name="fullname${i+1}" type="text" required/>

        <label for="" class="form-label">Birthday of guest ${i+1}</label>
        <input class="form-control" name="date${i+1}" type="date" required/>

        <hr>`
        
        i++
        } 
    } else {
        guestInfo.innerHTML = "";
    }
});