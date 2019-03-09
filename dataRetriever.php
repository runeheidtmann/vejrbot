<?php
include_once('db.php');

class TwelveHourWeatherForecast{

    private $apiURL;
    private $conn;

    function __construct(){

        $this->apiURL = "http://dataservice.accuweather.com/forecasts/v1/hourly/12hour/126312?apikey=kGsl2UH2ybcfQqsVRbAZ15krAh19wq1K&language=da-dk&details=true&metric=true";
        $db = new db();
        $this->conn = $db->connect();

    }

    function retrieveWeatherDataFromApiAndSaveIt(){
        
        //Hent data fra API
        $resultObj = json_decode(file_get_contents($this->apiURL), true);

        //slet eksisterende nu uddaterede data
        $sql = "TRUNCATE vejrudsigt_db";
        $this->conn->query($sql);


        //Gem hver række i resultObj som række på vores database
        foreach($resultObj as $row){
            
  
            $icon = $row['WeatherIcon'];

            $timestamp = $row['EpochDateTime'];
            $temperatur = $row['Temperature']['Value'];
            $vind = $row['Wind']['Speed']['Value'];

            $sql = "INSERT INTO vejrudsigt_db(timestamp, icon, temperatur, vind) VALUES ($timestamp,$icon,$temperatur,$vind)";
            $this->conn->query($sql);
        }
    }
    
    public function getWeatherDataFromDatabase(){
        // Hent al data fra databasen:
        $sql = "SELECT * FROM vejrudsigt_db";
        $result = $this->conn->query($sql);
        

        return $result;
    }

}