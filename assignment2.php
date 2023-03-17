<?php
echo "grading system";
$mathScore = 80;
$englishScore = 70;
$scienceScore = 90;
$socialStudiesScore = 70;

// gradings starts from here
if($mathScore>= 90){
	echo '<br>' ."Math:". " ". "A";
}
elseif($mathScore >=80){
	echo '<br>' . "Math:". " ". "B";
}
elseif($mathScore >=70){
	echo '<br>' . "Math:". " ". "C";
}
elseif($mathScore >=60){
	echo '<br>' . "Math:". " ". "D";
}
else{
	echo '<br>' . "Math:". " ". "F";
}
if($englishScore>= 90){
	echo '<br>' . "English:". " ". "A";
}
elseif($englishScore >=80){
	echo '<br>' . "English:". " ". "B";
}
elseif($englishScore >=70){
	echo '<br>' . "English:". " ". "C";
}
elseif($englishScore >=60){
	echo "English:". " ". "D";
}
else{
	echo '<br>' . "English:". " ". "F";
}
if($scienceScore>= 90){
	echo '<br>' . "Science:". " ". "A";
}
elseif($scienceScore >=80){
	echo '<br>' . "Science:". " ". "B";
}
elseif($scienceScore >=70){
	echo '<br>' . "Science:". " ". "C";
}
elseif($scienceScore >=60){
	echo "Science:". " ". "D";
}
else{
	echo '<br>' . "English:". " ". "F";
}
if($socialStudiesScore>= 90){
	echo '<br>' . "Social Studies:". " ". "A";
}
elseif($socialStudiesScore >=80){
	echo '<br>' . "Social Studies:". " ". "B";
}
elseif($socialStudiesScore >=70){
	echo '<br>' . "Social Studies:". " ". "C";
}
elseif($socialStudiesScore >=60){
	echo "Social Studies:". " ". "D";
}
else{
	echo '<br>' . "Social Studies:". " ". "F";
}
// titution determination system starts here.
echo '<br>'  . "Tuition Determination System:";
$nationality = "Ugandan";
$is_orphan = "True";
$a_level_points = 45;
// decision making starts from here;
if($nationality = "Ugandan" && $is_orphan="true"){
	echo '<br>' ."Tuition for domestic orphan students is $" ." " ."10000";
}
 if($nationality != "Ugandan" && $is_orphan != "True"){
 	echo '<br>' ."tuition for International and un orphan students is $"." " ."20000";
 }
 elseif($nationality = "Ugandan" && $is_orphan="true" && $a_level_points > 45){
 	echo '<br>' ."Your Tuition is $" ." " ."5000";
 }
 elseif($nationality = "Ugandan" && $a_level_points < 45){
 	echo '<br>' ."Your Tuition is $" ." " ."8000";	
 }
 elseif($nationality != "Ugandan" && $a_level_points >= 45){
 	echo '<br>' ."Your Tuition is $" ." " ."15000";	
 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body bgcolor = "lavender">
 
 </body>
 </html>
