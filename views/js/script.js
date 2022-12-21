const select = document.getElementById('room');
console.log(select);

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
	formroom.style.display = "block";
	capacity.value=6;
	
}
})