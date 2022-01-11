<!--Contributed by Aviral Goyal, 19BCE0883-->
<html>
    
<body>
    New values entered are:<br><br>
    
    <?php
    
    session_start();
    
    $p1=$_SESSION['p1'];
    $p2=$_SESSION['p2'];
    $p3=$_SESSION['p3'];
    $p4=$_SESSION['p4'];//new hos name
    $p5=$_SESSION['p5'];//new location
    $p6=$_SESSION['p6'];//new specialization
    
    echo "Hospital name is "."$p4"."<br>";
    echo "Hospital location is "."$p5"."<br>";
    echo "Hospital specializes in "."$p6"."<br>";

    $DBservername = "localhost";
    $User = "root";
    $Pwd = "";
    $con = mysqli_connect($DBservername,$User,$Pwd);

    if($con)
    {
        
        mysqli_select_db($con,"abc");

        if($p4!="")
        {
            $a=$p4;
        }
        else
        {
            $a=$p1;
        }

        if($p5!="")
        {
            $b=$p5;
        }
        else
        {
            $b=$p2;
        }

        if($p6!="")
        {
            $c=$p6;
        }
        else
        {
            $c=$p3;
        }

        $uquery = "update hospital set hname='$a',loc='$b',special='$c' where hname='$p1'";

        if(mysqli_query($con,$uquery))
        {
            echo "<br><b>Information updated successfully</b>";
        }
        else
        {
            echo "<br>Hospital is not registered";
        }
    }
    else
    {
        echo "<br><br>Error in Connection";
    }

    mysqli_close($con);
    ?>
    
    <a href="uhos.php"><br>Back</a>

</body>
</html>