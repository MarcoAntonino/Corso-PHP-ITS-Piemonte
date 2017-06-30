<?php

/**
 *
 */
class Admin
{
  private $id;
  private $username;
  private $password;
  private $email;

  function __construct($username, $password, $email="") {

      $this->username = $username;
      $this->password = $password;
      $this->email = $email;
  }



}


//echo hash('sha256', "ciao");


 ?>
