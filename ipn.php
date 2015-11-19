<?php
ini_set('log_errors', true);
ini_set('error_log', dirname(__FILE__).'/ipn_errors.log');

// intantiate the IPN listener
include('ipnlistener.php');
$listener = new IpnListener();

$listener->use_sandbox = false;

// try to process the IPN POST
try {
    $listener->requirePostMethod();
    $verified = $listener->processIpn();
} catch (Exception $e) {
    error_log($e->getMessage());
    exit(0);
}

if ($verified) {
	
	$req = 'cmd=_notify-validate&'.file_get_contents("php://input");
	$raw_post = file_get_contents("php://input");
    $post_array = $listener->decodePayPalIPN($raw_post);
	$fields = array(
		'payment_date',
		'last_name',
		'first_name',
		'payer_business_name',
		'payer_email',
		'payer_id',
		
		'os0',
		'mc_gross',
		'payment_status',
		'payment_type',
		
		'address_name',
		'address_street',
		'address_city',
		'address_state',
		'address_zip',
		'contact_phone',
	);
	
	$new_array = array();
			
	for($i=0;$i<count($fields);$i++){
		$new_array[$fields[$i]] = str_replace(array("\r", "\n", ","), '', $post_array[$fields[$i]]);
	}
	
	if(isset($post_array['custom'])){
		$custom_array = str_replace(',','',$post_array['custom']);
		$custom_array = explode('|',$custom_array);
		$new_array['is_gift'] = $custom_array[0];
		$new_array['age'] = $custom_array[1];
		$new_array['gender'] = $custom_array[2];
		$new_array['favorite_cheese'] = $custom_array[3];
		$new_array['billing_first_name'] = $custom_array[4];		
		$new_array['billing_last_name'] = $custom_array[5];		
		$new_array['billing_address1'] = $custom_array[6];		
		$new_array['billing_address2'] = $custom_array[7];		
		$new_array['billing_city'] = $custom_array[8];		
		$new_array['billing_state'] = $custom_array[9];		
		$new_array['billing_zip'] = $custom_array[10];
		$new_array['source'] = $custom_array[11];
	}
	
	$post_value_string = implode(',',$new_array);
			
	file_put_contents('subscribers.csv', PHP_EOL.$post_value_string, FILE_APPEND);
} else {
    mail('info@nyccheeseclub.com', 'Invalid IPN', $listener->getTextReport());
}

?>