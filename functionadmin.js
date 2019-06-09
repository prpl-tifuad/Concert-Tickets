function validateLogin(){
    var username = document.forms["myForm"]["username"].value;
    var password = document.forms["myForm"]["password"].value;

    if(username == ""){
        alert("Please Enter Username")
        return false;
    }
    else if(password == ""){
        alert("Please Enter Password")
        return false;
    }
    else if(username != "qeela" && password != "yui"){
        alert("Username and Password is False")
        return false;
    }
    else{
        event.preventDefault( );
        window.location.href='http://localhost/PRPL/admin.php';
    }
}