<?php 

/*$ch = curl_init(); 

//$url = "https://habr.com";
$url = "http://php.net";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_NOBODY, 1);

$result = curl_exec($ch); 

curl_close($ch);

echo $result;*/

ini_set('diisplay_errors',1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));


require_once(ROOT. "/app/Router.php");
require_once(ROOT.'/vendor/autoload.php');
require_once(ROOT.'/app/DataBase.php');

$router = Router::getInstance();
$router->start();

//if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//    $data = array(
//    'neighbor0' => 'Vlad',
//    'neighbor1' => 'Danya'
// );
//
// echo json_encode($data);
//} else {
//    $request = "POST";
//    echo json_encode($request);
//}













