function cekecjobmodeltype(checkbox){
	 if(checkbox.checked == true){
       $("#REF_PROFESSION_MODELNEW").show();
	   $("#REF_PROFESSION_MODELDISABLE").hide();
	   $("#REF_PROFESSION_MODELDISABLE").val('REF_CUST_MODEL_ID');
    }else{
        $("#REF_PROFESSION_MODELNEW").hide();
		$("#REF_PROFESSION_MODELNEW").val('');
		$("#REF_PROFESSION_MODELDISABLE").show();
		$("#REF_PROFESSION_MODELDISABLE").val('');
   }
}
function cekecjobtype(checkbox){
	 if(checkbox.checked == true){
       $("#REF_PROFESSION_IDNEW").show();
	   $("#REF_PROFESSION_IDDISABLE").hide();
	   $("#REF_PROFESSION_IDDISABLE").val('REF_PROFESSION_ID');
    }else{
        $("#REF_PROFESSION_IDNEW").hide();
		$("#REF_PROFESSION_IDNEW").val('');
		$("#REF_PROFESSION_IDDISABLE").show();
		$("#REF_PROFESSION_IDDISABLE").val('');
   }
}
function cekecjobpos(checkbox){
	 if(checkbox.checked == true){
       $("#MR_JOB_POSITIONNEW").show();
	   $("#MR_JOB_POSITIONDISABLE").hide();
	   $("#MR_JOB_POSITIONDISABLE").val('MR_JOB_POSITION');
    }else{
        $("#MR_JOB_POSITIONNEW").hide();
		$("#MR_JOB_POSITIONNEW").val('');
		$("#MR_JOB_POSITIONDISABLE").show();
		$("#MR_JOB_POSITIONDISABLE").val('');
   }
}
function cekecjobstatus(checkbox){
	 if(checkbox.checked == true){
       $("#JOB_STATNEW").show();
	   $("#JOB_STATDISABLE").hide();
	   $("#JOB_STATDISABLE").val('JOB_STAT');
    }else{
        $("#JOB_STATNEW").hide();
		$("#JOB_STATNEW").val('');
		$("#JOB_STATDISABLE").show();
		$("#JOB_STATDISABLE").val('');
   }
}
//company
function cekcomname(checkbox){
	 if(checkbox.checked == true){
       $("#COY_NAMENEW").show();
	   $("#COY_NAMEDISABLE").hide();
	   $("#COY_NAMEDISABLE").val('COY_NAME');
    }else{
        $("#COY_NAMENEW").hide();
		$("#COY_NAMENEW").val('');
		$("#COY_NAMEDISABLE").show();
		$("#COY_NAMEDISABLE").val('');
   }
}
function cekcomindustrytype(checkbox){
	 if(checkbox.checked == true){
       $("#INDUSTRY_TYPE_IDNEW").show();
	   $("#INDUSTRY_TYPE_IDDISABLE").hide();
	   $("#INDUSTRY_TYPE_IDDISABLE").val('INDUSTRY_TYPE_ID');
    }else{
        $("#INDUSTRY_TYPE_IDNEW").hide();
		$("#INDUSTRY_TYPE_IDNEW").val('');
		$("#INDUSTRY_TYPE_IDDISABLE").show();
		$("#INDUSTRY_TYPE_IDDISABLE").val('');
   }
}

function cekcomaddr(checkbox){
	 if(checkbox.checked == true){
       $("#ADDR_JOBNEW").show();
	   $("#ADDR_JOBDISABLE").hide();
	   $("#ADDR_JOBDISABLE").val('ADDR_JOB');
    }else{
        $("#ADDR_JOBNEW").hide();
		$("#ADDR_JOBNEW").val('');
		$("#ADDR_JOBDISABLE").show();
		$("#ADDR_JOBDISABLE").val('');
   }
}
function cekcomrt(checkbox){
	 if(checkbox.checked == true){
       $("#RT_JOBNEW").show();
	   $("#RT_JOBDISABLE").hide();
	   $("#RT_JOBDISABLE").val('RT_JOB');
    }else{
        $("#RT_JOBNEW").hide();
		$("#RT_JOBNEW").val('');
		$("#RT_JOBDISABLE").show();
		$("#RT_JOBDISABLE").val('');
   }
}
function cekcomrw(checkbox){
	 if(checkbox.checked == true){
       $("#RW_JOBNEW").show();
	   $("#RW_JOBDISABLE").hide();
	   $("#RW_JOBDISABLE").val('RW_JOB');
    }else{
        $("#RW_JOBNEW").hide();
		$("#RW_JOBNEW").val('');
		$("#RW_JOBDISABLE").show();
		$("#RW_JOBDISABLE").val('');
   }
}
function cekcomprovince(checkbox){
	 if(checkbox.checked == true){
       $("#provincecom").show();
	   $("#PROVINSI_JOBDISABLE").hide();
	   $("#PROVINSI_JOBDISABLE").val('PROVINSI_JOB');
    }else{
        $("#provincecom").hide();
		$("#provincecom").val('');
		$("#PROVINSI_JOBDISABLE").show();
		$("#PROVINSI_JOBDISABLE").val('');
   }
}
function cekcomdistrict(checkbox){
	 if(checkbox.checked == true){
       $("#districtcom").show();
	   $("#DISTRICT_JOBDISABLE").hide();
	   $("#DISTRICT_JOBDISABLE").val('DISTRICT_JOB');
    }else{
        $("#districtcom").hide();
		$("#districtcom").val('');
		$("#DISTRICT_JOBDISABLE").show();
		$("#DISTRICT_JOBDISABLE").val('');
   }
}
function cekcomcity(checkbox){
	 if(checkbox.checked == true){
       $("#citycom").show();
	   $("#CITY_JOBDISABLE").hide();
	   $("#CITY_JOBDISABLE").val('CITY_JOB');
    }else{
        $("#citycom").hide();
		$("#citycom").val('');
		$("#CITY_JOBDISABLE").show();
		$("#CITY_JOBDISABLE").val('');
   }
}
function cekcomkecamatan(checkbox){
	 if(checkbox.checked == true){
       $("#kecamatancom").show();
	   $("#KECAMATAN_JOBDISABLE").hide();
	  $("#KECAMATAN_JOBDISABLE").val('KECAMATAN_JOB');
    }else{
        $("#kecamatancom").hide();
		 $("#kecamatancom").val('');
		$("#KECAMATAN_JOBDISABLE").show();
		 $("#KECAMATAN_JOBDISABLE").val('');
   }
}
function cekcomkelurahan(checkbox){
	 if(checkbox.checked == true){
       $("#kelurahancom").show();
	   $("#KELURAHAN_JOBDISABLE").hide();
	   $("#KELURAHAN_JOBDISABLE").val('KELURAHAN_JOB');
    }else{
        $("#kelurahancom").hide();
		$("#kelurahancom").val('');
		$("#KELURAHAN_JOBDISABLE").show();
		$("#KELURAHAN_JOBDISABLE").val('');
   }
}
function cekcomzipcode(checkbox){
	 if(checkbox.checked == true){
       $("#zipcodecom").show();
	   $("#ZIPCODE_JOBDISABLE").hide();
	  $("#ZIPCODE_JOBDISABLE").val('ZIPCODE_JOB');
    }else{
        $("#zipcodecom").hide();
		$("#zipcodecom").val('');
		$("#ZIPCODE_JOBDISABLE").show();
		$("#ZIPCODE_JOBDISABLE").val('');
   }
}

function cekcomemployeesinceyear(checkbox){
	 if(checkbox.checked == true){
       $("#EMPLOYMENT_ESTABLISHMENT_DTNEW").show();
	   $("#EMPLOYMENT_ESTABLISHMENT_DTDISABLE").hide();
	   $("#EMPLOYMENT_ESTABLISHMENT_DTDISABLE").val('EMPLOYMENT_ESTABLISHMENT_DT');
    }else{
        $("#EMPLOYMENT_ESTABLISHMENT_DTNEW").hide();
		$("#EMPLOYMENT_ESTABLISHMENT_DTNEW").val('');
		$("#EMPLOYMENT_ESTABLISHMENT_DTDISABLE").show();
		$("#EMPLOYMENT_ESTABLISHMENT_DTDISABLE").val('');
   }
}
function cekcombussineessinceyear(checkbox){
	 if(checkbox.checked == true){
       $("#EMPLOYMENT_OTHER_BUSINESS_DTNEW").show();
	   $("#EMPLOYMENT_OTHER_BUSINESS_DTDISABLE").hide();
	   $("#EMPLOYMENT_OTHER_BUSINESS_DTDISABLE").val('EMPLOYMENT_OTHER_BUSINESS_DT');
    }else{
        $("#EMPLOYMENT_OTHER_BUSINESS_DTNEW").hide();
		$("#EMPLOYMENT_OTHER_BUSINESS_DTNEW").val('');
		$("#EMPLOYMENT_OTHER_BUSINESS_DTDISABLE").show();
		$("#EMPLOYMENT_OTHER_BUSINESS_DTDISABLE").val('');
   }
}
function cekcomothbizname(checkbox){
	 if(checkbox.checked == true){
       $("#OTH_BIZ_NAMENEW").show();
	   $("#OTH_BIZ_NAMEDISABLE").hide();
	   $("#OTH_BIZ_NAMEDISABLE").val('OTH_BIZ_NAME');
    }else{
        $("#OTH_BIZ_NAMENEW").hide();
		$("#OTH_BIZ_NAMENEW").val('');
		$("#OTH_BIZ_NAMEDISABLE").show();
		$("#OTH_BIZ_NAMEDISABLE").val('');
   }
}
function cekcomothbiztype(checkbox){
	 if(checkbox.checked == true){
       $("#OTH_BIZ_TYPENEW").show();
	   $("#OTH_BIZ_TYPEDISABLE").hide();
	   $("#OTH_BIZ_TYPEDISABLE").val('OTH_BIZ_TYPE');
    }else{
        $("#OTH_BIZ_TYPENEW").hide();
		$("#OTH_BIZ_TYPENEW").val('');
		$("#OTH_BIZ_TYPEDISABLE").show();
		$("#OTH_BIZ_TYPEDISABLE").val('');
   }
}
function cekcomothbizindustrytype(checkbox){
	 if(checkbox.checked == true){
       $("#OTH_BIZ_INDUSTRY_TYPE_IDNEW").show();
	   $("#OTH_BIZ_INDUSTRY_TYPE_IDDISABLE").hide();
	   $("#OTH_BIZ_INDUSTRY_TYPE_IDDISABLE").val('OTH_BIZ_INDUSTRY_TYPE_ID');
    }else{
        $("#OTH_BIZ_INDUSTRY_TYPE_IDNEW").hide();
		 $("#OTH_BIZ_INDUSTRY_TYPE_IDNEW").val('');
		$("#OTH_BIZ_INDUSTRY_TYPE_IDDISABLE").show();
		$("#OTH_BIZ_INDUSTRY_TYPE_IDDISABLE").val('');
   }
}
function cekcomothbizjobtitle(checkbox){
	 if(checkbox.checked == true){
       $("#OTH_BIZ_JOB_POSITIONNEW").show();
	   $("#OTH_BIZ_JOB_POSITIONDISABLE").hide();
	  $("#OTH_BIZ_JOB_POSITIONDISABLE").val('OTH_BIZ_JOB_POSITION');
    }else{
        $("#OTH_BIZ_JOB_POSITIONNEW").hide();
		$("#OTH_BIZ_JOB_POSITIONNEW").val('');
		$("#OTH_BIZ_JOB_POSITIONDISABLE").show();
		$("#OTH_BIZ_JOB_POSITIONDISABLE").val('');
   }
}
function cekcomothbizsinceyear(checkbox){
	 if(checkbox.checked == true){
       $("#OTH_BIZ_ESTABLISHMENT_DTNEW").show();
	   $("#OTH_BIZ_ESTABLISHMENT_DTDISABLE").hide();
	   $("#OTH_BIZ_ESTABLISHMENT_DTDISABLE").val('OTH_BIZ_ESTABLISHMENT_DT');
    }else{
        $("#OTH_BIZ_ESTABLISHMENT_DTNEW").hide();
		$("#OTH_BIZ_ESTABLISHMENT_DTNEW").val('');
		$("#OTH_BIZ_ESTABLISHMENT_DTDISABLE").show();
		$("#OTH_BIZ_ESTABLISHMENT_DTDISABLE").val('');
   }
}