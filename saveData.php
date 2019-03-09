<?php
include_once('dataRetriever.php');

if(isset($_GET['pass'])){
    if($_GET['pass']=='yeaha')
    {
        $bot = new TwelveHourWeatherForecast();
        $bot->retrieveWeatherDataFromApiAndSaveIt();
        echo 'saved.';

    }
    else echo 'Forkert pass';

}
?>