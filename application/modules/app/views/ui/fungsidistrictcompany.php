<script type="text/javascript">
$(document).ready(function(){
	//company
	$("#provincecom").change(function(){
		var IDPROV=document.getElementById('provincecom').value;
		var splitidprov = IDPROV.split(":");
		var $select=$('#districtcom');
		$.ajax({
	      url: "<?php echo base_url() . 'Korda/listdistrict/'?>" + splitidprov[0],
	      dataType:'JSON',
	      success:function(data){
	        //clear the current content of the select
	        $select.html('');
	        //iterate over the data and append a select option
	        $select.append('<option value="0">-- Pilih Salah Satu --</option>');
	        $.each(data.districtws, function(key, val){
	          $select.append('<option value="' + val.REF_PROV_DISTRICT_ID + '">' + val.NAME + '</option>');
	        })
	      },
	      error:function(){
	        $select.html('<option value="-1">NONE AVAILABLE</option>');
	      }
	    });
	});
	$("#districtcom").change(function(){
		var IDDISTRICT=document.getElementById('districtcom').value;
		var splitdistrict = IDDISTRICT.split(":");
		var $select=$('#citycom');
		$.ajax({
	       url: "<?php echo base_url() . 'Korda/listcity/'?>" + splitdistrict[0],
	      dataType:'JSON',
	      success:function(data){
	        //clear the current content of the select
	        $select.html('');
	        //iterate over the data and append a select option
	        $select.append('<option value="0">-- Pilih Salah Satu --</option>');
	        $.each(data.cityws, function(key, val){
	          $select.append('<option value="' + val.CITY + '">' + val.CITY + '</option>');
	        })
	      },
	      error:function(){
	        $select.html('<option value="-1">NONE AVAILABLE</option>');
	      }
	    });
	});
	$("#citycom").change(function(){
		var IDCITY=document.getElementById('citycom').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('districtcom').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#kecamatancom');
		$.ajax({
	      url: "<?php echo base_url() . 'Korda/listkecamatan/'?>" + IDCITY + '/' + IDDISTRICT,
	      dataType:'JSON',
	      success:function(data){
	        //clear the current content of the select
	        $select.html('');
	        //iterate over the data and append a select option
	        $select.append('<option value="0">-- Pilih Salah Satu --</option>');
	        $.each(data.kecamatanws, function(key, val){
	          $select.append('<option value="' + val.KECAMATAN + '">' + val.KECAMATAN + '</option>');
	        })
	      },
	      error:function(){
	        $select.html('<option value="-1">NONE AVAILABLE</option>');
	      }
	    });
		// alert(url);
	});
	$("#kecamatancom").change(function(){
		var IDKECAMATAN=document.getElementById('kecamatancom').value;
		var splitkecamatan = IDKECAMATAN.split(":");
		var IDCITY=document.getElementById('citycom').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('districtcom').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#kelurahancom');
		$.ajax({
	      url: "<?php echo base_url() . 'Korda/listkelurahan/'?>" + splitkecamatan[0] + '/' + splitcity[0] + '/' + splitdistrict[0],
	      dataType:'JSON',
	      success:function(data){
	        //clear the current content of the select
	        $select.html('');
	        //iterate over the data and append a select option
	        $select.append('<option value="0">-- Pilih Salah Satu --</option>');
	        $.each(data.kelurahanws, function(key, val){
	          $select.append('<option value="' + val.KELURAHAN + '">' + val.KELURAHAN + '</option>');
	        })
	      },
	      error:function(){
	        $select.html('<option value="-1">NONE AVAILABLE</option>');
	      }
	    });
		// alert(url);
	});
	$("#kelurahancom").change(function(){
		var IDKELURAHAN=document.getElementById('kelurahancom').value;
		var splitkelurahan = IDKELURAHAN.split(":");
		var IDKECAMATAN=document.getElementById('kecamatancom').value;
		var splitkecamatan = IDKECAMATAN.split(":");
		var IDCITY=document.getElementById('citycom').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('districtcom').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#zipcodehiddencom');
		$.ajax({
	     url: "<?php echo base_url() . 'Korda/listzipcode/'?>" + splitkecamatan[0] + '/' + splitcity[0] + '/' + splitdistrict[0] + '/' + splitkelurahan[0],
	      dataType:'JSON',
	      success:function(data){
	       //clear the current content of the select
	        $select.html('');
	        //iterate over the data and append a select option
	        $.each(data.zipcodews, function(key, val){
	          $select.html('<option value="' + val.ZIPCODE + '">' + val.ZIPCODE + '</option>');
			  // $select.html(val.ZIPCODE);
	        })
			document.getElementById('zipcodecom').value = document.getElementById('zipcodehiddencom').value;
	      },
	      error:function(){
			   // $select.val('-');
	        $select.html('<option value="-1">NONE AVAILABLE</option>');
	      }
	    });
		// alert(url);
	});
	$("#REF_PROFESSION_MODELNEW").change(function(){
		var PROFMODEL=document.getElementById('REF_PROFESSION_MODELNEW').value;
		var splitprofmodel = PROFMODEL.split(":");
		var $select=$('#REF_PROFESSION_IDNEW');
		var $select2=$('#OTH_BIZ_JOB_POSITIONNEW');
		$.ajax({
	      url: "<?php echo base_url() . 'Korda/listmodeltype/'?>" + splitprofmodel[0],
	      dataType:'JSON',
	      success:function(data){
	        //clear the current content of the select
	        $select.html('');
			$select2.html('');
	        //iterate over the data and append a select option
	        $select.append('<option value="0">-- Pilih Salah Satu --</option>');
	        $.each(data.modelws, function(key, val){
	          $select.append('<option value="' + val.REF_CUST_MODEL_ID + ':' + val.CUST_MODEL_NAME + '">' + val.CUST_MODEL_NAME + '</option>');
	        })
			$select2.append('<option value="0">-- Pilih Salah Satu --</option>');
	        $.each(data.modelws, function(key, val){
	          $select2.append('<option value="' + val.REF_CUST_MODEL_ID + ':' + val.CUST_MODEL_NAME + '">' + val.CUST_MODEL_NAME + '</option>');
	        })
	      },
	      error:function(){
	        $select.html('<option value="-1">NONE AVAILABLE</option>');
			$select2.html('<option value="-1">NONE AVAILABLE</option>');
	      }
	    });
	});				
});	
</script>