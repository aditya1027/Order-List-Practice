<?php
header('Content-Type:text/xml');
echo '<?xml version="1.0" encoding="utf-8"
          standalone="yes" ?>';

echo '<response>';
    $food = $_GET['food'];
    $foodArray = array('tuna','bacon','beef','loaf','apple','banana','orange','meat','sandwich','butter','bread','eggs','fish','rice','dessert','ice ceam','chocolate','juice','cereals');
    if(in_array($food,$foodArray))
       echo 'We do have '.$food.'!';
    elseif($food=='')
        echo 'Enter a food';
    else
         echo 'Sorry we dont sell '.$food.'!';      


echo '</response>';
?>