console.log("messi")



var Add=document.getElementsByClassName('Add')[0];
const modal_body = document.querySelector('.modal-body');
const another_modal_body = document.querySelector('.another-modal-body');
console.log(Add);

Add.addEventListener("click",Addinputs);
function Addinputs(){
    another_modal_body.append(modal_body.cloneNode(true));
   
}



