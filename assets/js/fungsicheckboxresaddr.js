function cekresaddr(checkbox){
	 if(checkbox.checked == true){
       $("#RES_ADDRNEW").show();
	   $("#RES_ADDRDISABLE").hide();
	    $("#RES_ADDRDISABLE").val('RES_ADDR');
    }else{
        $("#RES_ADDRNEW").hide();
		$("#RES_ADDRNEW").val('');
		$("#RES_ADDRDISABLE").show();
		 $("#RES_ADDRDISABLE").val('');
   }
}
function cekfullresaddr(checkbox){
	 if(checkbox.checked == true){
       $("#RES_FULL_ADDRNEW").show();
	   $("#RES_FULL_ADDRDISABLE").hide();
	    $("#RES_FULL_ADDRDISABLE").val('RES_FULL_ADDR');
    }else{
        $("#RES_FULL_ADDRNEW").hide();
		$("#RES_FULL_ADDRNEW").val('');
		$("#RES_FULL_ADDRDISABLE").show();
		 $("#RES_FULL_ADDRDISABLE").val('');
   }
}

function cekresrt(checkbox){
	 if(checkbox.checked == true){
       $("#RES_RTNEW").show();
	   $("#RES_RTDISABLE").hide();
	    $("#RES_RTDISABLE").val('RES_RT');
    }else{
        $("#RES_RTNEW").hide();
		$("#RES_RTNEW").val('');
		$("#RES_RTDISABLE").show();
		 $("#RES_RTDISABLE").val('');
   }
}
function cekresrw(checkbox){
	 if(checkbox.checked == true){
       $("#RES_RWNEW").show();
	   $("#RES_RWDISABLE").hide();
	    $("#RES_RWDISABLE").val('RES_RW');
    }else{
        $("#RES_RWNEW").hide();
		$("#RES_RWNEW").val('');
		$("#RES_RWDISABLE").show();
		 $("#RES_RWDISABLE").val('');
   }
}
function cekresprovince(checkbox){
	 if(checkbox.checked == true){
       $("#resprovince").show();
	   $("#RES_PROVINSIDISABLE").hide();
	    $("#RES_PROVINSIDISABLE").val('RES_PROVINSI');
    }else{
        $("#resprovince").hide();
		$("#resprovince").val('');
		$("#RES_PROVINSIDISABLE").show();
		 $("#RES_PROVINSIDISABLE").val('');
   }
}
function cekresdistrict(checkbox){
	 if(checkbox.checked == true){
       $("#resdistrict").show();
	   $("#RESDISTRICTDISABLE").hide();
	    $("#RESDISTRICTDISABLE").val('RESDISTRICT');
    }else{
        $("#resdistrict").hide();
		$("#resdistrict").val('');
		$("#RESDISTRICTDISABLE").show();
		 $("#RESDISTRICTDISABLE").val('');
   }
}

function cekrescity(checkbox){
	 if(checkbox.checked == true){
       $("#rescity").show();
	   $("#RES_CITYDISABLE").hide();
	    $("#RES_CITYDISABLE").val('RES_CITY');
    }else{
        $("#rescity").hide();
		  $("#rescity").val('');
		$("#RES_CITYDISABLE").show();
		 $("#RES_CITYDISABLE").val('');
   }
}
function cekreskecamatan(checkbox){
	 if(checkbox.checked == true){
       $("#reskecamatan").show();
	   $("#RES_KECAMATANDISABLE").hide();
	    $("#RES_KECAMATANDISABLE").val('RES_KECAMATAN');
    }else{
        $("#reskecamatan").hide();
		$("#reskecamatan").val('');
		$("#RES_KECAMATANDISABLE").show();
		 $("#RES_KECAMATANDISABLE").val('');
   }
}
function cekreskelurahan(checkbox){
	 if(checkbox.checked == true){
       $("#reskelurahan").show();
	   $("#RES_KELURAHANDISABLE").hide();
	    $("#RES_KELURAHANDISABLE").val('RES_KELURAHAN');
    }else{
        $("#reskelurahan").hide();
		$("#reskelurahan").val('');
		$("#RES_KELURAHANDISABLE").show();
		 $("#RES_KELURAHANDISABLE").val('');
   }
}
function cekreszipcode(checkbox){
	 if(checkbox.checked == true){
       $("#reszipcode").show();
	   $("#RES_ZIPCODEDISABLE").hide();
	   $("#RES_ZIPCODEDISABLE").val('RES_ZIPCODE');
    }else{
        $("#reszipcode").hide();
		$("#reszipcode").val('');
		$("#RES_ZIPCODEDISABLE").show();
		 $("#RES_ZIPCODEDISABLE").val('');
   }
}

function cekresrentfinish(checkbox){
	 if(checkbox.checked == true){
       $("#RES_RENT_FINISH_DTNEW").show();
	   $("#RES_RENT_FINISH_DTDISABLE").hide();
	   $("#RES_RENT_FINISH_DTDISABLE").val('RENT_FINISH_DT');
    }else{
        $("#RES_RENT_FINISH_DTNEW").hide();
		$("#RES_RENT_FINISH_DTNEW").val('');
		$("#RES_RENT_FINISH_DTDISABLE").show();
		$("#RES_RENT_FINISH_DTDISABLE").val('');
   }
}
function cekreshomestatus(checkbox){
	 if(checkbox.checked == true){
       $("#RES_HOUSE_OWNERSHIPNEW").show();
	   $("#RES_HOUSE_OWNERSHIPDISABLE").hide();
	   $("#RES_HOUSE_OWNERSHIPDISABLE").val('RES_HOUSE_OWNERSHIP');
    }else{
        $("#RES_HOUSE_OWNERSHIPNEW").hide();
		$("#RES_HOUSE_OWNERSHIPNEW").val('');
		$("#RES_HOUSE_OWNERSHIPDISABLE").show();
		$("#RES_HOUSE_OWNERSHIPDISABLE").val('');
   }
}
function cekreshomelocation(checkbox){
	 if(checkbox.checked == true){
       $("#RES_HOUSE_LOCATION_CLASSNEW").show();
	   $("#RES_HOUSE_LOCATION_CLASSDISABLE").hide();
	   $("#RES_HOUSE_LOCATION_CLASSDISABLE").val('RES_HOUSE_LOCATION_CLASS');
    }else{
        $("#RES_HOUSE_LOCATION_CLASSNEW").hide();
		$("#RES_HOUSE_LOCATION_CLASSNEW").val('');
		$("#RES_HOUSE_LOCATION_CLASSDISABLE").show();
		$("#RES_HOUSE_LOCATION_CLASSDISABLE").val('');
   }
}
function cekreshomeprice(checkbox){
	 if(checkbox.checked == true){
       $("#RES_HOUSE_PRICE_ESTIMATESNEW").show();
	   $("#RES_HOUSE_PRICE_ESTIMATESDISABLE").hide();
	   $("#RES_HOUSE_PRICE_ESTIMATESDISABLE").val('RES_HOUSE_PRICE_ESTIMATES');
    }else{
        $("#RES_HOUSE_PRICE_ESTIMATESNEW").hide();
		$("#RES_HOUSE_PRICE_ESTIMATESNEW").val('');
		$("#RES_HOUSE_PRICE_ESTIMATESDISABLE").show();
		$("#RES_HOUSE_PRICE_ESTIMATESDISABLE").val('');
   }
}
function cekressinceyear(checkbox){
	 if(checkbox.checked == true){
       $("#RES_HOUSE_STAY_LENGTHNEW").show();
	   $("#RES_HOUSE_STAY_LENGTHDISABLE").hide();
	   $("#RES_HOUSE_STAY_LENGTHDISABLE").val('RES_HOUSE_STAY_LENGTH');
    }else{
        $("#RES_HOUSE_STAY_LENGTHNEW").hide();
		$("#RES_HOUSE_STAY_LENGTHNEW").val('');
		$("#RES_HOUSE_STAY_LENGTHDISABLE").show();
		$("#RES_HOUSE_STAY_LENGTHDISABLE").val('');
   }
}