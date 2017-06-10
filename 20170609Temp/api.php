<?php
include 'classesAndFunctions.php';

$trento = new City("Trento", "Nord");
$milano = new City("Milano", "Nord");
$torino = new City("Torino", "Nord");
$firenze = new City("Firenze", "Centro");
$bologna = new City("Bologna", "Centro");
$roma = new City("Roma", "Centro");
$napoli = new City("Napoli", "Sud");
$bari = new City("Bari", "Sud");
$messina = new City("Messina", "Sud");


if(isset($_SESSION['savedCities'])){

  $cities = $_SESSION['savedCities'];
}else {

  $cities = array($trento, $milano, $torino, $firenze, $bologna, $roma, $napoli, $bari, $messina);
}


if (isset($_GET['cityName']) && isset($_GET['cityMinT']) && isset($_GET['cityMaxT'])){


  $cityName = $_GET['cityName'];
  $cityMinT = new Temperature($_GET['cityMinT']);
  $cityMaxT = new Temperature($_GET['cityMaxT']);

  foreach ($cities as $city) {

    if($city->getName() == $cityName)
    {
      $minTarray = $city->getMinTemps();
      $maxTarray = $city->getMaxTemps();
      array_push($minTarray, $cityMinT);
      array_push($maxTarray, $cityMaxT);
      $city->setMinTemps($minTarray);
      $city->setMaxTemps($maxTarray);

      $city->toString();
    }
  }

  $_SESSION['savedCities'] = $cities;

echo "<br>";
echo "<br>";
echo "<br>";
echo "Elenco";

foreach ($cities as $city) {

  $city->toString();


}

echo "<br>";
echo "<br>";
echo "Massime e minime";
echo "<br>";


foreach ($cities as $city) {

  if ($city->getMinTemps() != null && $city->getMaxTemps() != null)
  {
    $minTarray = $city->getMinTemps();
    $maxTarray = $city->getMaxTemps();
    echo "<br>";
    echo $city->getName()." minima di oggi: ".$city->dailyTemp($minTarray, "min", "day")->getValue()." media delle minime: ".$city->avgTemp($minTarray,"day")
                        ." massima di oggi: ".$city->dailyTemp($maxTarray, "max", "day")->getValue()." media delle massime: ".$city->avgTemp($maxTarray,"day");
    echo "<br>";
    echo $city->getName()." minima della settimana: ".$city->dailyTemp($minTarray, "min", "week")->getValue()." media delle minime: ".$city->avgTemp($minTarray,"week")
                        ." massima della settimana: ".$city->dailyTemp($maxTarray, "max", "week")->getValue()." media delle massime: ".$city->avgTemp($maxTarray,"week");
  }



}

echo "<br>";
echo "<br>";
echo "ULTIMA RICHIESTA";
echo "<br>";

// foreach ($cities as $city) {
//
//   if ($city->getMinTemps() != null && $city->getMaxTemps() != null) {

    avgForZone($cities);

//   }
// }

}
 ?>
