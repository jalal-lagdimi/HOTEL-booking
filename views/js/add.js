const select = document.getElementById('room');

const formroom = document.getElementById("suite");
let capacity = document.getElementById('capacity')

select.addEventListener('change',(e)=>{
if(e.target.value == "SINGLE"){
	formroom.style.display = "none";
	capacity.value=1;
}else if(e.target.value == "DOUBLE"){
	formroom.style.display = "none";
	capacity.value=2;
}else{
	formroom.style.display = "flex";
	capacity.value=6;
}
})