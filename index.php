<?php
include 'MyList.php';
$myList = new MyList();
$myList->addLast(34);
$myList->addLast(32);
$myList->addLast(65);
$myList->addLast(444444444);
$myList->add(1,33333333);
echo $myList->size(), "<br>";
echo "Array: ",$myList->cloneArray();
