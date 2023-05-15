<?php
    define('BASE_URL', 'http://localhost/whitetigersafari.in/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WTS | Access Forbidden</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" <?php echo 'href="' . BASE_URL . 'public/assets/images/favicon.ico"' ?>>
    <link rel="apple-touch-icon" <?php echo 'href="' . BASE_URL . 'public/assets/images/favicon.ico"' ?>>
    <link rel="stylesheet" <?php echo 'href="' . BASE_URL . 'public/assets/css/bootstrap.min.css"' ?>>
    <style>
		.btn-outline-purple {
			color: #A30564 !important;
			border-color: #A30564 !important;
		}

		.btn-outline-purple:hover {
			color: #fff !important;
			background-color: #A30564 !important;
			border-color: #A30564 !important;
		}
	</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2">
                <img <?php echo 'src="' . BASE_URL . 'errors/403.jpg"' ?> class="img-responsive" alt="Access Forbidden" style="margin: 40px 0 40px 0;">
            </div>
        </div>

        <div class="row">
			<div class="col-lg-12 text-center">
                <a href="<?php echo BASE_URL; ?>" class="btn btn-outline-purple">Go To Home</a>
			</div>
		</div>
    </div>
    <script <?php echo 'src="' . BASE_URL . 'public/assets/js/jquery-1.12.0.min.js"' ?>></script>
    <script <?php echo 'src="' . BASE_URL . 'public/assets/js/bootstrap.min.js"' ?>></script>
</body>
</html>
