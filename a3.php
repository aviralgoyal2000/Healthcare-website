<html>
    
<body>
    value entered are:<br><br>
    
    <?php
    
    session_start();
    
    $p1=$_SESSION['p1'];
    $p2=$_SESSION['p2'];
    $p3=$_SESSION['p3'];
    $p4=$_SESSION['p4'];
    
    echo "Patient name is "."$p1"."<br>";
    echo "Patient date of birth is "."$p2"."<br>";
    echo "Patient gender is "."$p3"."<br>";
    echo "Patient address is "."$p4"."<br>";
    
    $file2=fopen("Patient/$p1.txt","a+");
    
    if($file2==false)
    {
        echo "Problem in opening a file";
    }
    else
        fwrite($file2,"Entered Values are \n");
        
    $u=$p1." ".$p2." ".$p3." ".$p4;
    fwrite($file2,$u);
    fclose($file2);

    $DBservername = "localhost";
    $User = "root";
    $Pwd = "";
    $con = mysqli_connect($DBservername,$User,$Pwd);

    if($con)
    {
        
        mysqli_select_db($con,"abc");

        $tuple = "insert into patient (paname,DOB,gender,address) values ('$p1','$p2','$p3','$p4')";

        if(mysqli_query($con,$tuple))
        {
            echo "<br><b>Patient registered successfully</b>";
        }
        else
        {
            echo "<br>Error in registering patient";
        }
    }
    else
    {
        echo "<br><br>Error in Connection";
    }

    mysqli_close($con);
    ?>
    
    <a href="patient.php"><br>Back</a>

</body>
</html>