<?php
include 'AbstractBooks.php';

/**
 *
 */
class OReillyPHPBook extends AbstractPHPBook
{
  private $author;
  private $title;
  private static $oddOrEven = 'odd';

  function __construct()
  {
    if ('odd' == self::$oddOrEven) {
      $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
      $this->title = 'Programming PHP';
      self::$oddOrEven = 'even';
    }else {
      $this->author = 'David Sklar and Adam Trachtenberg';
      $this->title  = 'PHP Cookbook';
      self::$oddOrEven = 'odd';
    }
  }

  function getAuthor() {return $this->author;}
    function getTitle() {return $this->title;}
}

/**
 *
 */
class SamsPHPBook extends AbstractPHPBook
{

  private $author;
  private $title;

  function __construct()
  {
    mt_srand((double)microtime()*10000000);
    $rand_num = mt_rand(0,1);

    if (1 > $rand_num) {
            $this->author = 'George Schlossnagle';
            $this->title  = 'Advanced PHP Programming';
        } else {
            $this->author = 'Christian Wenz';
            $this->title  = 'PHP Phrasebook';
        }
  }

  function getAuthor() {return $this->author;}
    function getTitle() {return $this->title;}
}

class VisualQuickstartPHPBook extends AbstractPHPBook {

    private $author;
    private $title;

    function __construct() {
      $this->author = 'Larry Ullman';
      $this->title  = 'PHP for the World Wide Web';
    }

    function getAuthor() {return $this->author;}
    function getTitle() {return $this->title;}
}




 ?>
