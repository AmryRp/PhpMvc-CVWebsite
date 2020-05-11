<?php
session_start();
 if(isset($_SESSION['user']) && $_SESSION['user'] != "")
 {
header("location: https://arp-cv.website/admin/");
}
?>
<html>
<head>
	<title>Membuat Form Validasi dengan Javascript - WWW.MALASNGODING.COM</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js" ></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.all.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://arp-cv.website/cv/static/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
        
        <link rel="stylesheet" href="https://arp-cv.website/cv/static/css/orionicons.css">
        <link rel="stylesheet" href="https://arp-cv.website/cv/static/css/style.default.css" id="theme-stylesheet">
        <link rel="stylesheet" href="https://arp-cv.website/cv/static/css/custom.css">
        <link rel="stylesheet" href="https://arp-cv.website/cv/static/css/tooltip.css">
        <link rel="shortcut icon" href="https://arp-cv.website/cv/static/img/favicon.png?3">
        
         <link rel="stylesheet" href="https://arp-cv.website/cv/static/css/bglogin.css">
</head>
<body style="background: #1C1B21">
	<div class="stripe">
  <div class="stripe_inner"></div>
</div>
	<div style="
	background: #313131 80% ;
	position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) ;border: 3px solid #4c4;border-radius: 8px;min-width: 240px;max-width: 360px;">
	<h5 style="text-align: center;" class="text-success">Login Admin</h5>
	<div class="login mx-3 md-form mb-2">
		<form action="confirm.php" method="post" onSubmit="return validasi()">
			
				<label style="text-align: left" class="text-success"data-error="wrong" data-success="right" for="form1" >Username:</label>
				<input class="form-control validate" type="text" name="username" id="username" />
			
				<label style="text-align: left" class="text-success"data-error="wrong" data-success="right" for="form2">Password:</label>
				<input class="form-control validate" type="password" name="password" id="password" />
						
			<div style="text-align: center; margin-top: 10px">
				<input type="submit" value="login" class="tombol btn btn-success">
			</div>
		</form>
	</div>
	</div>
		
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>