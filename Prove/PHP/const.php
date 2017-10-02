<?php
class MyClass {
    const CONST_VALUE = 'A COSTANT VALUE';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // As of PHP 5.3.0

echo MyClass::CONST_VALUE;

$marcoClass = new MyClass();
echo $marcoClass::CONST_VALUE;
echo "<br><br>";

class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}

$classname = 'OtherClass';
$classname::doubleColon(); // As of PHP 5.3.0

OtherClass::doubleColon();

?>
