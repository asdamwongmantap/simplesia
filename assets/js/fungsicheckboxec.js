function cekecname(checkbox){
	 if(checkbox.checked == true){
       $("#EMGCY_NAMENEW").show();
	   $("#EMGCY_NAMEDISABLE").hide();
	   $("#EMGCY_NAMEDISABLE").val('EMGCY_NAME');
    }else{
        $("#EMGCY_NAMENEW").hide();
		$("#EMGCY_NAMENEW").val('');
		$("#EMGCY_NAMEDISABLE").show();
		$("#EMGCY_NAMEDISABLE").val('');
   }
}
function cekecrelationship(checkbox){
	 if(checkbox.checked == true){
       $("#custrelationship").show();
	   $("#EMGCY_CUST_RELATIONSHIPDISABLE").hide();
	   $("#EMGCY_CUST_RELATIONSHIPDISABLE").val('EMGCY_CUST_RELATIONSHIP');
    }else{
        $("#custrelationship").hide();
		$("#custrelationship").val('');
		$("#EMGCY_CUST_RELATIONSHIPDISABLE").show();
		$("#EMGCY_CUST_RELATIONSHIPDISABLE").val('');
   }
}

function cekecaddr(checkbox){
	 if(checkbox.checked == true){
       $("#EMGCY_ADDRNEW").show();
	   $("#EMGCY_ADDRDISABLE").hide();
	   $("#EMGCY_ADDRDISABLE").val('EMGCY_ADDR');
    }else{
        $("#EMGCY_ADDRNEW").hide();
		$("#EMGCY_ADDRNEW").val('');
		$("#EMGCY_ADDRDISABLE").show();
		$("#EMGCY_ADDRDISABLE").val('');
   }
}
function cekecrt(checkbox){
	 if(checkbox.checked == true){
       $("#EMGCY_RTNEW").show();
	   $("#EMGCY_RTDISABLE").hide();
	   $("#EMGCY_RTDISABLE").val('EMGCY_RT');
    }else{
        $("#EMGCY_RTNEW").hide();
		$("#EMGCY_RTNEW").val('');
		$("#EMGCY_RTDISABLE").show();
		$("#EMGCY_RTDISABLE").val('');
   }
}

function cekecrw(checkbox){
	 if(checkbox.checked == true){
       $("#EMGCY_RWNEW").show();
	   $("#EMGCY_RWDISABLE").hide();
	   $("#EMGCY_RWDISABLE").val('EMGCY_RW');
    }else{
        $("#EMGCY_RWNEW").hide();
		$("#EMGCY_RWNEW").val('');
		$("#EMGCY_RWDISABLE").show();
		$("#EMGCY_RWDISABLE").val('');
   }
}
function cekecprovince(checkbox){
	 if(checkbox.checked == true){
       $("#provinceec").show();
	   $("#EMGCY_PROVINSIDISABLE").hide();
	   $("#EMGCY_PROVINSIDISABLE").val('EMGCY_PROVINSI');
    }else{
        $("#provinceec").hide();
		 $("#provinceec").val('');
		$("#EMGCY_PROVINSIDISABLE").show();
		$("#EMGCY_PROVINSIDISABLE").val('');
   }
}

function cekecdistrict(checkbox){
	 if(checkbox.checked == true){
       $("#districtec").show();
	   $("#EMGCY_DISTRICTDISABLE").hide();
	  $("#EMGCY_DISTRICTDISABLE").val('EMGCY_DISTRICT');
    }else{
        $("#districtec").hide();
		$("#districtec").val('');
		$("#EMGCY_DISTRICTDISABLE").show();
		$("#EMGCY_DISTRICTDISABLE").val('');
   }
}
function cekeccity(checkbox){
	 if(checkbox.checked == true){
       $("#cityec").show();
	   $("#EMGCY_CITYDISABLE").hide();
	   $("#EMGCY_CITYDISABLE").val('EMGCY_CITY');
    }else{
        $("#cityec").hide();
		$("#cityec").val('');
		$("#EMGCY_CITYDISABLE").show();
		$("#EMGCY_CITYDISABLE").val('');
   }
}

function cekeckecamatan(checkbox){
	 if(checkbox.checked == true){
       $("#kecamatanec").show();
	   $("#EMGCY_KECAMATANDISABLE").hide();
	  $("#EMGCY_KECAMATANDISABLE").val('EMGCY_KECAMATAN');
    }else{
        $("#kecamatanec").hide();
		$("#kecamatanec").val('');
		$("#EMGCY_KECAMATANDISABLE").show();
		$("#EMGCY_KECAMATANDISABLE").val('');
   }
}
function cekeckelurahan(checkbox){
	 if(checkbox.checked == true){
       $("#kelurahanec").show();
	   $("#EMGCY_KELURAHANDISABLE").hide();
	   $("#EMGCY_KELURAHANDISABLE").val('EMGCY_KELURAHAN');
    }else{
        $("#kelurahanec").hide();
		 $("#kelurahanec").val('');
		$("#EMGCY_KELURAHANDISABLE").show();
		$("#EMGCY_KELURAHANDISABLE").val('');
   }
}

function cekeczipcode(checkbox){
	 if(checkbox.checked == true){
       $("#zipcodeec").show();
	   $("#EMGCY_ZIPCODEDISABLE").hide();
	   $("#EMGCY_ZIPCODEDISABLE").val('EMGCY_ZIPCODE');
    }else{
        $("#zipcodeec").hide();
		$("#zipcodeec").val('');
		$("#EMGCY_ZIPCODEDISABLE").show();
		$("#EMGCY_ZIPCODEDISABLE").val('');
   }
}
function cekechomephone(checkbox){
	 if(checkbox.checked == true){
	   $("#EMGCYAREA_PHN_1NEW").show();
       $("#EMGCY_PHN_1NEW").show();
	   $("#EMGCY_PHN_1DISABLE").hide();
	   $("#EMGCY_PHN_1DISABLE").val('EMGCY_PHN_1');
	   $("#EMGCYAREA_PHN_1DISABLE").hide();
	   $("#EMGCYAREA_PHN_1DISABLE").val('EMGCY_PHN_AREA_1');
    }else{
		$("#EMGCYAREA_PHN_1NEW").hide();
		$("#EMGCYAREA_PHN_1NEW").val('');
        $("#EMGCY_PHN_1NEW").hide();
		$("#EMGCY_PHN_1NEW").val('');
		$("#EMGCY_PHN_1DISABLE").show();
		$("#EMGCY_PHN_1DISABLE").val('');
		$("#EMGCYAREA_PHN_1DISABLE").show();
		$("#EMGCYAREA_PHN_1DISABLE").val('');
   }
}
function cekecofficephone(checkbox){
	 if(checkbox.checked == true){
	   $("#EMGCYAREA_PHN_2NEW").show();
       $("#EMGCY_PHN_2NEW").show();
	   $("#EMGCY_PHN_2DISABLE").hide();
	   $("#EMGCY_PHN_2DISABLE").val('EMGCY_PHN_2');
	   $("#EMGCYAREA_PHN_2DISABLE").hide();
	   $("#EMGCYAREA_PHN_2DISABLE").val('EMGCY_PHN_AREA_2');
    }else{
		$("#EMGCYAREA_PHN_2NEW").hide();
		$("#EMGCYAREA_PHN_2NEW").val('');
        $("#EMGCY_PHN_2NEW").hide();
		$("#EMGCY_PHN_2NEW").val('');
		$("#EMGCY_PHN_2DISABLE").show();
		$("#EMGCY_PHN_2DISABLE").val('');
		$("#EMGCYAREA_PHN_2DISABLE").show();
		$("#EMGCYAREA_PHN_2DISABLE").val('');
   }
}
function cekecfax(checkbox){
	 if(checkbox.checked == true){
	   $("#EMGCY_FAX_AREANEW").show();
       $("#EMGCY_FAXNEW").show();
	   $("#EMGCY_FAXDISABLE").hide();
	   $("#EMGCY_FAXDISABLE").val('EMGCY_FAX');
	   $("#EMGCY_FAX_AREADISABLE").hide();
	   $("#EMGCY_FAX_AREADISABLE").val('EMGCY_FAX_AREA');
    }else{
		$("#EMGCY_FAX_AREANEW").hide();
		$("#EMGCY_FAX_AREANEW").val('');
        $("#EMGCY_FAXNEW").hide();
		$("#EMGCY_FAXNEW").val('');
		$("#EMGCY_FAXDISABLE").show();
		$("#EMGCY_FAXDISABLE").val('');
		$("#EMGCY_FAX_AREADISABLE").show();
		$("#EMGCY_FAX_AREADISABLE").val('');
   }
}
function cekecmobilephone(checkbox){
	 if(checkbox.checked == true){
       $("#EMGCY_MOBILE_PHN_1NEW").show();
	   $("#EMGCY_MOBILE_PHN_1DISABLE").hide();
	   $("#EMGCY_MOBILE_PHN_1DISABLE").val('EMGCY_MOBILE_PHN_1');
    }else{
        $("#EMGCY_MOBILE_PHN_1NEW").hide();
		$("#EMGCY_MOBILE_PHN_1NEW").val('');
		$("#EMGCY_MOBILE_PHN_1DISABLE").show();
		$("#EMGCY_MOBILE_PHN_1DISABLE").val('');
   }
}
function cekecmobilephone2(checkbox){
	 if(checkbox.checked == true){
       $("#EMGCY_MOBILE_PHN_NO_2NEW").show();
	   $("#EMGCY_MOBILE_PHN_NO_2DISABLE").hide();
	   $("#EMGCY_MOBILE_PHN_NO_2DISABLE").val('EMGCY_MOBILE_PHN_NO_2');
    }else{
        $("#EMGCY_MOBILE_PHN_NO_2NEW").hide();
		$("#EMGCY_MOBILE_PHN_NO_2NEW").val('');
		$("#EMGCY_MOBILE_PHN_NO_2DISABLE").show();
		$("#EMGCY_MOBILE_PHN_NO_2DISABLE").val('');
   }
}
function cekecmobilephone3(checkbox){
	 if(checkbox.checked == true){
       $("#EMGCY_MOBILE_PHN_NO_3NEW").show();
	   $("#EMGCY_MOBILE_PHN_NO_3DISABLE").hide();
	   $("#EMGCY_MOBILE_PHN_NO_3DISABLE").val('EMGCY_MOBILE_PHN_NO_3');
    }else{
        $("#EMGCY_MOBILE_PHN_NO_3NEW").hide();
		$("#EMGCY_MOBILE_PHN_NO_3NEW").val('');
		$("#EMGCY_MOBILE_PHN_NO_3DISABLE").show();
		$("#EMGCY_MOBILE_PHN_NO_3DISABLE").val('');
   }
}
function cekecemail(checkbox){
	 if(checkbox.checked == true){
       $("#EMGCY_EMAIL_1NEW").show();
	   $("#EMGCY_EMAIL_1DISABLE").hide();
	   $("#EMGCY_EMAIL_1DISABLE").val('EMGCY_EMAIL_1');
    }else{
        $("#EMGCY_EMAIL_1NEW").hide();
		$("#EMGCY_EMAIL_1NEW").val('');
		$("#EMGCY_EMAIL_1DISABLE").show();
		$("#EMGCY_EMAIL_1DISABLE").val('');
   }
}

