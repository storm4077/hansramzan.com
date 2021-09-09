<?php

$page_title = 'Subscribe';
$page_description = 'Hans Ramzan is a British Product Designer who has worked amongst numerous markets within the industry - most notable; consumer product and furniture. With an intelligent approach to design, his ethos is to create thought provoking products.';
$metatags = 'home, pure code, css, java, html';
$page_icon = 'https://hansramzan.com/logo.jpg';
$page_url = 'https://www.hansramzan.com/subscribe.php';

include('php/header.php');

?>

<div class="error_page">
	<?php
	$to = "mail@hansramzan.com"; // Your Brand Mail ID
	$from = "subscriptions@hansramzan.com"; // Replace it with your From Mail ID

	$headers = "From: " . $from;

	$subject = "New subscription";
	$body = "New user subscription: " . $_POST['email'];
			if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
		{
			if (mail($to, $subject, $body, $headers, "-f " . $from))
		{
			echo '<h1>Success!</h1><br><p>Your e-mail <strong>(' . $_POST['email'] . ')</strong> has been added to our mailing list!</p>';
		}
			else
		{
			echo '<h1>Error!</h1><br><p>There was a problem with your e-mail. Please try again or contact (<a href="mailto:mail@hansramzan.com">mail@hansramzan.com</a>) (' . $_POST['email'] . ')</p>';
		}
	}
?>
</div>

<?php
	include('php/footer.php');
?>