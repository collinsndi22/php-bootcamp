<?php
session_start();
$total_price = "";


echo "<h1>QUESTION NUMBER ONE</h1>";
$t20_cups_of_coffee = "120";
/*if the shop sold 120 cups of coffee at 2.50 $ */
$price = "2.50";

$total_price = $t20_cups_of_coffee * $price; 
echo "<p> The total price for the product is <span style='color: blue; font-size: 40px;'>"."$total_price". "</span> SHS</p>";
/*string concatantion is simply the . (dots) this is used to bind strings togther for example a variabl can be input inside a sentence, Btw is the above correct coressponding to the question */

echo "<p>So the above is a paragraph and a concatantion having a variable total price<p><br>
     hope this helps";



echo "<h1>QUESTION NUMBER TWO</h1>";
     $f50_dresses = "50";
     $cost_shs = "25";
     $each_at = "50";

     $total_price = $f50_dresses * $cost_shs;
     $final_price = $total_price * $each_at;
     echo "<p><span style='color: blue; font-size: 30px;'>".$f50_dresses. " </span>were sold at <span style='color:blue; font-size:30px;'>".$cost_shs." </span> then again were resold at <span style='color: blue; ".$each_at."</p>";
     echo "<p>Hence the total price was <span style='color: green, font-size:30px;'>".$total_price." </span><br> then the final price was <span style='color: blue; font-size:30px;'>".$final_price."</span></p>";


     echo "<h1>QUESTION NUMBER THREE</h1>";
     $t300 = "300";
     $ten_dollars = "10";
     $bricks = "1000";
     $t50 = "0.50";
     $required_total_Was = $t300 * $ten_dollars;
     $required_bricks = $bricks * $t50;

     $total_price = $required_bricks + $required_total_Was;
     echo "<p>project required <span style='color: blue; font-size:30px;'>".$t300."</span> Bags of cement which were to be bought at <span style='color: blue; font-size:30px;'>".$ten_dollars."</span> and a total of <span style='color: blue; font-size:30px;'> ".$bricks." </span>were bought at ".$t50."</p>";

     echo "<p>The total cost of materials to use were <span style='color: blue; font-size:30px;'>" .$total_price. "</span></p>";


     echo "<h1>QUESTION NUMBER FOUR</h1>";
     $monday = "200";
     $wednesday = "150";
     $friday = "175";
     $total_price = $monday + $wednesday + $friday;
     echo "<p>Hence the on monday <span style='color: blue; font-size:30px;'> ".$monday." </span>pounds were sold then on wednesday <span style='color: blue; font-size:30px;'> ".$wednesday."</span> pounds were sold and on friday <span style='color: blue; font-size:30px;'> ".$friday." </span>pounds were sold the total price was hence forth <span style='color: blue; font-size:30px;'> ".$total_price."</span></p>";


     echo "<h1>QUESTION NUMBER FIVE</h1>";
     $participants = "10";
     $individual_Weights = "<br>
     <span style='color: blue; font-size:30px;'>"."200"."</span>". "<br> 
     <span style='color: blue; font-size:30px;'>"."255"."</span>"." <br> 
     <span style='color: blue; font-size:30px;'>"."180"."</span>"." <br>
     <span style='color: blue; font-size:30px;'>"."230"."</span>"." <br>
     <span style='color: blue; font-size:30px;'>"."190"."</span>"." <br>
     <span style='color: blue; font-size:30px;'>"."215"."</span>"."  <br>
     <span style='color: blue; font-size:30px;'>"."210"."</span>"." <br>
     <span style='color: blue; font-size:30px;'>"."195"."</span>"." <br>
     <span style='color: blue; font-size:30px;'>"."185"."<span>"." <br>
     <span style='color: blue; font-size:30px;'>"."230"."</span>";
   echo "<p>The indviddual weights for ten memebers are as follows respectively ".$individual_Weights ." </p>";

   $total = 200 + 255 + 180 + 230 + 190 + 215 + 210 + 195 + 185 + 230;
   $average = $total / $participants;
   echo "<p>therefore the average of the above  <span style='color: blue; font-size:30px;'>".$participants."</span> when addedd al together have a total  of  <span style='color: blue; font-size:30px;'>".$total."</span> hence when avearage is calculate it is  <span style='color: blue; font-size:30px;'>".$average."</span></p>";

     
?>




