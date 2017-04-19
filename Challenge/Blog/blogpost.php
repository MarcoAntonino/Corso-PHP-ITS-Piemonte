<?php

/**
 *
 */
class ClassName
{
  public $id;
  public $title;
  public $post;
  public $author;
  public $tags;
  public $datePosted;

  function __construct($inId=null, $inTitle=null, $inPost=null, $inAuthorId=null, $inTags=null, $inDatePosted=null)
  {
    $this->id = $inId;
    $this->title = $inTitle;
    $this->post = $inPost;

    $splitDate = explode("-", $inDatePosted);
    $this->datePosted = $splitDate[1] . "/" .$splitDate[2] . "/" .$splitDate[0];

    $query = mysqli_query("SELECT first_name, last_name FROM People WHERE id = " . $inAuthorId);
    $row = mysqli_fetch_assoc($query);
    $this->author = $row["first_name"] . " " . $row["last_name"];
  }

}


 ?>
