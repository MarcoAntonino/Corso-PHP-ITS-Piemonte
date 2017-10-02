<?php

/**
 *
 */
abstract class AbstractBook
{
  abstract protected function getAuthor();
  abstract protected function getTitle();
}

abstract class AbstractPHPBook extends AbstractBook{ //perchè non eredita da abstractBook?
    private $subject = "PHP";
}


 ?>
