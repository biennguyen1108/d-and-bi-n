<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<style>
		.xanh{
     height:20px;
        width:20px;
        float:left;
        border:1px solid gray;
        margin-left:5px;
        margin-bottom:5px;
        background: blue; 

		}
		.do{
		  height:20px;
        width:20px;
        float:left;
        border:1px solid gray;
        margin-left:5px;
        margin-bottom:5px;
        background: red;
 
		}
   
</style>
	<h1>Vòng lặp For PHP</h1>
	<?php 
	for ($i=0; $i < 5; $i++) { 
	 	for ($j=0; $j < 5 ; $j++) { 
	 		if ($i%2==0) {

	 			echo "<div class='xanh'></div>";
	 			
	 		}else{
	 			echo "<div class='do'></div>";
	 		};	

	 		}
	 		 echo"<div style='clear:both'></div>";

	 	}
	  ?>

	  <h1>vòng lặp while PHP</h1>
	  <?php
 $i=1;
 while ($i<=5){
     for($a = 0; $a < 5; $a++){
     	for($j = 0; $j < 5; $j++){
         	if($a%2==0){
             echo("<div class='xanh'></div>");
         	}else{
             echo("<div class='do'></div>");
         }
     }
     echo("<div style='clear:both'></div>");
 	};
 	$i++;
 }
    ?>

    <h1>Script</h1>
<script>
    for(var i = 0; i < 5; i++){
        for(var j = 0; j < 10; j++){
        	if (i%2==0) {
        		  document.write("<div class='xanh'></div>");
        	}
        	else{
        		 document.write("<div class='do'></div>");
        }
        	}
           
        document.write("<div style='clear:both'></div>");
    }
</script>
	
</body>
</html>