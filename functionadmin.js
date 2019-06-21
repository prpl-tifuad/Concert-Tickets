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
        window.location.href='admin.php';
    }
}

function searchAdmin(){
    var cari= document.forms["searching"]["cari"].value;

    if(cari == "venue"){
        event.preventDefault( );
        window.location.href='inputvenue.php';
    }
    else if(cari == "concert"){
        event.preventDefault( );
        window.location.href='inputkonser.php';
    }
    else if(cari== "ticket"){
        event.preventDefault( );
        window.location.href='inputtiket.php';
    }
    else if(cari == ""){
        alert("You must fill this first!");
        return false;
    }
    else{
        alert("There's nothing, maybe the key you enter is wrong");
        return false;
    }
}
