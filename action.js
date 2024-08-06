var eff=document.getElementById("effect");
var reg=document.getElementById("reg");
var log=document.getElementById("log");
var frm=document.getElementById('frm');
var frm2=document.getElementById("frm2");

log.addEventListener('click',()=>{
    eff.style.marginLeft="276px";
    log.style.filter="none";
    reg.style.filter="grayscale()";
    log.style.color="red";
    log.style.fontWeight="bold";
    frm2.style.display="block";
    frm.style.display="none";
})
reg.addEventListener('click',()=>{
    eff.style.marginLeft="62px";
    log.style.filter="grayscale()";
    reg.style.filter="none";
    reg.style.color="red";
    reg.style.fontWeight="bold"
    frm2.style.display="none";
    frm.style.display="block";
})
// fpas.addEventListener('click',()=>{
//     ch=confirm("do you want to reset password if yes press 'ok' and for no then press 'cancel'");
//     if(ch==true){
//         window.location.href="http://localhost/kart/resetPass.php";
//     }
//     else{
//         window.location.href="http://localhost/kart/users.php";
//     }
// })
var n=document.getElementById("name");
var e=document.getElementById("email");
var ph=document.getElementById("phone");
var ps=document.getElementById("password");
flag=0;
n.addEventListener('input',()=>{
    if(n.value==""){
        flag=0
        document.getElementById("e2").innerHTML="cant be blanks";
    }
    else if(n.value.length<3){
        flag=0
        document.getElementById("e2").innerHTML="name atleast 3 char";
    }
    else if(n.value>=0 || n.value<=99999999999){
        flag=0
        document.getElementById("e2").innerHTML="not  allow number";
    }
    else{
        flag=1
        document.getElementById("e2").innerHTML="";
    }
})
e.addEventListener("input",()=>{
    if(e.value==""){
        flag=0
        document.getElementById("e3").innerHTML="email can't be blank";
    }
    else if(e.value.length<7){
        flag=0
        document.getElementById("e3").innerHTML="email atleast 7 char";
    }
    else{
        flag=1
        document.getElementById("e3").innerHTML="";
    }
})
ph.addEventListener('input',()=>{
    if(ph.value==""){
        flag=0
        document.getElementById("e4").innerHTML="phone can't be blank";
    }
    else if(ph.value.length!=10){
        flag=0
        document.getElementById("e4").innerHTML="phone should be 10 digit";
    }
    else if(isNaN(ph.value)){
        flag=0
        document.getElementById("e4").innerHTML="only number allow not char";
    }
    else{
        flag=1
        document.getElementById("e4").innerHTML="";
    }
    
})
ps.addEventListener('input',()=>{
    if(ps.value==""){
        flag=0
        document.getElementById("e5").innerHTML="password can't be blanks";
    }
    else if(ps.value.length<7){
        flag=0
        document.getElementById("e5").innerHTML="password should be atleast 7 char";
    }
    else{
        flag=1
        document.getElementById("e5").innerHTML=""
    }
})

// function fav(){
//     if(n.value==""){
//         flag=0;
//         alert("can't be blank");
//     }
//     else if(n.value.length<0){
//         flag=0;
//         alert("name should be atleast 3 char");
//     }
//     else if(n.value>=0 || n.value<=99999999999){
//         flag=0;
//         alert("not allow number please fill your name properly")
//     }
//     else{
//         flag=1;
//     }
// }""

// if(flag==0){
//     return false;
// }
// else{
//     return true;
// }

