 <?php 

 function getRandomColor() {
 $colors = array("Red","Green","Blue","Yellow","Purple");
 return $colors[array_rand($colors)];
 }

?>