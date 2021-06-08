<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	function json_output($statusHeader,$response)
	{
		$ci =& get_instance();
		$ci->output->set_content_type('application/json');
		$ci->output->set_status_header($statusHeader);
		$ci->output->set_header('Access-Control-Allow-Origin: *');
        $ci->output->set_header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept,  Auth-Key, Client-Service, User-ID, Token"); 
        $ci->output->set_header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT"); 
	
		$ci->output->set_output(json_encode($response));
	}

	function responseSuccesss($status,$message, $response){

		$ci =& get_instance();
		$ci->output->set_content_type('application/json');
		$ci->output->set_status_header($status);
		$ci->output->set_header('Access-Control-Allow-Origin: *');
        $ci->output->set_header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept,  Auth-Key, Client-Service, User-ID, Token"); 
        $ci->output->set_header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
		$final_response = array();
		$final_response['status'] = $status;
		$final_response['message'] = $message;
		$final_response['data'] = $response;
		$ci->output->set_output(json_encode($final_response));
		//echo json_encode($final_response);
	}

	function responseFailed($response){
		$ci =& get_instance();
		$ci->output->set_content_type('application/json');
		$ci->output->set_status_header('200');
		$ci->output->set_header('Access-Control-Allow-Origin: *');
        $ci->output->set_header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept,  Auth-Key, Client-Service, User-ID, Token"); 
        $ci->output->set_header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
		$final_response = array();
		// $final_response['status'] = $status;
		// $final_response['message'] = $message;
		$final_response['data'] = $response['status'];
		$final_response['message'] = $response['message'];
		$ci->output->set_output(json_encode($final_response));
	}

	?>