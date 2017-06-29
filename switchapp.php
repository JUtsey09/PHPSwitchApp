<?php
//Choices are metal, country, and jazz
$style = 'blues';

switch ($style)
{
    case: 'metal';
        echo "Your style is metal! Awesome!";
        break;
    case: 'country';
        echo "Your style is country! Yuck!";
        break;
    case: 'jazz';
        echo "Your style is jazz! Cool mannnnn!";
        break; 
    default: 
        echo "What else is there?";
}
?>
