document.querySelector('#children').style.display="none";
document.querySelector('#suite').style.display="none";

let select = document.querySelector('#chambre');
select.addEventListener('change',()=>{
    const chambre = document.querySelector('#chambre').value;
    if(chambre === "2"){
        document.querySelector('#children').style.display="flex";
        document.querySelector('#suite').style.display="flex";

    }
    if(chambre === "1" || chambre === "0"){
        document.querySelector('#children').style.display="none";
        document.querySelector('#suite').style.display="none";

    }
})


