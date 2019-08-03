<script type="text/javascript">
$(document).ready(function(){
	$("#province").change(function(){
		var IDPROV=document.getElementById('province').value;
		var splitidprov = IDPROV.split(":");
		var $select=$('#district');
		$.ajax({
	      url: "<?php echo base_url() . 'Korda/listdistrict/'?>" + splitidprov[0],
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
	$("#district").change(function(){
		var IDDISTRICT=document.getElementById('district').value;
		var splitdistrict = IDDISTRICT.split(":");
		var $select=$('#city');
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
	$("#city").change(function(){
		var IDCITY=document.getElementById('city').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('district').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#kecamatan');
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
	$("#kecamatan").change(function(){
		var IDKECAMATAN=document.getElementById('kecamatan').value;
		var splitkecamatan = IDKECAMATAN.split(":");
		var IDCITY=document.getElementById('city').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('district').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#kelurahan');
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
	$("#kelurahan").change(function(){
		var IDKELURAHAN=document.getElementById('kelurahan').value;
		var splitkelurahan = IDKELURAHAN.split(":");
		var IDKECAMATAN=document.getElementById('kecamatan').value;
		var splitkecamatan = IDKECAMATAN.split(":");
		var IDCITY=document.getElementById('city').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('district').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#zipcodehidden');
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
			document.getElementById('zipcode').value = document.getElementById('zipcodehidden').value;
	      },
	      error:function(){
			   // $select.val('-');
	        $select.html('<option value="-1">NONE AVAILABLE</option>');
	      }
	    });
		// alert(url);
	});
	
	$("#resprovince").change(function(){
		var IDPROV=document.getElementById('resprovince').value;
		var splitidprov = IDPROV.split(":");
		var $select=$('#resdistrict');
		$.ajax({
	      url: "<?php echo base_url() . 'Korda/listdistrict/'?>" + splitidprov[0],
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
	$("#resdistrict").change(function(){
		var IDDISTRICT=document.getElementById('resdistrict').value;
		var splitdistrict = IDDISTRICT.split(":");
		var $select=$('#rescity');
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
	$("#rescity").change(function(){
		var IDCITY=document.getElementById('rescity').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('resdistrict').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#reskecamatan');
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
	$("#reskecamatan").change(function(){
		var IDKECAMATAN=document.getElementById('reskecamatan').value;
		var splitkecamatan = IDKECAMATAN.split(":");
		var IDCITY=document.getElementById('rescity').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('resdistrict').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#reskelurahan');
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
	$("#reskelurahan").change(function(){
		var IDKELURAHAN=document.getElementById('reskelurahan').value;
		var splitkelurahan = IDKELURAHAN.split(":");
		var IDKECAMATAN=document.getElementById('reskecamatan').value;
		var splitkecamatan = IDKECAMATAN.split(":");
		var IDCITY=document.getElementById('rescity').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('resdistrict').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#reszipcodehidden');
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
			document.getElementById('reszipcode').value = document.getElementById('reszipcodehidden').value;
	      },
	      error:function(){
			   // $select.val('-');
	        $select.html('<option value="-1">NONE AVAILABLE</option>');
	      }
	    });
		// alert(url);
	});
	
	//mailing
	$("#mailprovince").change(function(){
		var IDPROV=document.getElementById('mailprovince').value;
		var splitidprov = IDPROV.split(":");
		var $select=$('#maildistrict');
		$.ajax({
	      url: "<?php echo base_url() . 'Korda/listdistrict/'?>" + splitidprov[0],
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
	$("#maildistrict").change(function(){
		var IDDISTRICT=document.getElementById('maildistrict').value;
		var splitdistrict = IDDISTRICT.split(":");
		var $select=$('#mailcity');
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
	$("#mailcity").change(function(){
		var IDCITY=document.getElementById('mailcity').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('maildistrict').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#mailkecamatan');
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
	$("#mailkecamatan").change(function(){
		var IDKECAMATAN=document.getElementById('mailkecamatan').value;
		var splitkecamatan = IDKECAMATAN.split(":");
		var IDCITY=document.getElementById('mailcity').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('maildistrict').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#mailkelurahan');
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
	$("#mailkelurahan").change(function(){
		var IDKELURAHAN=document.getElementById('mailkelurahan').value;
		var splitkelurahan = IDKELURAHAN.split(":");
		var IDKECAMATAN=document.getElementById('mailkecamatan').value;
		var splitkecamatan = IDKECAMATAN.split(":");
		var IDCITY=document.getElementById('mailcity').value;
		var splitcity = IDCITY.split(":");
		var IDDISTRICT=document.getElementById('maildistrict').value;
		var splitdistrict = IDDISTRICT.split(":");
		// var IDCITY = str.replace(CITY, " ");
		//var url = 'Korda/listkecamatan/' + IDCITY + '/' + IDDISTRICT;
		var $select=$('#mailzipcodehidden');
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
			document.getElementById('mailzipcode').value = document.getElementById('mailzipcodehidden').value;
	      },
	      error:function(){
			   // $select.val('-');
	        $select.html('<option value="-1">NONE AVAILABLE</option>');
	      }
	    });
		// alert(url);
	});
	$("#BANK_NAMENEW").change(function(){
		var BANK_NAME=document.getElementById('BANK_NAMENEW').value;
		var splitbank = BANK_NAME.split(":");
		document.getElementById('BI_CODENEW').value = splitbank[2];
	});
					
});	
</script>