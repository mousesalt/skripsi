<?php
include('connection.php');

$secret = $_SESSION['secret'];
$user 	= $_SESSION['email'];

require_once 'googleLib/GoogleAuthenticator.php';
$ga 		= new GoogleAuthenticator();
$qrCodeUrl 	= $ga->getQRCodeGoogleUrl($user, $secret,'Mossal F');


?>

<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Konfimasi | Simpel TOTP</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/layout.css">
        <link rel="stylesheet" href="assets/css/form-design.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">  
		
		
</head>
    <body class="a2z-wrapper">

        <!--Start a2z-area-->
        <section class="a2z-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="form-area register-from">
                            <div class="form-content">
                                <h2>Simpel TOTP</h2>
                                <p>Masukkan kode verifikasi yang terdapat di dalam Google Authenticator Smartphonemu.</p>

                            </div>
                            <div class="form-input">
                                <h2>Masukkan Kode</h2>
                                <form name="reg" action="auth_log.php" method="POST">

                                    <div class="form-group">
										<input type="text" name="code" id="code" autocomplete="off" value="" required>
                                        <label>Masukkan Kode Google Authenticator</label>
                                    </div>
                                    
                                    <div class="a2z-button">
                                        <button type="submit" class="a2z-btn">Kirim</button>
                                    </div>
									
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>