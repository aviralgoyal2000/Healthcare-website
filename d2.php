<!--Contributed by Pratyaksha, 19BCI0136-->
<html>
    
<body>    
    <?php
    
    session_start();
    
    $p1=$_SESSION['p1'];
    
    echo "Name of the practitioner to be deleted from the database: "."$p1"."<br>";

    $DBservername = "localhost";
    $User = "root";
    $Pwd = "";
    $con = mysqli_connect($DBservername,$User,$Pwd);

    if($con)
    {
        
        mysqli_select_db($con,"abc");
        
        $dquery="delete from practitioner where prname='$p1'";
        
        if(mysqli_query($con,$dquery))
        {
            echo "<br><b>Practitioner details deleted successfully</b>";
        }
        else
        {
            echo "<br>Practitioner not registered";
        }
    }
    mysqli_close($con);
    ?>
    
    <a href="dprac.php"><br>Back</a>

</body>
</html>