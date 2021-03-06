<?php
include "./Models/country.php";
include "./Models/weather.php";
include "./Constants/constants.php";



function getCountryObject(){
    
    $countryObj = new Country();
    
    /*for 000Webhost.com use this
    $ip = $_SERVER['REMOTE_ADDR'];
    for heroku use as below */

    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; 
    $query = @unserialize (file_get_contents('http://ip-api.com/php/'.$ip));
    if ($query && $query['status'] == 'success') {
         $countryObj->set_country_name($query['country']);
         $countryObj->set_city_name($query['city']);
    }

    return $countryObj;
    
}

function getBackgroundImage(){

    $countryObj = getCountryObject();

    $queryValue = $countryObj->get_country_name()." ".$countryObj->get_city_name();
    $backImgUrl = imageApiUrl.$queryValue;

    //$backImgUrl = imageApiUrl.$countryObj->get_city_name();
    $j = file_get_contents($backImgUrl);
    $json = json_decode($j, true);
    $imgArrCount = count($json["hits"]);
    
    if($imgArrCount == 0){
        $backImgUrl = imageApiUrl.$countryObj->get_country_name();
        $j = file_get_contents($backImgUrl);
        $json = json_decode($j, true);
        $imgArrCount = count($json["hits"]);
   
    }

    
    
    $randomNumber = rand(0, $imgArrCount -1);
    $imgUrl = $json["hits"][$randomNumber]["largeImageURL"];

    /*if($json["hits"][$randomNumber]['imageHeight'] > 1200){
        $imgUrl = $json["hits"][$randomNumber]["largeImageURL"];
    }
    else{
        $randomNumber = rand(0, $imgArrCount -1);
        $imgUrl = $json["hits"][$randomNumber]["largeImageURL"];
    
    }*/

  
    return $imgUrl;
   
    




}

function getWeatherInformation(){


    $countryObj = getCountryObject();
    //$queryValue = $countryObj->get_country_name()." ".$countryObj->get_city_name();

    $weatherImgUrl = weatherURL.urlencode($countryObj->get_city_name())."&".weatherAppid;



    $weatherImgUrl = weatherURL.urlencode($countryObj->get_city_name())."&".weatherAppid;
    $j = @file_get_contents($weatherImgUrl);
    if ($j === false) {
    // Handle error  get city name returns null
        $weatherImgUrl = weatherURL.urlencode($countryObj->get_country_name())."&".weatherAppid;
        $j = @file_get_contents($weatherImgUrl);


    }
    
    $json = json_decode($j, true);
    
    $temp = $json['main']['temp'];
    //echo round($temp,1)."&#8451;";

    $weatherObj = new Weather(); 
    //$countryObj->set_country_name($query['country']);
    
    $weatherObj ->setTemp(round($temp,1)."&#8451;");
    $weatherObj ->setCity($countryObj->get_city_name());

    return $weatherObj;
   

}


?>