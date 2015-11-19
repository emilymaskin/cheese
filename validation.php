<?php
	function goBack($field){
		header('Location:'.str_replace('validation.php','signup.php',htmlspecialchars($_SERVER["PHP_SELF"])).'?error='.htmlspecialchars($field));
	}
	function checkName($name,$chars){
		return strlen($name) >= 2 && strlen($name) <= $chars && preg_match('/[a-zA-Z"&() -.{}]/',$name);
	}
	function checkStreetAddress($address,$chars){
		return strlen($address) && strlen($address) <= $chars && preg_match('/^[a-zA-Z0-9 -#.,]/',$address);
	}
	function checkEmail($email,$chars){
		return strlen($email) && strlen($email) <= $chars && preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email);	
	}
	function checkState($state){
		return strlen($state) == 2 && strtolower($state) == 'ny';
	}
	function checkPhone($phone){
		return strlen($phone) == 10 && preg_match('/[0-9]/',$phone);
	}
	function checkZip($zip){
		return strlen($zip) == 5 && preg_match('/[0-9]/',$zip);
	}
	function checkString($string,$chars){
		return (strlen($string) && strlen($string) <= $chars) && preg_match('/^[a-zA-Z0-9 !?\/&.,]/',$string);
	}
	if(isset($_POST['submit_x']) && isset($_POST['submit_y'])){
		if(!(isset($_POST['billing_first_name']) && checkName($_POST['billing_first_name'],20))){
			goBack('Billing Address: First Name');
			return false;
		}
		if(!(isset($_POST['billing_last_name']) && checkName($_POST['billing_last_name'],20))){
			goBack('Billing Address: Last Name');
			return false;
		}
		if(!(isset($_POST['billing_address1']) && checkStreetAddress($_POST['billing_address1'], 20))){
			goBack('Billing Address: Address 1');
			return false;
		}
		if(isset($_POST['billing_address2']) && strlen($_POST['billing_address2']) && !checkStreetAddress($_POST['billing_address2'], 20)){
			goBack('Billing Address: Address 2');
			return false;
		}
		if(!(isset($_POST['billing_city']) && checkName($_POST['billing_city'],20))){
			goBack('Billing Address: City');
			return false;
		}
		if(!(isset($_POST['billing_state']) && checkState($_POST['billing_state']))){
			goBack('Billing Address: State');
			return false;
		}
		if(!(isset($_POST['billing_zip']) && checkZip($_POST['billing_zip']))){
			goBack('Billing Address: Zip');
			return false;
		}
		if(!(isset($_POST['email']) && checkEmail($_POST['email'],30))){
			goBack('Email');
			return false;
		}
		if(!(isset($_POST['night_phone_a']) && isset($_POST['night_phone_b']) && isset($_POST['night_phone_c']) && checkPhone($_POST['night_phone_a'].$_POST['night_phone_b'].$_POST['night_phone_c']))){
			goBack('Phone');
			return false;
		}
		if(!(isset($_POST['first_name']) && checkName($_POST['first_name'],20))){
			goBack('Shipping Address: First Name');
			return false;
		}
		if(!(isset($_POST['last_name']) && checkName($_POST['last_name'],20))){
			goBack('Shipping Address: Last Name');
			return false;
		}
		if(!(isset($_POST['address1']) && checkStreetAddress($_POST['address1'], 20))){
			goBack('Shipping Address: Address 1');
			return false;
		}
		if(isset($_POST['address2']) && strlen($_POST['address2']) && !checkStreetAddress($_POST['address2'], 20)){
			goBack('Shipping Address: Address 2');
			return false;
		}
		if(!(isset($_POST['city']) && checkName($_POST['city'],20))){
			goBack('Shipping Address: City');
			return false;
		}
		if(!(isset($_POST['state']) && checkState($_POST['state']))){
			goBack('Shipping Address: State');
			return false;
		}
		if(!(isset($_POST['zip']) && checkZip($_POST['zip']))){
			goBack('Shipping Address: Zip');
			return false;
		}
		if(isset($_POST['favorite_cheese']) && strlen($_POST['favorite_cheese']) && !checkString($_POST['favorite_cheese'],20)){
			goBack('Favorite Cheese');
			return false;
		}
		if(isset($_POST['source']) && strlen($_POST['source']) && !checkString($_POST['source'],60)){
			goBack('Where did you hear about us?');
			return false;
		}
		$custom_fields = array(
			$is_gift = isset($_POST['is_gift']) ? 'yes' : 'no',
			$age = $_POST['age'],
			$gender = $_POST['gender'],
			$favorite_cheese = isset($_POST['favorite_cheese']) ? $_POST['favorite_cheese'] : '',
			$billing_first_name = $_POST['billing_first_name'],
			$billing_last_name = $_POST['billing_last_name'],
			$billing_address1 = $_POST['billing_address1'],
			$billing_address2 = isset($_POST['billing_address2']) ? $_POST['billing_address2'] : '',
			$billing_city = $_POST['billing_city'],
			$billing_state = $_POST['billing_state'],
			$billing_zip = $_POST['billing_zip'],
			$source = isset($_POST['source']) ? $_POST['source'] : '',
		);
		$custom_string = implode('|',$custom_fields);
	
		$all_fields = array();
		$all_fields['first_name'] = $_POST['first_name'];
		$all_fields['last_name'] = $_POST['last_name'];
		$all_fields['address1'] = $_POST['address1'];
		$all_fields['address2'] = $_POST['address2'];
		$all_fields['city'] = $_POST['city'];
		$all_fields['state'] = $_POST['state'];
		$all_fields['zip'] = $_POST['zip'];
		$all_fields['email'] = $_POST['email'];
		$all_fields['night_phone_a'] = $_POST['night_phone_a'];
		$all_fields['night_phone_b'] = $_POST['night_phone_b'];
		$all_fields['night_phone_c'] = $_POST['night_phone_c'];
		$all_fields['custom'] = $custom_string;
		
		$all_fields['cmd'] = $_POST['cmd'];
		$all_fields['hosted_button_id'] = $_POST['hosted_button_id'];
		$all_fields['item_name'] = $_POST['item_name'];
		$all_fields['on0'] = $_POST['on0'];
		$all_fields['os0'] = $_POST['os0'];
		$all_fields['currency_code'] = $_POST['currency_code'];
		$all_fields['submit_x'] = $_POST['submit_x'];
		$all_fields['submit_y'] = $_POST['submit_y'];
		
		$query_string = http_build_query($all_fields);

    	header('Location: https://www.paypal.com/cgi-bin/webscr?' . $query_string);
	}
	
	return false;
?>