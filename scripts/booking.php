<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['location']) && !empty($_POST['checkin'])&& !empty($_POST['checkout']) && !empty($_POST['guests']) && !empty($_POST['bookingemail'])) {
	$to = 'leadingmaster@list.ru'; // Your e-mail address here.
	$body = "\nLocation: {$_POST['location']}\n\n\nCheck-In Date: {$_POST['checkin']}\nCheck-Out Date: {$_POST['checkout']}\n\n\nNumber of Guests: {$_POST['guests']}\n\n\nEmail: {$_POST['bookingemail']}\n\n";
	mail($to, "Booking order from  <a href="http://leadingmaster.ru" >leadingmaster.ru</a>", $body, "From: {$_POST['bookingemail']}"); // E-Mail subject here.
   }
}
?>