<?php
/*$A=1;//int 
$B=1.5;//float
$classe="youssef";//string
$ok=true;// bool
var_dump($A);
echo "<br>".$B;
echo" <h2>bonjour $classe</h2>";

$var = 'World';
$var2 = 13;
echo "$var"."<br>"."$var2";
print "Hello".$var;
echo'<h2>bonjour $classe</h2>';
echo"<script>slm</script>"*/
$j=rand(1,7);
switch ($j) {
    case 1:
        echo"Dimanche";
        break;
    case 2:
        echo"Lundi";
        break;
    case 3:
        echo"Mardi";
        break;
    case 4:
        echo"Mercredi";
        break;
    case 5:
        echo"Jeudi";
        break;
    case 6:
        echo"Vendredi";
        break;
    case 7:
        echo"Samedi";
        break;
    
    default:
        # code...
        break;
    
}

?>