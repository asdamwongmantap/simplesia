function huruf(evt){
		var charCode = (evt.which) ? evt.which : event.keyCode
		if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32){
			return false;
		}else{
			return true;
		}
	} 
	function Angkahuruf(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
	 	if (charCode > 31 && (charCode < 48 || charCode > 57)){
			if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32){
	        	return false;
			}else{
	            return true;
			}
		}
	}
	function Simbol(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
 	
		if ((charCode >= 0 && charCode < 32) || (charCode > 47 && charCode < 58) || (charCode > 64 && charCode < 91) 
			|| (charCode > 96 && charCode < 123) || (charCode > 44 && charCode < 48)
			|| (charCode > 38 && charCode < 42) || (charCode == 37 || charCode == 32 || charCode == 61 || charCode == 44 || charCode == 58)){
        	return true;
		}else{
            return false;
		}
	
	} 
	function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
		   {
		   return false;}
		   else{
		   return true;}
	}
	function hanyaAngkaNPWP(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 45 || charCode > 57 || charCode == 47)){
		   return false;}
		   else if (charCode == 45 && charCode == 46){
			   return true;
		   }
		  else {return true;}
	}
	function email(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
	 	if (charCode > 31 && (charCode < 45 || charCode > 57)){
			if ((charCode < 64 || charCode > 90 || charCode == 94)&&(charCode < 97 || charCode > 122)&&charCode>32){
	        	return false;
			}else{
	            return true;
			}
		}
	}
	function distance(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 45 || charCode > 57 || charCode == 47)){
		   return false;}
		   else if (charCode == 46){
			   return true;
		   }
		  else {return true;}
	}