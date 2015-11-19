<?php include('header.php');?>
	<form id="contact_form" action="mail.php" method="post" enctype="multipart/form-data">
		<div class="form_field">
			<label for="name">name</label>
			<input type="text" id="name" name="name" />
		</div>
		<div class="form_field">
			<label for="email">e-mail</label>
			<input type="text" id="email" name="email" />
		</div>
		<div class="form_field">
			<label for="category">I am a...</label>
			<select id="category" name="category">
				<option value="No answer">No answer</option>
				<option value="Current subscriber">Current subscriber</option>
				<option value="Prospective subscriber">Prospective subscriber</option>
				<option value="Current distributor">Current distributor</option>
				<option value="Prospective distributor">Prospective distributor</option>
				<option value="Cheese afficionado">Cheese afficionado</option>
			</select>
		</div>
		<div class="form_field">
			<label for="msg">message</label>
			<textarea id="msg" name="msg" cols="60" rows="14"></textarea>
		</div>
		<div class="form_field submit">
			<input type="submit" value="Send" class="button" />
		</div>
	</form><br/>
	<a href="https://www.facebook.com/NewYorkCityCheeseClub" target="_blank" id="like_on_fb"><span>Like us on facebook</span></a>
	<span id="mailing_address">NYC Cheese of the Month Club, P.O. Box 170, 52 Ira Road, Syosset, NY 11791</span>
</div>
</body>
</html>