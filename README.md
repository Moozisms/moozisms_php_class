# Sending SMS with Moozisms php class 

first you need to get a api_key and secret on [Moozisms](http://moozisms.com/)

To send a file with the moozisms php file 

- ##### include the "Moozisms.php" file 
```
require_once "Moozisms.php";
```
- ##### create a new Moozisms object with the api key and the api secret  
```
$smsmanager = new Moozisms("api_key", "api_secret");
```
- ##### you can use the sendSMS function of the Moozisms class to send the sms
```
$result = $smsmanager->sendSMS("sender name or phone number", "recipient phone number ", "SMS content");
```
