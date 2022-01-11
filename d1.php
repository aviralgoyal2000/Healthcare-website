<!--Contributed by Pratyaksha, 19BCI0136-->
<html>
    
<body>    
    <?php
    
    session_start();
    
    $p1=$_SESSION['p1'];
    
    echo "Name of the hospital to be deleted from the database: "."$p1"."<br>";

    $DBservername = "localhost";
    $User = "root";
    $Pwd = "";
    $con = mysqli_connect($DBservername,$User,$Pwd);

    if($con)
    {
        
        
        mysqli_select_db($con,"abc");
        
        
        $dquery="delete from hospital where hname='$p1'";
        
        if(mysqli_query($con,$dquery))
        {
            echo "<br><b>Hospital details deleted successfully</b>";
        }
        else
        {
            echo "<br>Hospital not registered";
        }
    }
    mysqli_close($con);
    ?>
    
    <a href="dhos.php"><br>Back</a>

</body>
</html>