<?php 
	/**
	 * NINA Framework
	 * Vertion 1.0
	 * Author NINA Co.,Ltd. (nina@nina.vn)
	 * Copyright (C) 2015 NINA Co.,Ltd. All rights reserved
	*/
	 
	if(!defined('_lib')) die("Error");
	function nettuts_error_handler($number, $message, $file, $line, $vars)
	{
		if ( ($number !== E_NOTICE) && ($number < 2048) ) {
			include 'templates/error_tpl.php';
			die();
		}
	}
	//set_error_handler('nettuts_error_handler');
	//error_reporting(0);

	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$config_url=$_SERVER["SERVER_NAME"].'';
	$config['debug']=1;    #Bật chế độ debug dành cho developer
	$config['lang']="vi";
	$config['salt1']='@nina';
	$config['salt2']='@#$fd_!34^';
	$config_email="admin@misuonbotogiaphat.com";
	$config_pass="2xNFnM0SO";
	$config_ip="120.72.119.4";

	$config['login']['delay']=5;
	$config['login']['attempt']=3;

	/* Cấu hình Key site google recapcha */
	$config_site_key = '6Leo-JoUAAAAAKDucDynBZuRDl-qh9jMuaTN9E98';
	$config_secret_key = '6Leo-JoUAAAAAHhZRQTZ8DdeA6XusMdgRu5Amhne';
	$config_recaptcha_url='https://www.google.com/recaptcha/api/siteverify';
	$config_google_recapcha = 'true';

	

	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'misuonboto_db';
	$config['database']['password'] = 'SXLdDPcd';
	$config['database']['database'] = 'misuonboto_db';
	$config['database']['refix'] = 'table_';


	$config['author']['name'] = '';
	$config['author']['email'] = '';
	$config['author']['timefinish'] = '5/2018';

?>