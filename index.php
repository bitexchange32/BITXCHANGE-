<?php
//Debug information work
ini_set("display_errors", "On");
error_reporting(E_ALL ^ E_NOTICE);
date_default_timezone_set('PRC');
// define system encoding
header("Content-Type: text/html;charset=utf-8");
// define application path
define('APP_PATH', './Application/');
//define module path
define('APP_REALPATH',dirname(__FILE__));
// Define cashe Path
define('RUNTIME_PATH', './Runtime/');
// Define backup path
define('DATABASE_PATH', './Database/');
// Define wallet Path
define('COIN_PATH', './Coin/');
// Define backUp path
define('UPLOAD_PATH', './Upload/');


// Backend security entrace
//define('ADMIN_KEY', 'usdz');

// Define database name
define('DB_TYPE', 'mysql');
// Define Databse address
define('DB_HOST', '127.0.0.1');
// Define Database account
define('DB_NAME', 'etuhsbsdgw2325');
// Define database Password
define('DB_USER', 'etuhsbsdgw2325');
// Define database port
define('DB_PWD', 'n6thnDkXfW72cmTJ');
//Define database port
define('DB_PORT', '3306');


// Turn on Demo Mode
define('APP_DEMO',0);
// sms mode is demonstartion mode 1 is format mode
define('MOBILE_CODE',1);
//start debbuing mode
define('M_DEBUG', 1);
//platfrom currencey
define('PT_COIN', 'MBN');
// define authorization code
define('MSCODE', '95D3A7E98EE9F913B462B87C73DS');
// Define the APIKEY,for mutual conversation,both ends must be consistent
define('BBAPIKEY', 'RkAyda9huaQYux6R');


function wherecome()
{
    if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
        return true;
    }
    if (isset($_SERVER['HTTP_CLIENT']) && ('PhoneClient' == $_SERVER['HTTP_CLIENT'])) {
        return true;
    }
    if (isset($_SERVER['HTTP_VIA'])) {
        return stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;
    }

    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array('nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-', 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu', 'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini', 'operamobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile');

        if (preg_match('/(' . implode('|', $clientkeywords) . ')/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return true;
        }
    }

    if (isset($_SERVER['HTTP_ACCEPT'])) {
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && ((strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false) || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
            return true;
        }
    }

    return false;
}
//public contract

// Determine the access entrance
if(wherecome()) {

    define('WHERECOME','Mobile');
} else {
    //define('WHERECOME','Mobile');
    define('WHERECOME','Home');
}

// Introduce entry file
require './ThinkPHP/ThinkPHP.php';
?>
