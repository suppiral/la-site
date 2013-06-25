<?php
 
// if the url field is empty

if(isset($_POST['url']) && $_POST['url'] == ''){
	$F = "suppiral";
	$L = "yahoo";
	$Mail = $F . '@' . $L . ".com";
	
    // then send the form to your email
    mail($Mail, "LittleAdventure Contact: " . $_POST['subject'], $_POST['message'] . "\n \n from: " . $_POST['email'] );
}

// otherwise, let the spammer think that they got their message through
 
?>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Little Adventure - WhiteStar Game</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <link rel="stylesheet" href="../css/style.css" />
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
<div class="container">
	<div class="main clearfix">
		<section class="content">
			<h1>Thank you for your submission, <?php echo $_POST['name'] ?>. </h1>
			<p>your email has been sent.</p>
			<p><a href="../index.html" title="to Little Adventure home">go back</a></p>
		</content>						
	</div>
</div>
</body>
</html>