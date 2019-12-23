<?php

/*  
 *  https://apibot.ir/en_index.php
 *  
 * 
 *  You can use the POST and GET method
 */

/*
 *  Sign up for free at apibot.ir and get your own api key by email
 */

/*
 * Methods : 
 *      1) getContents
 *      2) getLatestPost
 *      3) getPostInfo
 *      4) getChannelInfo
 * 
 * read more :
 * https://apibot.ir/en_index.php
 */

//Choose a method
$Method = "getContents";

//Your Api key
$Key = 'C52amuN28hzACtCEZEfg07QINoc';

//Channel or Group username
$channel = "apibotir";

//Channel or Group post number
$post = 9;

// Make a Request url (GET)
$request = "https://apibot.ir/".$Method."?key=".$Key."&channel=".$channel."&post=".$post;

$contents = file_get_contents($request);

//Json decode
$result = json_decode($contents); 

print_r($result);

/* Output :
 *
 
        stdClass Object
        (
            [status] => ture
            [result] => stdClass Object
                (
                    [text] => 🔖 Register and get your 🔑API Key
                              🌐   apibot.ir
                    [link] => https://t.me/apibotir/9
                )

        )
 
 *  */



?>