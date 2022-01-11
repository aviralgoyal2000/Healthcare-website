<html>
    
<body>
    value entered are:<br><br>
    
    <?php
    
    session_start();
    
    $p1=$_SESSION['p1'];
    $p2=$_SESSION['p2'];
    $p3=$_SESSION['p3'];
    $p4=$_SESSION['p4'];
    $p5=$_SESSION['p5'];
    
    echo "Pracitioner name is "."$p1"."<br>";
    echo "Practitioner specializes in "."$p2"."<br>";
    echo "Department of Pracitioner is "."$p3"."<br>";
    echo "Working Hopital ID of practitioner is "."$p4"."<br>";
    echo "Working Proof ID of practitioner is "."$p5"."<br>";
    
    $file2=fopen("Practitioner/$p1.txt","a+");
    
    if($file2==false)
    {
        echo "Problem in opening a file";
    }
    else
        fwrite($file2,"Entered Values are \n");
        
    $u=$p1." ".$p2." ".$p3." ".$p4." ".$p5;
    fwrite($file2,$u);
    fclose($file2);

    $DBservername = "localhost";
    $User = "root";
    $Pwd = "";
    $con = mysqli_connect($DBservername,$User,$Pwd);

    if($con)
    {
        
        
        mysqli_select_db($con,"abc");
        
        $tuple = "insert into practitioner (prname,special,dept,hoid,proid) values ('$p1','$p2','$p3','$p4','$p5')";

        if(mysqli_query($con,$tuple))
        {
            echo "<br><b>Practitioner registered successfully</b>";
        }
        else
        {
            echo "<br>Error in registering practitioner";
        }
    }
    else
    {
        echo "<br><br>Error in Connection";
    }

    mysqli_close($con);
    ?>
    
    <a href="practitioner.php"><br>Back</a>

</body>
</html>