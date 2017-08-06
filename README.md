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

```php

$result = $smsmanager->sendSMS("sender name or phone number", "recipient phone number ", "SMS content","Message Type(optionnal)");

```

### Success Response 

```json

{report : "delivred", ref :"xxxxxxxxx"}

```


### Fail response 

```json
{errorCode:1020,message:"Internal Error"}
{errorCode:1012,message:"Message not sent."}
{errorCode:1077,message:"Network Not supported"}
{errorCode:1090,message:"Internal Error"}
{errorCode:1010,message:"Insufficient SMS"}
{errorCode:1001,message:"Invalid Access key"}
{errorCode:1050,message:"Invalid phoneNumber"}
{errorCode:1051,message:"Invalid sender Id"}
```