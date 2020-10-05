<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>PHP to find Odd or Even number!</title>
        <link rel = "stylesheet" type = "text/css" href = "csslab7.css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            function foddeven(){
            var x = prompt("Enter a number greater than 4: ");
            if(x<=4){
                do{
                x = prompt("Value is less than or equal to 4. Please enter a number greater than 4: ");
                }while(x<=4);
            }
            }
        </script>
        
    </head>
    <body>
			<form method="post">
	        <div style="margin-top: 10px;" id="result">
             <h2>PHP to find Odd or Even number!</h2>
				Enter a number:  <input type="text" id="num" name="num">
                <input type="submit" name="btn" value="find Odd or Even number" onclick = "foddeven();">
            </div>	
			
<?php
if(isset($_POST['btn']))
{    
    $num = $_POST['num'];
    echo nl2br("\nThe number you entered is ".$_POST['num']);
    echo nl2br("\nEven Numbers are: \n");
    for($i=0;$i<=$num;$i++){
        if($i%2 == 0){
            echo $i.''; 
            if($i<($num-1)){
                echo ',';
            }
        }
    }
    echo nl2br("\nOdd Numbers are: \n");
    for($i=0;$i<=$num;$i++){
            if($i%2 != 0){
            echo $i.'';
            if($i<($num-1)){
                echo ',';
            }
        }
    }
    echo nl2br("<h1> Numbers Displayed Succesfully &#10004;</h1>");
}     
?>
    </form>     
    </body>
</html>