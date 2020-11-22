var error;
var mobile_regx="^[6-9][0-9]{9}$";
function validate(){
if(vmobile())
    {
        return false
    }
    $( "form" ).Register();
    alert("Registration Success");
}
function vmobile(){
    if ($("#mobile").val()==""|| !$("#mobile").val().match(mobile_regx))
 {
        document.getElementById("mobile").style.borderColor="red";
        document.getElementById("mobile-warn").innerText="Enter the valid mobile no";
        return true;
        
    }else{
        document.getElementById("mobile").style.borderColor="green";
        document.getElementById("mobile-warn").innerText="valid";
        return false;
    }
}