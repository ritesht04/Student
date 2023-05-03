function seterror(id,error){
    document.getElementById(id).innerHTML=error;
}
function validate(){
    var res=true;
    var name=document.form1.name.value;
    if(name.length<4)
    {
        seterror('name','Length should be greater than 4');
        res=false;
    }
    var email=document.form1.email.value;
    if(email.length<8)
    {
        seterror('email','Enter a valid email');
        res=false;
    }
    var phone=document.form1.phone.value;
    if(phone.length<10){
        seterror('phone','Length of phone number should be 10');
        res=false;
    }
    var password=document.form1.password.value;
    if(password.length<6){
        seterror('password','Length of password should be greater than 6');
        res=false;
    }
    return res;
}