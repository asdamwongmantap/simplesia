<?php 

class Mlogin extends CI_Model{
	
	function __construct()
	{
		parent::__construct();		
		
	}
	
	public function get_loginuser($datalogin)
	{
		$url = URL_WSBAFLITE; 
		
		//$userid = $this->input->post('userid');
		$post_stringgetaksesbaflite = 
        '
		<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:com="http://localhost/com.baf.baflites.ws.inbound:BafLitesWSDL">
		   <soapenv:Header/>
		   <soapenv:Body>
			  <com:WSCheckLogin>
				 <docCheckLoginRequest>
					<USERNAME>'.$datalogin['USERNAME'].'</USERNAME>
					<PASSWORD>'.$datalogin['PASSWORD'].'</PASSWORD>
				 </docCheckLoginRequest>
			  </com:WSCheckLogin>
		   </soapenv:Body>
		</soapenv:Envelope>
		';

        $soap_dogetaksesbaflite = curl_init();
        curl_setopt($soap_dogetaksesbaflite, CURLOPT_URL, $url);
        curl_setopt($soap_dogetaksesbaflite, CURLOPT_CONNECTTIMEOUT, 300);
        curl_setopt($soap_dogetaksesbaflite, CURLOPT_TIMEOUT, 300);
        curl_setopt($soap_dogetaksesbaflite, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($soap_dogetaksesbaflite, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($soap_dogetaksesbaflite, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($soap_dogetaksesbaflite, CURLOPT_POST, true);
        curl_setopt($soap_dogetaksesbaflite, CURLOPT_POSTFIELDS, $post_stringgetaksesbaflite);
        curl_setopt($soap_dogetaksesbaflite, CURLOPT_HTTPHEADER,
            array(
                'Content-Type: text/xml; charset=utf-8'
            ));
        $resultgetaksesbaflite = curl_exec($soap_dogetaksesbaflite);
        $errgetaksesbaflite = curl_error($soap_dogetaksesbaflite);

        $replacegetaksesbaflite = array(
            "soapenv:",
            "ser-root:"
        );
		
        $clean_xmlgetaksesbaflite = str_ireplace($replacegetaksesbaflite, '', $resultgetaksesbaflite);
        $xmlgetaksesbaflite = simplexml_load_string($clean_xmlgetaksesbaflite);

        $jsongetaksesbaflite = json_encode($xmlgetaksesbaflite->Body->WSCheckLoginResponse);
        $arraygetaksesbaflite = json_decode($jsongetaksesbaflite, TRUE);
		
		$Proses1agetaksesbaflite = json_encode($arraygetaksesbaflite["docCheckLoginResponse"]);
		$Proses1bgetaksesbaflite   = json_decode($Proses1agetaksesbaflite,TRUE);
		
		// $Proses1cgetaksesbaflite = json_encode($Proses1bgetaksesbaflite["arrayData"]);
		// $Proses1dgetaksesbaflite   = json_decode($Proses1cgetaksesbaflite,TRUE);
		
		//return $Proses1bgetaksesbaflite;
		if (!$Proses1bgetaksesbaflite){
			return $Proses1bgetaksesbaflite;
		}
		else{
			return $Proses1bgetaksesbaflite["arrayData"];
		}
		
	}
	public function get_aksesroleapp($appuri){
		$url = URL_WSBAFLITE;

		$post_stringgetroleapp = 
        '
		<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:com="http://localhost/com.baf.baflites.ws.inbound:BafLitesWSDL">
		   <soapenv:Header/>
		   <soapenv:Body>
			  <com:WSCheckPrivilegesApps>
				 <docCheckPrivilegesAppsRequest>
					<USER_APP_ID>'.$appuri.'</USER_APP_ID>
				 </docCheckPrivilegesAppsRequest>
			  </com:WSCheckPrivilegesApps>
		   </soapenv:Body>
		</soapenv:Envelope>
		';
	
        $soap_dogetroleapp = curl_init();
        curl_setopt($soap_dogetroleapp, CURLOPT_URL, $url);
        curl_setopt($soap_dogetroleapp, CURLOPT_CONNECTTIMEOUT, 300);
        curl_setopt($soap_dogetroleapp, CURLOPT_TIMEOUT, 300);
        curl_setopt($soap_dogetroleapp, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($soap_dogetroleapp, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($soap_dogetroleapp, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($soap_dogetroleapp, CURLOPT_POST, true);
        curl_setopt($soap_dogetroleapp, CURLOPT_POSTFIELDS, $post_stringgetroleapp);
        curl_setopt($soap_dogetroleapp, CURLOPT_HTTPHEADER,
            array(
                'Content-Type: text/xml; charset=utf-8'
            ));
        $resultgetroleapp = curl_exec($soap_dogetroleapp);
        $errgetroleapp = curl_error($soap_dogetroleapp);

        $replacegetroleapp = array(
            "soapenv:",
            "ser-root:"
        );
		
        $clean_xmlgetroleapp = str_ireplace($replacegetroleapp, '', $resultgetroleapp);
        $xmlgetroleapp = simplexml_load_string($clean_xmlgetroleapp);

        $jsongetroleapp = json_encode($xmlgetroleapp->Body->WSCheckPrivilegesAppsResponse);
        $arraygetroleapp = json_decode($jsongetroleapp, TRUE);
		$Proses2getroleapp = json_encode($arraygetroleapp["docCheckPrivilegesAppsResponse"]); 
        $Proses3getroleapp   = json_decode($Proses2getroleapp,TRUE);
		$Proses4getroleapp = json_encode($Proses3getroleapp["arrayData"]); 
        $Proses5getroleapp   = json_decode($Proses4getroleapp,TRUE);
		if (!$Proses5getroleapp[1]){
			return $Proses3getroleapp;
		}
		else {
			return $Proses5getroleapp;
		}
		
	}
	public function get_aksesrolemenu($datacekmenu){
		$url = URL_WSBAFLITE;

		$post_stringgetrolemenu = 
        '
		<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:com="http://localhost/com.baf.baflites.ws.inbound:BafLitesWSDL">
		   <soapenv:Header/>
		   <soapenv:Body>
			  <com:WSCheckPrivilegesMenu>
				 <docCheckPrivilegesRequest>
					<USER_GROUP_ID>'.$datacekmenu['USER_GROUP_ID'].'</USER_GROUP_ID>
					<REF_APP_ID>'.$datacekmenu['REF_APP_ID'].'</REF_APP_ID>
				 </docCheckPrivilegesRequest>
			  </com:WSCheckPrivilegesMenu>
		   </soapenv:Body>
		</soapenv:Envelope>
		';
	
        $soap_dogetrolemenu = curl_init();
        curl_setopt($soap_dogetrolemenu, CURLOPT_URL, $url);
        curl_setopt($soap_dogetrolemenu, CURLOPT_CONNECTTIMEOUT, 300);
        curl_setopt($soap_dogetrolemenu, CURLOPT_TIMEOUT, 300);
        curl_setopt($soap_dogetrolemenu, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($soap_dogetrolemenu, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($soap_dogetrolemenu, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($soap_dogetrolemenu, CURLOPT_POST, true);
        curl_setopt($soap_dogetrolemenu, CURLOPT_POSTFIELDS, $post_stringgetrolemenu);
        curl_setopt($soap_dogetrolemenu, CURLOPT_HTTPHEADER,
            array(
                'Content-Type: text/xml; charset=utf-8'
            ));
        $resultgetrolemenu = curl_exec($soap_dogetrolemenu);
        $errgetrolemenu = curl_error($soap_dogetrolemenu);

        $replacegetrolemenu = array(
            "soapenv:",
            "ser-root:"
        );
		
        $clean_xmlgetrolemenu = str_ireplace($replacegetrolemenu, '', $resultgetrolemenu);
        $xmlgetrolemenu = simplexml_load_string($clean_xmlgetrolemenu);

        $jsongetrolemenu = json_encode($xmlgetrolemenu->Body->WSCheckPrivilegesMenuResponse);
        $arraygetrolemenu = json_decode($jsongetrolemenu, TRUE);
		$Proses2getrolemenu = json_encode($arraygetrolemenu["docCheckPrivilegesResponse"]); 
        $Proses3getrolemenu   = json_decode($Proses2getrolemenu,TRUE);
		$Proses4getrolemenu = json_encode($Proses3getrolemenu["arrayData"]); 
        $Proses5getrolemenu   = json_decode($Proses4getrolemenu,TRUE);
		if (!$Proses5getrolemenu[1]){
			return $Proses3getrolemenu;
		}
		else {
			return $Proses5getrolemenu;
		}
		
	}
	public function get_aksesrolesubmenu($aksesmenuid){
		$url = URL_WSBAFLITE;

		$post_stringgetrolesubmenu = 
        '
		<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:com="http://localhost/com.baf.baflites.ws.inbound:BafLitesWSDL">
		   <soapenv:Header/>
		   <soapenv:Body>
			  <com:WSCheckPrivilegesSubMenu>
				 <docCheckPrivilegesSubMenuRequest>
					<REF_ACCESS_MENU_ID>'.$aksesmenuid.'</REF_ACCESS_MENU_ID>
				 </docCheckPrivilegesSubMenuRequest>
			  </com:WSCheckPrivilegesSubMenu>
		   </soapenv:Body>
		</soapenv:Envelope>
		';
	
        $soap_dogetrolesubmenu = curl_init();
        curl_setopt($soap_dogetrolesubmenu, CURLOPT_URL, $url);
        curl_setopt($soap_dogetrolesubmenu, CURLOPT_CONNECTTIMEOUT, 300);
        curl_setopt($soap_dogetrolesubmenu, CURLOPT_TIMEOUT, 300);
        curl_setopt($soap_dogetrolesubmenu, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($soap_dogetrolesubmenu, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($soap_dogetrolesubmenu, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($soap_dogetrolesubmenu, CURLOPT_POST, true);
        curl_setopt($soap_dogetrolesubmenu, CURLOPT_POSTFIELDS, $post_stringgetrolesubmenu);
        curl_setopt($soap_dogetrolesubmenu, CURLOPT_HTTPHEADER,
            array(
                'Content-Type: text/xml; charset=utf-8'
            ));
        $resultgetrolesubmenu = curl_exec($soap_dogetrolesubmenu);
        $errgetrolesubmenu = curl_error($soap_dogetrolesubmenu);

        $replacegetrolesubmenu = array(
            "soapenv:",
            "ser-root:"
        );
		
        $clean_xmlgetrolesubmenu = str_ireplace($replacegetrolesubmenu, '', $resultgetrolesubmenu);
        $xmlgetrolesubmenu = simplexml_load_string($clean_xmlgetrolesubmenu);

        $jsongetrolesubmenu = json_encode($xmlgetrolesubmenu->Body->WSCheckPrivilegesSubMenuResponse);
        $arraygetrolesubmenu = json_decode($jsongetrolesubmenu, TRUE);
		$Proses2getrolesubmenu = json_encode($arraygetrolesubmenu["docCheckPrivilegesSubMenuResponse"]); 
        $Proses3getrolesubmenu   = json_decode($Proses2getrolesubmenu,TRUE);
		$Proses4getrolesubmenu = json_encode($Proses3getrolesubmenu["arraydata"]); 
        $Proses5getrolesubmenu   = json_decode($Proses4getrolesubmenu,TRUE);
		if (!$Proses5getrolesubmenu[1]){
			return $Proses3getrolesubmenu;
		}
		else {
			return $Proses5getrolesubmenu;
		}
		
	}
	public function get_detailuseraksesbyid($useraksesid)
	{
		$url = URL_WSBAFLITE; 
		$post_stringgetuseraksesbyid = 
        '
		<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:com="http://localhost/com.baf.baflites.ws.inbound:BafLitesWSDL">
		   <soapenv:Header/>
		   <soapenv:Body>
			  <com:WSGetAccessUser>
				 <docGetUserAccessRequest>
					<USER_ID>'.$useraksesid.'</USER_ID>
				</docGetUserAccessRequest>
			  </com:WSGetAccessUser>
		   </soapenv:Body>
		</soapenv:Envelope>
		';

        $soap_dogetuseraksesbyid = curl_init();
        curl_setopt($soap_dogetuseraksesbyid, CURLOPT_URL, $url);
        curl_setopt($soap_dogetuseraksesbyid, CURLOPT_CONNECTTIMEOUT, 300);
        curl_setopt($soap_dogetuseraksesbyid, CURLOPT_TIMEOUT, 300);
        curl_setopt($soap_dogetuseraksesbyid, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($soap_dogetuseraksesbyid, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($soap_dogetuseraksesbyid, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($soap_dogetuseraksesbyid, CURLOPT_POST, true);
        curl_setopt($soap_dogetuseraksesbyid, CURLOPT_POSTFIELDS, $post_stringgetuseraksesbyid);
        curl_setopt($soap_dogetuseraksesbyid, CURLOPT_HTTPHEADER,
            array(
                'Content-Type: text/xml; charset=utf-8'
            ));
        
        $resultgetuseraksesbyid = curl_exec($soap_dogetuseraksesbyid);
        $errgetuseraksesbyid = curl_error($soap_dogetuseraksesbyid);

        $replacegetuseraksesbyid = array(
            "soapenv:",
            "ser-root:"
        );
		
        $clean_xmlgetuseraksesbyid = str_ireplace($replacegetuseraksesbyid, '', $resultgetuseraksesbyid);
        $xmlgetuseraksesbyid = simplexml_load_string($clean_xmlgetuseraksesbyid);

        $jsongetuseraksesbyid = json_encode($xmlgetuseraksesbyid->Body->WSGetAccessUserResponse);
        $arraygetuseraksesbyid = json_decode($jsongetuseraksesbyid, TRUE);
		
		$Proses1agetuseraksesbyid = json_encode($arraygetuseraksesbyid["docGetUserAccessResponse"]);
		$Proses1bgetuseraksesbyid   = json_decode($Proses1agetuseraksesbyid,TRUE);
		$Proses2getuseraksesbyid = json_encode($Proses1bgetuseraksesbyid["arrayData"]); 
        $Proses3getuseraksesbyid   = json_decode($Proses2getuseraksesbyid,TRUE);
		
		return $Proses3getuseraksesbyid;
		
		
	}
	
}

