<script type="text/javascript">
$(document).ready(function(){
	//emergencycontact
	$("#provinceec").change(function(){
		var IDPROV=document.getElementById('provinceec').value;
		var splitidprov = IDPROV.split(":");
		var $select=$('#districtec');
		$.ajax({
			url: "<?php echo base_url() . 'Korda/listdistrict/'?>" + splitidprov[0],
	      // url: "<?php echo base_url() . 'Korda/listdistrict/'?>" + IDPROV,
	      dataType:'JSON',
	      success:function(data){
	        //clear the current content of the select
	        $select.html('');
	        // $selectKecamatan.html('');
	        // $selectCity.html('');
	        //$select.append('<option id="0">Please Select One ...</option>');
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
	$("#districtec").change(function(){
		var IDDISTRICT=document.getElementById('districtec').value;
		var splitdistrict = IDDISTRICT.split(":");
		var $select=$('#cityec');
		$.ajax({
	      url: "<?php echo base_url() . 'Korda/listcity/'?>" + splitdistrict[0],
	      dataType:'JSON',
	      success:function(data){
	        //clear the current content of the select
	        $select.html('');
	        // $selectKecamatan.html('');
	        // $selectCity.html('');
	        //$select.append('<option id="0">Please Select One ...</option>');
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
	$("#cityec").change(function(){
		var IDCITY=document.getElementById('cityec').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('districtec').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#kecamatanec');
		$.ajax({
	      url: "<?php echo base_url() . 'Korda/listkecamatan/'?>" + splitcity[0] + '/' + splitdistrict[0],
	      dataType:'JSON',
	      success:function(data){
	        //clear the current content of the select
	        $select.html('');
	        // $selectKecamatan.html('');
	        // $selectCity.html('');
	        //$select.append('<option id="0">Please Select One ...</option>');
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
	$("#kecamatanec").change(function(){
		var IDKECAMATAN=document.getElementById('kecamatanec').value;
		var splitkecamatan = IDKECAMATAN.split(":");
		var IDCITY=document.getElementById('cityec').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('districtec').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#kelurahanec');
		$.ajax({
	      url: "<?php echo base_url() . 'Korda/listkelurahan/'?>" + splitkecamatan[0] + '/' + splitcity[0] + '/' + splitdistrict[0],
	      dataType:'JSON',
	      success:function(data){
	        //clear the current content of the select
	        $select.html('');
	        // $selectKecamatan.html('');
	        // $selectCity.html('');
	        //$select.append('<option id="0">Please Select One ...</option>');
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
	$("#kelurahanec").change(function(){
		var IDKELURAHAN=document.getElementById('kelurahanec').value;
		var splitkelurahan = IDKELURAHAN.split(":");
		var IDKECAMATAN=document.getElementById('kecamatanec').value;
		var splitkecamatan = IDKECAMATAN.split(":");
		var IDCITY=document.getElementById('cityec').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('districtec').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#zipcodehiddenec');
		$.ajax({
	      url: "<?php echo base_url() . 'Korda/listzipcode/'?>" + splitkecamatan[0] + '/' + splitcity[0] + '/' + splitdistrict[0] + '/' + splitkelurahan[0],
	      dataType:'JSON',
	      success:function(data){
	       //clear the current content of the select
	        $select.html('');
	        // $selectKecamatan.html('');
	        // $selectCity.html('');
	        //$select.append('<option id="0">Please Select One ...</option>');
	        //iterate over the data and append a select option
	        // $select.append('<option value="0">-- Pilih Salah Satu --</option>');
			// $select.html('-');
	        $.each(data.zipcodews, function(key, val){
	          $select.html('<option value="' + val.ZIPCODE + '">' + val.ZIPCODE + '</option>');
			  // $select.html(val.ZIPCODE);
	        })
			document.getElementById('zipcodeec').value = document.getElementById('zipcodehiddenec').value;
	      },
	      error:function(){
			   // $select.val('-');
	        $select.html('<option value="-1">NONE AVAILABLE</option>');
	      }
	    });
		// alert(url);
	});
					
});	
</script>