
const select = document.getElementById('room');
const formroom = document.getElementById("suite");

select.addEventListener('change',(e)=>{
if(e.target.value == "SINGLE" || e.target.value == "DOUBLE"){
	formroom.style.display = "none";
}else{
	formroom.style.display = "flex";
}
})

