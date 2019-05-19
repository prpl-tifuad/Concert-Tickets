function validateForm(){
	var email = document.forms["myForm"]["email"].value;
	var id = document.forms["myForm"]["id"].value;
	var nama = document.forms["myForm"]["name"].value;
	var hp = document.forms["myForm"]["hp"].value;
	var tiket = document.forms["myForm"]["tiket"].value;
	var jml = document.forms["myForm"]["jumlah"].value;
	

    if (email == "" ) {
        alert("All must be filled out");
        return false;
    }
    else if (id == "") {
    	alert("All must be filled out");
        return false;
    }
    else if (nama == "") {
    	alert("All must be filled out");
        return false;
    } 
    else if (hp == "") {
    	alert("All must be filled out");
        return false;
    }
    else if (tiket == "") {
    	alert("All must be filled out");
        return false;
    }
    else if (jml == "") {
    	alert("All must be filled out");
        return false;
    }
    
}