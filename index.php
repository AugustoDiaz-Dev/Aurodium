<?php
if(isset($_POST['send'])) {
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = [
	'$secret' => '',
	'$response' => $_POST['token'],
	'$remoteip' => $_SERVER['REMOTE_ADDR']
];

	$options = array(
		'http' => array(
			'header' => "Content-type: application/x-www-form-urlencoded\r\n",
			'method' => 'POST', 
			'content' => http_build_query($data)
		)
		);

	$context = stream_context_create($options);
	$response = file_get_contents($url, false, $context);

	$res = json_decode($response, true);
	if($res['success'] == true) {
		// What you want to do
		include './send.php';
	} else {
		echo '<script>alert("Error en la autenticación")</script>';
	}
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<?php include './components/c1head.php' ?>
</head>

<body>

	<?php include './components/c2preloader.php' ?>
	<?php include './components/c3header.php' ?>
	<?php include './components/c4hero.php' ?>
	<?php include './components/c5latestNews.php' ?>
	<?php include './components/c6featureSection.php' ?>
	<?php include './components/c7recentCourses.php' ?>
	<?php include './components/c8about.php' ?>
	<?php include './components/c9reviewSection.php' ?>
	<?php include './components/c15coursesSlider.php' ?>
	<?php include './components/c14pageSection.php' ?>
	<?php include './contact.php' ?>
	<?php include './components/c11footerSection.php' ?>
	<?php include './components/c12jsImports.php' ?>

</body>

<script>
        grecaptcha.ready(function() {
          grecaptcha.execute('', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
			  document.getElementById('token').value = token;
          });
        });
  </script>
</html>

