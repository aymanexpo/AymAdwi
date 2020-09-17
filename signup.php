<!DOCTYPE html>
<html>
<head>
	<title>T9ayed</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<div class="signup-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>T9ayedlina</h2>
				<p>kmel te9yad bach tedwi m3a l crash a3niba 0_0</p>
			</div>
			<div class="form-group">
				<label>smeytek</label>
				<input type="text" class="form-control" name="user_name" placeholder="dkhel smeytek" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Mot de passe</label>
				<input type="password" class="form-control" name="user_pass" placeholder="dir l code" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>email dyalek</label>
				<input type="email" class="form-control" name="user_email" placeholder="ta dkhel email dyalek" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Bladek</label>
				<select class="form-control" name="user_country" required>
					<option disabled="">Mnin nta</option>
					<option>Errachidia</option>
					<option>Rich</option>
					<option>Kenitra</option>
					<option>Hed Soualem</option>
					<option>Meknes</option>
					<option>Arfoud</option>
					<option>Khouribga</option>
					<option>Casablanca</option>
					<option>Rabat</option>
					<option>Tetouan</option>
					<option>Tanger</option>
					<option>Agadir</option>
					<option>Marrakech</option>
					<option>Oujda</option>
				</select>
			</div>
			<div class="form-group">
				<label>Dkher/Netwa</label>
				<select class="form-control" name="user_gender" required>
					<option disabled="">3endak teghlet albatal</option>
					<option>Male</option>
					<option>Female</option>
					<option disabled="">I don't support LGBT</option>
				</select>
			</div>
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" required>Ana 9abel bli chreto <a href="#">Li chretna</a> &amp; <a href="#">Ha chno katsal</a></label>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Ta wrek</button>
			</div>
			<!-- <?php /*include("signup_user.php");*/ ?> -->
		</form>
		<div class="text-center small" style="color: #FFF8DC;">Fayet m9eyed ? <a href="signing.php">Yallah dkhel malek msede3na</a></div>
	</div>
</body>
</html>