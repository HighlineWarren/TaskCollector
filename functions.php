<?php
	function connectToAPI(){
		$GLOBAL[$autotask_webservices_url];
		$loginarray = array('login' => $GLOBALS[$autotask_username], 'password' => $GLOBALS[$autotask_password], 'uri' => $GLOBALS[$autotask_uri], 'location' => $GLOBAL[$autotask_url]);
		$client = new SoapClient($wsdl, $loginarray);
        return $client;
    }