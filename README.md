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
- ###### >Message type can get 2 values 0 for normal text and 1 for unicode or others type as arabic text

```
$result = $smsmanager->sendSMS("sender name or phone number", "recipient phone number ", "SMS content","Message Type(optionnal)");
```


