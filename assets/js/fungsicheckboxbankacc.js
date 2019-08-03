function cekbankname(checkbox){
	 if(checkbox.checked == true){
       $("#BANK_NAMENEW").show();
	   $("#BANK_NAMEDISABLE").hide();
	    $("#BANK_NAMEDISABLE").val('BANK_NAME');
    }else{
        $("#BANK_NAMENEW").hide();
		$("#BANK_NAMENEW").val('');
		$("#BANK_NAMEDISABLE").show();
		 $("#BANK_NAMEDISABLE").val('');
   }
}
function cekbankbranch(checkbox){
	 if(checkbox.checked == true){
       $("#BANK_BRANCHNEW").show();
	   $("#BANK_BRANCHDISABLE").hide();
	    $("#BANK_BRANCHDISABLE").val('BANK_BRANCH');
    }else{
        $("#BANK_BRANCHNEW").hide();
		$("#BANK_BRANCHNEW").val('');
		$("#BANK_BRANCHDISABLE").show();
		 $("#BANK_BRANCHDISABLE").val('');
   }
}

function cekaccno(checkbox){
	 if(checkbox.checked == true){
       $("#ACC_NONEW").show();
	   $("#ACC_NODISABLE").hide();
	    $("#ACC_NODISABLE").val('ACC_NO');
    }else{
        $("#ACC_NONEW").hide();
		$("#ACC_NONEW").val('');
		$("#ACC_NODISABLE").show();
		 $("#ACC_NODISABLE").val('');
   }
}
function cekaccname(checkbox){
	 if(checkbox.checked == true){
       $("#ACC_NAMENEW").show();
	   $("#ACC_NAMEDISABLE").hide();
	    $("#ACC_NAMEDISABLE").val('ACC_NAME');
    }else{
        $("#ACC_NAMENEW").hide();
		$("#ACC_NAMENEW").val('');
		$("#ACC_NAMEDISABLE").show();
		 $("#ACC_NAMEDISABLE").val('');
   }
}
function cekbicode(checkbox){
	 if(checkbox.checked == true){
       $("#BI_CODENEW").show();
	   $("#BI_CODEDISABLE").hide();
	   $("#BI_CODEDISABLE").val('BICODENAME');
    }else{
        $("#BI_CODENEW").hide();
		$("#BI_CODENEW").val('');
		$("#BI_CODEDISABLE").show();
		$("#BI_CODEDISABLE").val('');
   }
}
