<?php
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://54.157.32.185:8080/api/v1/ebooks' );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
$output = curl_exec( $ch );

curl_close( $ch );
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

</body>
</html>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Welcome to JBS Brand Catalogues</title>
		<link rel="icon" type="image/png" href="assets/images/logo-jbs.png">

		<!-- Bootstrap core CSS -->
		<link href="assets/css/styles.css" rel="stylesheet">
	</head>

	<body>

		<header>
		</header>

		<main role="main">

			<section class="text-center pb-3 shadow-bottom position-relative">
				<div class="container">
					<img src="assets/images/logo-jbs.svg">
					<p class="h5 mb-0">Welcome to JBS Brand Catalogues</p>
					<p class="red mb-0">scroll to view <img src="assets/images/duo-down.svg"></p>
				</div>
			</section>

			<div class="album py-5 bg-light">
				<div class="container">
					<div class="row">

						<div class="col-md-4">
							<div class="card mb-4 box-shadow">
								<div class="card-header">
									<img class="card-img-top" src="assets/images/image-130.jpg">
									<div class="d-flex justify-content-between p-3">
										<div class="pr-3">
											<img src="assets/images/logo-friboi.png">
										</div>
										<div class="flex-grow-1 pl-3 border-left-before position-relative">
											<p class="card-text mt-1 mb-1">Friboi.</p>
											<p class="card-text small red"><img src="assets/images/download.svg" class="mr-2">Download PDF</p>
										</div>
									</div>
								</div>
								<div class="card-body">
									<p class="card-text">For more than 60 years, Seara has worked to offer products that bring practicality, trust and innovation to your table, always with flavor and quality that will surprise the entire family.</p>
									<div class="d-flex justify-content-between align-items-center">
										<small class="red">Learn More</small>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</main>

		<footer class="text-muted">
			
		</footer>
	
	</body>
</html>
