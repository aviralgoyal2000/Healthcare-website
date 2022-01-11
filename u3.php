<!--Contributed by Aviral Goyal, 19BCE0883-->
<html>
    
<body>
    New values entered are:<br><br>
    
    <?php
    
    session_start();
    
    $p1=$_SESSION['p1'];
    $p2=$_SESSION['p2'];
    $p3=$_SESSION['p3'];
    $p4=$_SESSION['p4'];
    $p5=$_SESSION['p5'];//new name
    $p6=$_SESSION['p6'];//new DOB
    $p7=$_SESSION['p7'];//new gender
    $p8=$_SESSION['p8'];//new address
    
    echo "Patient name is "."$p5"."<br>";
    echo "Patient date of birth is "."$p6"."<br>";
    echo "Patient gender is "."$p7"."<br>";
    echo "Patient address is"."$p8"."<br>";

    $DBservername = "localhost";
    $User = "root";
    $Pwd = "";
    $con = mysqli_connect($DBservername,$User,$Pwd);

    if($con)
    {
               
        mysqli_select_db($con,"abc");

        if($p5!="")
        {
            $a=$p5;
        }
        else
        {
            $a=$p1;
        }

        if($p6!="")
        {
            $b=$p6;
        }
        else
        {
            $b=$p2;
        }

        if($p7!="")
        {
            $c=$p7;
        }
        else
        {
            $c=$p3;
        }
        
        if($p8!="")
        {
            $d=$p8;
        }
        else
        {
            $d=$p4;
        }

        $uquery = "update patient set paname='$a',DOB='$b',gender='$c',address='$d' where paname='$p1'";

        if(mysqli_query($con,$uquery))
        {
            echo "<br><b>Patien Information Updated</b>";
        }
        else
        {
            echo "<br>Patient not registered";
        }
    }
    else
    {
        echo "<br><br>Error in Connection";
    }

    mysqli_close($con);
    ?>
    
    <a href="upat.php"><br>Back</a>

</body>
</html>