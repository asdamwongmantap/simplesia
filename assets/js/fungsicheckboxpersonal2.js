function cekidno(checkbox){
	 if(checkbox.checked == true){
       $("#ID_NONEW").show();
	   $("#ID_NODISABLE").hide();
	    $("#ID_NODISABLE").val('ID_NO');
    }else{
        $("#ID_NONEW").hide();
		$("#ID_NONEW").val('');
		$("#ID_NODISABLE").show();
		 $("#ID_NODISABLE").val('');
   }
}
function cekidname(checkbox){
	 if(checkbox.checked == true){
       $("#CUST_LEGAL_NAMENEW").show();
	   $("#CUST_LEGAL_NAMEDISABLE").hide();
	    $("#CUST_LEGAL_NAMEDISABLE").val('CUSTNAME');
    }else{
        $("#CUST_LEGAL_NAMENEW").hide();
		$("#CUST_LEGAL_NAMENEW").val('');
		$("#CUST_LEGAL_NAMEDISABLE").show();
		 $("#CUST_LEGAL_NAMEDISABLE").val('');
   }
}

function cekbirthplace(checkbox){
	 if(checkbox.checked == true){
       $("#BIRTH_PLACENEW").show();
	   $("#BIRTH_PLACEDISABLE").hide();
	    $("#BIRTH_PLACEDISABLE").val('BIRTH_PLACE');
    }else{
        $("#BIRTH_PLACENEW").hide();
		$("#BIRTH_PLACENEW").val('');
		$("#BIRTH_PLACEDISABLE").show();
		 $("#BIRTH_PLACEDISABLE").val('');
   }
}
function cekbirthdate(checkbox){
	 if(checkbox.checked == true){
       $("#BIRTH_DTNEW").show();
	   $("#BIRTH_DTDISABLE").hide();
	    $("#BIRTH_DTDISABLE").val('BIRTH_DT');
    }else{
        $("#BIRTH_DTNEW").hide();
		 $("#BIRTH_DTNEW").val('');
		$("#BIRTH_DTDISABLE").show();
		 $("#BIRTH_DTDISABLE").val('');
   }
}
function cekmothermaidenname(checkbox){
	 if(checkbox.checked == true){
       $("#MOTHER_MAIDEN_NAMENEW").show();
	   $("#MOTHER_MAIDEN_NAMEDISABLE").hide();
	    $("#MOTHER_MAIDEN_NAMEDISABLE").val('MOTHER_MAIDEN_NAME');
    }else{
        $("#MOTHER_MAIDEN_NAMENEW").hide();
		$("#MOTHER_MAIDEN_NAMENEW").val('');
		$("#MOTHER_MAIDEN_NAMEDISABLE").show();
		 $("#MOTHER_MAIDEN_NAMEDISABLE").val('');
   }
}
function ceklastmobilephone(checkbox){
	 if(checkbox.checked == true){
       $("#MOBILE_PHN_NO_1NEW").show();
	   $("#MOBILE_PHN_NO_1DISABLE").hide();
	    $("#MOBILE_PHN_NO_1DISABLE").val('MOBILE_PHN_NO_1');
    }else{
        $("#MOBILE_PHN_NO_1NEW").hide();
		$("#MOBILE_PHN_NO_1NEW").val('');
		$("#MOBILE_PHN_NO_1DISABLE").show();
		 $("#MOBILE_PHN_NO_1DISABLE").val('');
   }
}
function ceklastmobilephone2(checkbox){
	 if(checkbox.checked == true){
       $("#MOBILE_PHN_NO_2NEW").show();
	   $("#MOBILE_PHN_NO_2DISABLE").hide();
	    $("#MOBILE_PHN_NO_2DISABLE").val('MOBILE_PHN_NO_2');
    }else{
        $("#MOBILE_PHN_NO_2NEW").hide();
		$("#MOBILE_PHN_NO_2NEW").val('');
		$("#MOBILE_PHN_NO_2DISABLE").show();
		 $("#MOBILE_PHN_NO_2DISABLE").val('');
   }
}
function ceklastmobilephone3(checkbox){
	 if(checkbox.checked == true){
       $("#MOBILE_PHN_NO_3NEW").show();
	   $("#MOBILE_PHN_NO_3DISABLE").hide();
	    $("#MOBILE_PHN_NO_3DISABLE").val('MOBILE_PHN_NO_3');
    }else{
        $("#MOBILE_PHN_NO_3NEW").hide();
		$("#MOBILE_PHN_NO_3NEW").val('');
		$("#MOBILE_PHN_NO_3DISABLE").show();
		 $("#MOBILE_PHN_NO_3DISABLE").val('');
   }
}
function cekexpireddate(checkbox){
	 if(checkbox.checked == true){
       $("#ID_EXP_DATENEW").show();
	   $("#ID_EXP_DATEDISABLE").hide();
	    $("#ID_EXP_DATEDISABLE").val('ID_EXP_DATE');
    }else{
        $("#ID_EXP_DATENEW").hide();
		 $("#ID_EXP_DATENEW").val('');
		$("#ID_EXP_DATEDISABLE").show();
		 $("#ID_EXP_DATEDISABLE").val('');
   }
}