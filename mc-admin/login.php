<?php include("connect.php") ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="login.js"></script>
<script type="text/javascript">$(function(){});</script>
<link rel="stylesheet" type="text/css" href="css/login.css">
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked/><label for="tab-1" class="tab">Giriş Yap</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"/><label for="tab-2" class="tab">Şifremi Unuttum</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form id="frm">
					<div class="col-12" style="text-align: center;">
	        			<div id="sonuc"></div><br />
	        		</div>
					<div class="group">
						<label for="user" class="label">E-Mail</label>
						<input name="email" id="user" type="text" class="input"/>
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input name="pass" id="pass" type="password" class="input" data-type="password"/>
					</div>
					<div class="group">
						<input type="button" id="btn" class="button" value="Sign In">
					</div>
				</form>
				<div class="hr"></div>
			</div>
			<div class="for-pwd-htm">
				<div class="group">
					<label for="user" class="label">E-Mail</label>
					<input id="user" name="email" type="email" class="input"/>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset Password"/>
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div>
