		<?php include('header.php');?>
		<p class="signup_message"><?
			if(isset($_GET) && isset($_GET['error']) && strlen($_GET['error'])){
				echo '<span class="error">There was a problem with the data you entered in field '. $_GET['error'] . '. Please try again.</span>';
			}
			else{
				echo '&rarr; Now accepting orders for shipment beginning Nov. 1, 2013 &larr;';
			}
		?></p>
		<form action="validation.php" method="post" target="_top" id="signup_form">
			<fieldset>
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="ZXFH4WQYFPECA">
				<input type="hidden" name="item_name" value="NYC Cheese of the Month Club">
				<table>
					<tr><td colspan="2">
						<input type="hidden" name="on0" value="subscription length">Choose your subscription:<br/>
						<select name="os0" id="os0">
							<option value="3 Months">3 Months $159.00 USD</option>
							<option value="6 Months">6 Months $298.00 USD</option>
							<option value="12 Months">12 Months $575.00 USD</option>
						</select>
					</td></tr>
					<tr><td colspan="2">
						Billing Address
					</td></tr>
					<tr><td colspan="2">
						<label>First Name</label>
						<input type="text" class="billing_field" id="billing_first_name" name="billing_first_name" maxlength=20 />
					</td></tr>
					<tr><td colspan="2">
						<label>Last Name</label>
						<input type="text" class="billing_field" id="billing_last_name" name="billing_last_name" maxlength=20 />
					</td></tr>
					<tr><td colspan="2">
						<label>Address 1</label>
						<input type="text" class="billing_field" id="billing_address1" name="billing_address1" maxlength=20 />
					</td></tr>
					<tr><td colspan="2">
						<label>Address 2</label>
						<input type="text" class="billing_field" id="billing_address2" name="billing_address2" maxlength=10 />
					</td></tr>
					<tr><td colspan="2">
						<label>City</label>
						<input type="text" class="billing_field" id="billing_city" name="billing_city" maxlength=20 />
					</td></tr>
					<tr><td>
						<label>State</label>
						<select name="billing_state" id="billing_state">
							<option value="NY">NY</option>
						</select>
					</td>
					<td>
						<label>Zip</label>
						<input type="text" class="billing_field" id="billing_zip" name="billing_zip" maxlength=5 />
					</td></tr>
					<tr><td colspan="2">
						<label>Email</label>
						<input type="text" id="email" name="email" maxlength=30 />
					</td></tr>
					<tr><td colspan="2" class="phone_field">
						<label>Phone</label>
						<input type="text" id="night_phone_a" name="night_phone_a" maxlength=3 />
						<input type="text" id="night_phone_b" name="night_phone_b" maxlength=3 />
						<input type="text" id="night_phone_c" name="night_phone_c" maxlength=4 />
					</td></tr>
				</table>
			</fieldset>
			<fieldset>
				<table>
					<tr><td colspan="2">
						Shipping Address
					</td></tr>
					<tr><td colspan="2" class="checkboxes">
						<input type="checkbox" name="same_as_billing" id="same_as_billing" /><label for="same_as_billing">Same as billing address</label>
						<input type="checkbox" name="is_gift" id="is_gift" /><label for="is_gift">This order is a gift</label>
					</td></tr>
					<tr><td colspan="2">
						<label>First Name</label>
						<input type="text" class="shipping_field" id="first_name" name="first_name" maxlength=20 />
					</td></tr>
					<tr><td colspan="2">
						<label>Last Name</label>
						<input type="text" class="shipping_field" id="last_name" name="last_name" maxlength=20 />
					</td></tr>
					<tr><td colspan="2">
						<label>Address 1</label>
						<input type="text" class="shipping_field" id="address1" name="address1" maxlength=20 />
					</td></tr>
					<tr><td colspan="2">
						<label>Address 2</label>
						<input type="text" class="shipping_field" id="address2" name="address2" maxlength=10 />
					</td></tr>
					<tr><td colspan="2">
						<label>City</label>
						<input type="text" class="shipping_field" id="city" name="city" maxlength=20 />
					</td></tr>
					<tr><td>
						<label>State</label>
						<select name="state" id="state">
							<option value="NY">NY</option>
						</select>
					</td>
					<td>
						<label>Zip</label>
						<input type="text" class="shipping_field" id="zip" name="zip" maxlength=5 />
					</td></tr>
					<tr><td colspan="2">
						<label>What is your favorite cheese?</label> 
						<input type="text" id="favorite_cheese" name="favorite_cheese" maxlength=20 />
					</td></tr>
					<tr><td>
						<label>Age</label> 
						<select name="age" id="age">
							<option value="no answer">No answer</option>
							<option value="18-24">18-24</option>
							<option value="25-34">25-34</option>
							<option value="35-44">35-44</option>
							<option value="45-54">45-54</option>
							<option value="55+">55+</option>
						</select>
					</td>
					<td>
						<label>Gender</label>
						<select name="gender" id="gender">
							<option value="no answer">No answer</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Other</option>
						</select>
					</td></tr>
				</table>
			</fieldset>
			<div class="source_field">
				<label>Where did you hear about us?</label><input type="text" id="source" name="source" maxlength=60 />
			</div>

			<input type="hidden" name="custom" id="custom" value="left blank" />
			<input type="hidden" name="currency_code" value="USD">
			<input id="submit_button" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
	</div>
	<script>
		$('#same_as_billing').on('change',function(){
			if(this.checked){
				for(var i=0;i<$('.billing_field').length;i++){
					$($('.shipping_field')[i]).val($($('.billing_field')[i]).val());
					$('#is_gift').attr('disabled',true);
				}
			}
			else{
				for(var i=0;i<$('.billing_field').length;i++){
					$($('.shipping_field')[i]).val('');
					$('#is_gift').attr('disabled',false);
				}
			}
		})
	
		$.validator.setDefaults({
		  debug: true,
		  success: "valid"
		});
		$.extend(jQuery.validator.messages, {
		    required: "Required",
		});
		$.validator.addMethod(
			"length", function(value, element, param) {
 				return this.optional(element) || value.length == param;
			}, jQuery.format("Invalid")
		);
		$.validator.addMethod(
			"namestring", function(value, element, param) {
				return this.optional(element) || value.match(/[a-zA-Z"&()-/*.{}]/);
			}, jQuery.format("Invalid")			
		);
		$.validator.addMethod(
			"address", function(value, element, param) {
				return this.optional(element) || value.match(/^[a-zA-Z0-9 -#.,]/);
			}, jQuery.format("Invalid")			
		);
		$.validator.addMethod(
			"string", function(value, element, param) {
				return this.optional(element) || value.match(/^[a-zA-Z0-9 !?\/&.,]/);
			}, jQuery.format("Invalid")			
		);
		$.validator.addMethod(
			"state", function(value, element, param) {
 				return this.optional(element) || value.toLowerCase() == 'ny';
			}, jQuery.format("Invalid")
		);
		$('#submit_button').on( "click", function( event ) {
			$('#signup_form').validate({
				rules : {
		    		billing_first_name : {
		    			required : true,
		    			maxlength : 20,
		    			namestring : true,
		    		},
		    		billing_last_name : {
		    			required : true,
		    			maxlength : 20,
		    			namestring : true,
		    		},
		    		billing_address1 : {
		    			required : true,
		    			maxlength : 20,
		    			address : true,
		    		},
		    		billing_address2 : {
		    			required : false,
		    			maxlength : 20,
		    			address : true,
		    		},
		    		billing_city : {
		    			required : true,
		    			maxlength : 20,
		    			namestring : true,
		    		},
		    		billing_state : {
		    			required : true,
		    			length : 2,
		    			state : true,
		    		},
		    		billing_zip : {
		    			required : true,
		    			length : 5,
		    			digits : true,
		    		},
		      		email : {
		    			required : true,
		    			email : true,
		    			maxlength : 30,
		    		},
		      		night_phone_a : {
		    			required : true,
		    			length : 3,
		    			digits : true,
		    		},
		      		night_phone_b : {
		    			required : true,
		    			length : 3,
		    			digits : true,
		    		},
		      		night_phone_c : {
		    			required : true,
		    			length : 4,
		    			digits : true,
		    		},
		      		first_name : {
		    			required : true,
		    			maxlength : 20,
		    			namestring : true,
		    		},
		      		last_name : {
		    			required : true,
		    			maxlength : 20,
		    			namestring : true,
		    		},
		      		address1 : {
		    			required : true,
		    			maxlength : 20,
		    			address : true,
		    		},
		    		address2 : {
		    			required : false,
		    			maxlength : 20,
		    			address : true,		    			
		    		},
		      		city : {
		    			required : true,
		    			maxlength : 20,
		    			namestring : true,
		    		},
		      		state : {
		    			required : true,
		    			length : 2,
		    			state : true,
		    		},
		      		zip : {
		    			required : true,
		    			length : 5,
		    			digits : true,
		    		},
		    		favorite_cheese : {
		    			maxlength : 20,
		    			string : true,
		    		},
		    		source : {
		    			maxlength : 60,
		    			string : true,
		    		}
			  	},
			   	errorPlacement: function(error, element) {
			   		if (element.attr("name") == "night_phone_a" || element.attr("name") == "night_phone_b" || element.attr("name") == "night_phone_c"){
			      		$('.phone_field label.error').remove();
			      		error.insertAfter("#night_phone_c");
			       	}
			       	else{
			        	error.insertAfter(element);
			        }
			   },
			 	submitHandler : function(form){
					form.submit();
				}
			});
		});
	</script>
</body>
</html>