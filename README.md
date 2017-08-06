# moozisms_php_class

To send a file with the moozisms php file 

1 - include the "Moozisms.php" file 
    require_once "Moozisms.php";
2 - create a new Moozisms object with the api key and the api secret  
    $smsmanager = new Moozisms("api_key", "api_secret");
3 - you can use the sendSMS function of the Moozisms class to send the sms
    $result = $smsmanager->sendSMS("sender name or phone number", "recipient phone number ", "SMS content");
