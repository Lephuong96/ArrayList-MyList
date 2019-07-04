<?php
include 'MyList.php';
$myList = new MyList();
$myList->addLast(11);
$myList->addLast(12);
$myList->addLast(13);
$myList->addLast(1555552);
$myList->add(1,222232);
echo $myList->size(), "<br>";
echo "Array: ",$myList->cloneArray();
