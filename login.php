<?php
	session_start();
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <title>moj.tvz.hr</title>
    <link rel="icon" href="img/logo.png">
    <style>
  </style>
</head>
<body>
  <form method="POST" class="login_form" action="">
    <img src="img/naslov.png" alt="Naslov" class="naslov" />
    <div class="label">
      <input type="mail" id="username" name="username" class="form-control" placeholder="Korisničko ime @tvz.hr"><br/><br/>
    </div>
    <div class="label">
      <input type="password" id="password" name="password" class="form-control" placeholder="Lozinka"><br/>
    </div>

    <div class="label"><input type="submit" name="login" class="login" id="login" value="ULOGIRAJ ME" /></div>
    <div class="label"><input type="submit" name="problem" class="problem" id="problem" value="Ne mogu se spojiti?" /></div>

    <?php
      if (isset($_POST['login'])) {
    	 	$user = $_POST['username'];
    	 	$pass = $_POST['password'];
    	 	$sql = "SELECT mail, lozinka FROM studenti WHERE mail = ?";
        $stmt = mysqli_stmt_init($dbc);
    	 		if (mysqli_stmt_prepare($stmt, $sql)) {
    	 			mysqli_stmt_bind_param($stmt, 's', $user);
    	 			mysqli_stmt_execute($stmt);
    	 			mysqli_stmt_store_result($stmt);
    	 		}
    	 		mysqli_stmt_bind_result($stmt, $userName, $userPass);
    	 		mysqli_stmt_fetch($stmt);

          if (password_verify($_POST['password'], $userPass) && mysqli_stmt_num_rows($stmt) > 0) {
            $login_success = true;
    	 		  $_SESSION['username'] = $userName;
            header('Location: index.php');
    	 	  } else {
    	 		  $login_success = false;
    	 	}
    	}
    ?>
  </form>
</body>
</html>
