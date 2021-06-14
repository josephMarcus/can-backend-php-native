

function valid_first(){
    let first_name=document.getElementById('first').value;
    let err=document.getElementById('err_first');
    reg=/^([A-Za-z\s]{3,})$/i;
   res=reg.test(first_name);
    if(res){
        err.style.display="none";
    }else{
        err.style.display="block";
    }
}


function valid_last(){
    let last_name=document.getElementById('last').value;
    let err=document.getElementById('err_last');
    reg=/^([A-Za-z\s]{3,})$/i;
    res=reg.test(last_name);
    if(res){
        err.style.display="none";
    }else{
        err.style.display="block";
    }
}


function valid_phone(){
    let phone=document.getElementById('phone').value;
    let err=document.getElementById('err_phone');
    reg=/^([0-9]{11})$/i;
    res=reg.test(phone);
    if(res){
        err.style.display="none";
    }else{
        err.style.display="block";
    }
}

function valid_email(){
let email=document.getElementById('email').value;
let err_email=document.getElementById('err_email');
 // accept start of digit
//reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//ali@client.can.eg.edu
// not accept start of digit
reg=/^[A-Za-z]+([0-9]*)([\.-_]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
res=reg.test(email);
if(res){
    err_email.style.display="none";
}else{
    err_email.style.display="block";
}
}


function valid_pass(){
let pass=document.getElementById('pass').value;
let err_pass=document.getElementById('err_pass');
reg=/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[\._=+@*#$%^&-(){}/~!]).{8,16}$/i;
res=reg.test(pass);
if(res){
    err_pass.style.display="none";
}else{
    err_pass.style.display="block";
}
}




    function readimage(event){
        let img=document.getElementById('image');
        let reader=new FileReader();
        reader.onload=function(){
            img.src=reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);

    }

    function showfile(){
        let file=document.getElementById('file');
        file.click();
    }


