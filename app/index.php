<?php
define( 'API_BASE_URL', 'http://3.214.241.12:8080/api/v1/' );

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, API_BASE_URL . 'auth/login' );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
curl_setopt(
	$ch,
	CURLOPT_POSTFIELDS,
	json_encode(
		array(
			'email'    => 'teste@teste.com.br',
			'password' => 'Teste123456789@',
		)
	)
);
$token_api = json_decode( curl_exec( $ch ) );
curl_close( $ch );

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, API_BASE_URL . 'ebooks' );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt(
	$ch,
	CURLOPT_HTTPHEADER,
	array(
		'Authorization: ' . $token_api->accessToken,
	)
);
$ebooks = json_decode( curl_exec( $ch ) );
curl_close( $ch );

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, API_BASE_URL . 'categories' );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt(
	$ch,
	CURLOPT_HTTPHEADER,
	array(
		'Authorization: ' . $token_api->accessToken,
	)
);
$raw_categories = json_decode( curl_exec( $ch ) );
curl_close( $ch );

$categories = array();
foreach ( $raw_categories as $category ) {
	$categories[ $category->title ] = $category;
}
?>

<!doctype html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
		<script src="assets/js/main.js"></script>
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
					<img src="assets/images/catalogo-friboi-logo.svg">
					<p class="h5 mb-2">Bem vindo ao catálogo de marcas Friboi</p>
					<a href="#" onClick="scrollToContent()" class="red mb-0">scroll to view <img src="assets/images/duo-down.svg"></a>
				</div>
			</section>

			<section class="text-center pt-4 pb-2 position-relative">
				<div class="container">
					<img src="assets/images/convencao-friboi-banner.jpg" class="w-100 max-height-300" id="banner-sial">
				</div>
			</section>

			<div class="album py-5" id="ebooks">
				<div class="container">
					<div class="row">

					<?php
					foreach ( $ebooks as $key => $ebook ) {
						?>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="card mb-4 box-shadow" data-id="<?php echo $key; ?>">
								<div class="card-header">
									<img class="card-img-top" src="http://3.91.170.62/wp-content/uploads/<?php echo $ebook->thumbnail; ?>">
									<div class="d-flex justify-content-between p-3">
										<div class="pr-3">
											<img src="<?php echo $categories[ $ebook->category ]->thumbnail; ?>">
										</div>
										<div class="flex-grow-1 pl-3 border-left-before position-relative">
											<p class="card-text mt-1 mb-1"><?php echo $ebook->title; ?></p>
											<a href="<?php echo $ebook->file; ?>" class="card-text small red" download>
												<img src="assets/images/download.svg" class="mr-2">Download PDF
											</a>
										</div>
									</div>
								</div>
								<div class="card-body p-3">
									<div class="card-text position-relative">
										<p>
											<?php echo $ebook->content; ?>
										</p>
									</div>
								</div>
							</div>
						</div>

					<?php } ?>

					</div>
				</div>
			</div>
		</main>

		<footer class="text-muted">
			
		</footer>
	
	</body>
</html>
