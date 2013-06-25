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
 
<h1>Thank you for your submission, <?php echo $_POST['name'] ?>. </h1>
<p>your email has been sent.</p>