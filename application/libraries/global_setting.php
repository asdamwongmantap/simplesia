<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

class Global_setting{
	public function __construct(){
		$this->ci =& get_instance();
     	$this->ci->load->library('session');
		 $this->ci->load->helper('url');
    	// $this->username 	= $this->ci->library->item('username');
    	// $this->password 	= $this->ci->library->item('password');
	}
// function to get user login identity
public function get_loginuser()
	{
		$user = $this->ci->session->userdata('username');
		$password = $this->ci->session->userdata('password');

		$url = URL_WSBAFLITE; 
		$post_stringgetaksesbaflite = 
        '
		<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:com="http://localhost/com.baf.baflites.ws.inbound:BafLitesWSDL">
		   <soapenv:Header/>
		   <soapenv:Body>
			  <com:WSCheckLogin>
				 <docCheckLoginRequest>
					<USERNAME>'.$user.'</USERNAME>
					<PASSWORD>'.$password.'</PASSWORD>
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
		
		if (!$Proses1bgetaksesbaflite){
			return $Proses1bgetaksesbaflite;
		}
		else{
			return $Proses1bgetaksesbaflite["arrayData"];
		}
		
	}
// function to get role menu
public function get_aksesrolemenu()
	{
		$usergroupid = $this->ci->session->userdata('usergroupid');
		$appid = $this->ci->session->userdata('appid');
		$datacekmenu = array('USER_GROUP_ID' =>$usergroupid,'REF_APP_ID' =>$appid);

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
// function to get role submenu
public function get_aksesrolesubmenu($aksesmenuid)
	{
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
// function to get setting dashboard
public function get_settingdashboard()
	{
		$url = URL_WSBAFLITE; 
		$post_stringgetgeneralsetting = 
        '
		<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:com="http://localhost/com.baf.baflites.ws.inbound:BafLitesWSDL">
		   <soapenv:Header/>
		   <soapenv:Body>
			  <com:WSGetGeneralSetting>
				 <docGeneralSettingRequest>
					<GENERAL_SETTING_CODE>SETTING_DASHBOARD</GENERAL_SETTING_CODE>
				 </docGeneralSettingRequest>
			  </com:WSGetGeneralSetting>
		   </soapenv:Body>
		</soapenv:Envelope>
		';

        $soap_dogetgeneralsetting = curl_init();
        curl_setopt($soap_dogetgeneralsetting, CURLOPT_URL, $url);
        curl_setopt($soap_dogetgeneralsetting, CURLOPT_CONNECTTIMEOUT, 300);
        curl_setopt($soap_dogetgeneralsetting, CURLOPT_TIMEOUT, 300);
        curl_setopt($soap_dogetgeneralsetting, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($soap_dogetgeneralsetting, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($soap_dogetgeneralsetting, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($soap_dogetgeneralsetting, CURLOPT_POST, true);
        curl_setopt($soap_dogetgeneralsetting, CURLOPT_POSTFIELDS, $post_stringgetgeneralsetting);
        curl_setopt($soap_dogetgeneralsetting, CURLOPT_HTTPHEADER,
            array(
                'Content-Type: text/xml; charset=utf-8'
            ));
        
        $resultgetgeneralsetting = curl_exec($soap_dogetgeneralsetting);
        $errgetgeneralsetting = curl_error($soap_dogetgeneralsetting);

        $replacegetgeneralsetting = array(
            "soapenv:",
            "ser-root:"
        );
		
        $clean_xmlgetgeneralsetting = str_ireplace($replacegetgeneralsetting, '', $resultgetgeneralsetting);
        $xmlgetgeneralsetting = simplexml_load_string($clean_xmlgetgeneralsetting);

        $jsongetgeneralsetting = json_encode($xmlgetgeneralsetting->Body->WSGetGeneralSettingResponse);
        $arraygetgeneralsetting = json_decode($jsongetgeneralsetting, TRUE);
		
		$Proses1agetgeneralsetting = json_encode($arraygetgeneralsetting["docGeneralSettingResponse"]);
		$Proses1bgetgeneralsetting   = json_decode($Proses1agetgeneralsetting,TRUE);
		$Proses2getgeneralsetting = json_encode($Proses1bgetgeneralsetting["arrayData"]); 
        $Proses3getgeneralsetting   = json_decode($Proses2getgeneralsetting,TRUE);
		//return $Proses3getgeneralsetting;
		// return $jsongetgeneralsetting;
		if (!$Proses3getgeneralsetting[1]){
			return $Proses1bgetgeneralsetting;
		}
		else{
			return $Proses3getgeneralsetting;
		}
	}
// function for logout
public function get_logout()
	{
		$datasession = array(
			'userid' =>$this->ci->session->userdata('userid'),
			'username' =>$this->ci->session->userdata('username'),
			'passwordasli' =>$this->ci->session->userdata('passwordasli'),
			'password' =>$this->ci->session->userdata('password'),
			'usergroupid' =>$this->ci->session->userdata('usergroupid'),
			'fullname' =>$this->ci->session->userdata('fullname'),
			'usergroupname' =>$this->ci->session->userdata('usergroupname'),
			'userappid' =>$this->ci->session->userdata('userappid'),
			'profile_img' =>$this->ci->session->userdata('profile_img'),
			'branchcode' =>$this->ci->session->userdata('branchcode')
			);
		
		$dataunset = array(
			$this->ci->session->unset_userdata($datasession),
			session_destroy()
		);
		
		
	}
}
