<!DOCTYPE html>
<html>
<head>
	<title>Dkhal</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sgning.css">
</head>
<body>
	<div class="signin-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Tmarka dakhel</h2>
				<p>Dkhel l AymAdwi bach tedwi</p>
			</div>
			<div class="form-group">
				<label>email</label>
				<input type="email" class="form-control" name="email" placeholder="chkon_ta@mail.com" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="pass" placeholder="maderch_123..9" autocomplete="off" required>
			</div>
			<div class="small">Nta bnadem nta -_- ? <a href="forgot_pass.php">Dkhel rje3 l code</a></div><br>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Merhba</button>
			</div>
			<!-- <?php /*include("signin_user.php");*/ ?> -->
		</form>
		<div class="text-center small" style="color: #674288;">Ma3ndekch compte ? compte.ma <a href="signup.php">gha dahkin dkhel t9eyed</a></div>
	</div>
</body>
</html>