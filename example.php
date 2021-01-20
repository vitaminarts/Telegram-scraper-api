<?php
/*  https://apibot.ir
 *   
 *  You can use the POST and GET method
 *
 *  Sign up for free at apibot.ir and get your own api key by email
 *
 * Methods : 
 *      1) getContents
 *      2) getLatestPost
 *      3) getPostInfo
 *      4) getChatInfo
 * 
 * read more :
 * https://apibot.ir
 */

//Choose a method
$Method = "getContents";

//Your Api key
$Key = 'C52amuN28hzACtCEZEfg07QINoc';

//Channel or Group username
$username = "apibotir";

//Channel or Group post number
$post = 9;

// Make a Request url (GET)
$request = "https://apibot.ir/api/telegram-scraper/".$Method."?key=".$Key."&username=".$username."&post=".$post;

$contents = file_get_contents($request);

//Json decode
$result = json_decode($contents); 

print_r($result);

/* Output :

        stdClass Object
        {
                "error":false,
                "results":{
                        "caption":"🔖 Register and get your 🔑API Key 🌐 <a href="http://apibot.ir/" target="_blank" rel="noopener">apibot.ir</a>"
                }
        }
        
 */
?>
