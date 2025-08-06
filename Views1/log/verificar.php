<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		    <link rel="icon" type="image/png" href="<?php echo URL; ?>Views1/template/colorlib/images/punio_icon_3.png" />
		<title>RUCVM v2.0</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="<?php echo URL; ?>Views1/template/colorlib/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?php echo URL; ?>Views1/template/colorlib/css/style.css">
		<style>
			.text-center {
				text-align: center!important;
			}

			.mt-2, .my-2 {
				margin-top: 0.5rem!important;
			}
			.alert-danger {
				color: #721c24;
				background-color: #f8d7da;
				border-color: #f5c6cb;
			}
			.alert {
				position: relative;
				padding: 0.75rem 1.25rem;
				margin-bottom: 1rem;
				border: 1px solid transparent;
				border-radius: 0.25rem;
			}
		</style>
	</head>

	<body>

		<div class="wrapper" style="background: #BDBDBD;">
			<div class="inner">
				<div class="image-holder">
					<img src="<?php echo URL; ?>Views1/template/colorlib/images/RUCVM.png" height="502px" weight="135px"  alt="">
				</div>
				<form action="" method="post" enctype="multipart/form-data">
					<h3>BIENVENIDOS</h3>

					<div class="form-wrapper">
						<input type="text" placeholder="Usuario" name="username" required="required" class="form-control" autocomplete="off">
						<i class="zmdi zmdi-account"></i>
					</div>

					<div class="form-wrapper">
						<input type="password" placeholder="Contraseña" required="required" name="password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>

					<?php 
					echo "<script>console.log('Console: 5" .$_GET['url']. "' );</script>";
					if(isset($datos["message"])){?>
					<div class="alert alert-danger text-center mt-2">
						<?php echo $datos["message"]; ?>
					</div>
					<?php }

							echo "<script>console.log('Console: 6" .$datos. "' );</script>"; ?>

					<button>Ingresar
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


