<?Php
require_once("lib/PromptPayQR.php");

$PromptPayQR = new PromptPayQR(); // new object
$PromptPayQR->size = 8; // Set QR code size to 8
$PromptPayQR->id = '0654425350'; // PromptPay ID
$PromptPayQR->amount = 2000000.25; // Set amount (not necessary)
echo '<img src="' . $PromptPayQR->generate() . '" />';
