<!--Contributed by Pratyaksha, 19BCI0136-->
<html>
    
<body>    
    <?php
    
    session_start();
    
    $p1=$_SESSION['p1'];
    
    echo "Username of the insurer to be deleted from the database: "."$p1"."<br>";

    $DBservername = "localhost";
    $User = "root";
    $Pwd = "";
    $con = mysqli_connect($DBservername,$User,$Pwd);

    if($con)
    {
                
        mysqli_select_db($con,"abc");
        
        $dquery="delete from insurer where username='$p1'";
        
        if(mysqli_query($con,$dquery))
        {
            echo "<br><b>Insurer details deleted successfully</b>";
        }
        else
        {
            echo "<br>Account do not exist";
        }
    }
    mysqli_close($con);
    ?>
    
    <a href="dinsu.php"><br>Back</a>

</body>
</html>