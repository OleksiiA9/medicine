<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['contactname']) && !empty($_POST['contactemail']) && !empty($_POST['contactmessage'])) {
	$to = 'leadingmaster@list.ru'; // Your e-mail address here.
	$body = "\nName: {$_POST['contactname']}\nEmail: {$_POST['contactemail']}\n\n\n{$_POST['contactmessage']}\n\n";
	mail($to, "Message from  <a href="http://leadingmaster.ru" >leadingmaster.ru</a>", $body, "From: {$_POST['contactemail']}"); // E-Mail subject here.
    }
}
?>