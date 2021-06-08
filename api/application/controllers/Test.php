<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class test extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        
    }

	public function test()
	{
		if ( "OPTIONS" === $_SERVER['REQUEST_METHOD'] ) {
			//die();
		}
		header('Content-Type: application/json');
		$http_origin = $_SERVER['HTTP_ORIGIN'];

$allowed_domains = array(
  '127.0.0.1:8200',
  'http://localhost:8200',
  '*',
  'http://127.0.0.1:8200',
);

if (in_array($http_origin, $allowed_domains))
{  
    header("Access-Control-Allow-Origin: *, 127.0.0.1:8200");
}

		$method = $_SERVER['REQUEST_METHOD'];
		json_output(200,array('status' => 200,'message' => 'API Working Fine'));
	}
	
    function calculateOrderAmount(array $items): int {

	  // Replace this constant with a calculation of the order's amount

	  // Calculate the order total on the server to prevent

	  // customers from directly manipulating the amount on the client

	  return 1400;

}

	

}
