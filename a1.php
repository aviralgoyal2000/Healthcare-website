<html>
    
<body>
    value entered are:<br><br>
    
    <?php
    
    session_start();
    
    $p1=$_SESSION['p1'];
    $p2=$_SESSION['p2'];
    $p3=$_SESSION['p3'];
    
    echo "Hospital name is "."$p1"."<br>";
    echo "Hospital location is "."$p2"."<br>";
    echo "Hospital specializes in "."$p3"."<br>";
    
    $file2=fopen("Hospital/$p1.txt","a+");
    
    if($file2==false)
    {
        echo "Problem in opening a file";
    }
    else
        fwrite($file2,"Entered Values are \n");
        
    $u=$p1." ".$p2." ".$p3;
    fwrite($file2,$u);
    fclose($file2);

    $DBservername = "localhost";
    $User = "root";
    $Pwd = "";
    $con = mysqli_connect($DBservername,$User,$Pwd);

    if($con)
    {
        
        mysqli_select_db($con,"abc");

        $tuple = "insert into hospital (hname,loc,special) values ('$p1','$p2','$p3')";

        if(mysqli_query($con,$tuple))
        {
            echo "<br><b>Hospital registered successfully</b>";
        }
        else
        {
            echo "<br>Error in resgistering hospital";
        }
    }
    else
    {
        echo "<br><br>Error in Connection";
    }

    mysqli_close($con);
    ?>
    
    <a href="hospital.php"><br>Back</a>

</body>
</html>