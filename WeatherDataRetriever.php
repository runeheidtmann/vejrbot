<?php 
include_once('dataRetriever.php');
//functionen kaldes, når tabellen skal tegnes.
function printRows(){

//Hent data fra database:
$obj = new TwelveHourWeatherForecast();
$resultObj = $obj->getWeatherDataFromDatabase();



foreach($resultObj as $row){

    $time = date("H:i", $row['timestamp']);
    
    if($row['icon'] < 10)
        $icon = "0".$row['icon'];
    else  
        $icon = $row['icon'];

    $temp = $row['temperatur'];
    $vind = $row['vind'];

    echo '<tr>';
    echo '<th class="align-middle" scope="row">'.$time.'</th>';
    echo '<td class="align-middle" ><img src="img/'.$icon.'.png" class="card-img-top" alt="..."></td>';
    echo '<td class="align-middle">'.$temp.' C</td>';
    echo '<td class="align-middle">'.$vind.' km/t</td>';  
    echo '</tr>';
    }
}

?>

<table class="table table-sm text-center">
  <thead>
    <tr>
      <th scope="col"><?php echo date("D").', '.date("d").' '.date("F");?></th>
      <th scope="col">Udsigt til</th>
      <th scope="col">Temperatur</th>
      <th scope="col">Vind</th>
    </tr>
  </thead>
    <tbody>
        <?php printRows() ?>
    </tbody>
</table>