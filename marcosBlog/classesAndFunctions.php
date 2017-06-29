<?php

/**
 *this class is not used anymore
 */
class tag
{
  private $id;
  private $tag;

  function __construct($newTag)
  {
    $this->tag = $tag;
  }

  function getId() {
      return $this->id;
  }

  function getTag() {
      return $this->tag;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setTag($tag) {
      $this->tag = $tag;
  }

  public function __toString()
  {
    return "Id: ".$this->getId()."<br/>"."Tag: ".$this->getTag();
  }




}



 ?>
