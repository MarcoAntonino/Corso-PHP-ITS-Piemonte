<?php

include 'AbstractFactory.php';

/**
 *
 */
class OReillyFactoryMethod extends AbstractFactoryMethod
{

  private $context = 'OReilly';

  function makePHPBook($param)
  {
    $book = NULL;

    switch ($param) {
      case 'us':
          $book = new OReillyPHPBook;
        break;
        case 'other':
          $book = new SamsPHPBook;
        break;
      default:
          $book = new OReillyPHPBook;
        break;
    }

    return $book;
  }


}

class SamsFactoryMethod extends AbstractFactoryMethod
{

  private $context = 'Sams';

  function makePHPBook($param)
  {
    $book = NULL;

    switch ($param) {
      case 'us':
          $book = new SamsPHPBook;
        break;
        case 'other':
          $book = new OReillyPHPBook;
        break;
        case 'otherother':
          $book = new VisualQuickstartPHPBook;
        break;
      default:
          $book = new SamsPHPBook;
        break;
    }

    return $book;
  }

}



 ?>
