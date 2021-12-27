function validate(){
    var email = document.getElementById('txtEmail').value;
    var password= document.getElementById('txtPassword').value;

    if(email.length==0){
        alert("Email cannot be null")
        return false;
    }
    if(password.length==0){
        alert("Password cannot be null")
        return false;
    }
}