<?php
// Define the Belgian phone number
$phoneNumber = (isset($_GET['q']) && $_GET['q']) ? $_GET['q'] : '0491/12 34 56';

// Remove non-numeric characters from the phone number
$numericPhoneNumber = preg_replace("/[^0-9]/", "", $phoneNumber);

// Add the country code for Belgium (32) at the beginning of the phone number
$fullPhoneNumber = "32" . substr($numericPhoneNumber, -9);

echo "Phone Number: " . $fullPhoneNumber;
?>
