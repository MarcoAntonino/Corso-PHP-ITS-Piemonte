<?php session_start();


class Temperature
{

  private $value;
  private $time;

  function __construct($value)
  {
    $this->value = $value;
    $this->time = time();
  }

  function getValue() {
      return $this->value;
  }

  function getTime() {
      return $this->time;
  }

  
  function setValue($value) {
      $this->value = $value;
  }

  function setTime($time) {
      $this->time = $time;
  }

  public function toString()
  {
    echo $this->getValue()." ".date("Ymd", $this->getTime())."T".date("His", $this->getTime());
  }



}



class City
{

  private $name;
  private $maxTemps;
  private $minTemps;
  private $zone;

  function __construct($name,$zone)
  {
    $this->name = $name;
    $this->minTemps = array();
    $this->maxTemps = array();
    $this->zone = $zone;

  }

  function getName() {
      return $this->name;
  }

  function getMaxTemps() {
      return $this->maxTemps;
  }

  function getMinTemps() {
      return $this->minTemps;
  }

  function getZone()
  {
    return $this->zone;
  }

  function setName($name) {
      $this->name = $name;
  }

  function setMaxTemps($maxTemps) {
      $this->maxTemps = $maxTemps;
  }

  function setMinTemps($minTemps) {
      $this->minTemps = $minTemps;
  }

  function setZone($zone)
  {
    $this->zone = $zone;
  }

  /*
  In this function I'm inverting the output value because I want to order the array in descendent order.
  See the original example here: http://php.net/manual/en/function.usort.php
  */
  function ascOrder($t1, $t2)
  {
    if ($t1 == $t2) {

      return 0;
    }

    return ($t1 < $t2) ? -1 : 1;
  }

  // function descOrder($t1, $t2)
  // {
  //   if ($t1 == $t2) {
  //
  //     return 0;
  //   }
  //
  //   return ($t1 < $t2) ? -1 : 1;
  // }
  //Potresti sempre prendere l'ultima e la prima con una sola funzione

  function dailyTemp($arrayTemps, $minOrMax, $dayOrWeek)
  {
    usort($arrayTemps, array($this, "ascOrder"));

    if($dayOrWeek == "day")
    {
      foreach ($arrayTemps as $temperature) {

        if(($temperature->getTime())>(time()-24*60*60))
        {
          //array_push($arrayDailyTemps, $temperature);
          $arrayDailyTemps[] = $temperature;

        }
      }
    }else {

      foreach ($arrayTemps as $temperature) {

        if(($temperature->getTime())>(time()-7*24*60*60))
        {
          //array_push($arrayDailyTemps, $temperature);
          $arrayDailyTemps[] = $temperature;

        }
      }
    }

    return ($minOrMax == "max") ? $arrayDailyTemps[count($arrayDailyTemps)-1] : $arrayDailyTemps[0];
  }

  function avgTemp($arrayTemps, $dayOrWeek)
  {

    if($dayOrWeek == "day")
    {
      foreach ($arrayTemps as $temperature) {

        if(($temperature->getTime())>(time()-24*60*60))
        {
          //array_push($arrayDailyTemps, $temperature);
          $arrayDailyTemps[] = $temperature;

        }
      }
    }else {

      foreach ($arrayTemps as $temperature) {

        if(($temperature->getTime())>(time()-7*24*60*60))
        {
          //array_push($arrayDailyTemps, $temperature);
          $arrayDailyTemps[] = $temperature;

        }
      }
    }

    $sum = 0;

    foreach ($arrayDailyTemps as $temperature) {


      $sum+= $temperature->getValue();
    }

    return $sum/count($arrayDailyTemps);

  }



  function toString()
  {
    echo $this->getName()."(".$this->getZone().")".":"."<br>";
    echo "Minime:<br>";
    foreach ($this->getMinTemps() as $value) {
      echo $value->toString()."<br>";
    }
    echo "Massime:<br>";
    foreach ($this->getMaxTemps() as $value) {
      echo $value->toString()."<br>";
    }
    ;
  }

}

function avgForZone($arrayOfCities)
{
  $northTMinSum = 0;
  $northTMaxSum = 0;
  $northCount = 0;

  $centerTMinSum = 0;
  $centerTMaxSum = 0;
  $centerCount = 0;

  $southTMinSum = 0;
  $southTMaxSum = 0;
  $southCount = 0;

  foreach ($arrayOfCities as $city) {

    if($city->getZone() == "Nord"){

      foreach ($city->getMinTemps() as $minTemp) {
        global $northTMinSum;
        global $northCount;
        if($minTemp != null){
          $northTMinSum+=$minTemp->getValue();
          $northCount++;
        }

        }

      foreach ($city->getMaxTemps() as $maxTemp) {
        global $northTMaxSum;

        if($maxTemp != null){

          $northTMaxSum+=$maxTemp->getValue();

        }
        }


      }elseif ($city->getZone() == "Centro") {

        foreach ($city->getMinTemps() as $minTemp) {
          global $centerTMinSum;
          global $centerCount;
          if($minTemp != null){

          $centerTMinSum+=$minTemp->getValue();
          $centerCount++;
            }
          }

        foreach ($city->getMaxTemps() as $maxTemp) {
          global $centerTMaxSum;
          if($maxTemp != null){

          $centerTMaxSum+=$maxTemp->getValue();
            }
          }
      }elseif ($city->getZone() == "Sud") {

        foreach ($city->getMinTemps() as $minTemp) {
          global $southTMinSum;
          global $southCount;
          if($minTemp != null){

          $southTMinSum+=$minTemp->getValue();
          $southCount++;
            }
          }

        foreach ($city->getMaxTemps() as $maxTemp) {
          global $southTMaxSum;
          if($maxTemp != null){

          $southTMaxSum+=$maxTemp->getValue();
            }
          }

    }


  }

  if ($northCount!=0) {
    echo "Medie del nord, min: ".$northTMinSum/$northCount."max: ".$northTMaxSum/$northCount."<br>";
  }
  if ($centerCount!=0) {
    echo "Medie del centro, min: ".$centerTMinSum/$centerCount."max: ".$centerTMaxSum/$centerCount."<br>";  }
  if ($southCount!=0) {
    echo "Medie del sud, min: ".$southTMinSum/$southCount."max: ".$southTMaxSum/$southCount."<br>";

  }


}


 ?>
