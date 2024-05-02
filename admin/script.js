function passcheck() {
    let password = document.getElementById("#password").value;
    let rePassword = document.getElementById("#re-type-password").value;

    if(password == ""){
        document.getElementById("#msg").innerHTML = "Enter password";
        return false;
    }
    else if(password.length < 5){
        document.getElementById("#msg").innerHTML = "Password length must be upto 5 number";
        return false;
    }
    else if(password !== rePassword){
        document.getElementById("#msg").innerHTML = "Password not match";
        return false;
    }
}