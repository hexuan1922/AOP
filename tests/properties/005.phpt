--TEST--
Test the hook on a property after
--FILE--
<?php
class Hero
{
   public $name = 'Gandalf';
}

aop_add_after('Hero->name', function (AopTriggeredJoinPoint $tjp) {
   echo " the Grey";
});

$wizard = new Hero();
echo $wizard->name;
--EXPECT--
Gandalf the Grey
