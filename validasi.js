function validateForm(){


    var email = document.forms["myForm"]["email"].value;
	var id = document.forms["myForm"]["id"].value;
	var name = document.forms["myForm"]["name"].value;
	var hp = document.forms["myForm"]["hp"].value;
	var kodetiket = document.forms["myForm"]["kodetiket"].value;
	var jumlah = document.forms["myForm"]["jumlah"].value;
	

    if (email == "" ) {
        alert("All must be filled out");
        return false;
    }
    else if (id == "") {
    	alert("All must be filled out");
        return false;
    }
    else if (name == "") {
    	alert("All must be filled out");
        return false;
    } 
    else if (hp == "") {
    	alert("All must be filled out");
        return false;
    }
    else if (kodetiket == "") {
    	alert("All must be filled out");
        return false;
    }
    else if (jumlah == "") {
    	alert("All must be filled out");
        return false;
    }
    else{
        window.alert('Thanks for your registration');
      
    }
    
}