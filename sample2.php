<html>
    
<body>
    value entered are:<br>
<?php

session_start();

$p1=$_SESSION['p1'];
$p2=$_SESSION['p2'];

echo "hospital name is "."$p1"."<br>";
echo "hospital location is "."$p2"."<br>";

?>
<a href="sample.php">Back</a>
</body>
</html>