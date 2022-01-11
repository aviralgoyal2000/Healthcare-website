<!--Contributed by Aviral Goyal, 19BCE0883-->
<html>
    
<body>
    New values entered are:<br><br>
    
    <?php
    
    session_start();
    
    $p1=$_SESSION['p1'];
    $p2=$_SESSION['p2'];
    $p3=$_SESSION['p3'];
    $p4=$_SESSION['p4'];//new username
    $p5=$_SESSION['p5'];//new email
    $p6=$_SESSION['p6'];//new psw
    $p7=$_SESSION['p7'];//repeat psw
    
    echo "Insurer Username is "."$p4"."<br>";
    echo "Insurer Email is "."$p5"."<br>";
    echo "Insurer password is "."$p6"."<br>";
    echo "Repeated password is "."$p7"."<br>";

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

        $d=$p7;

        $uquery = "update insurer set username='$a',email='$b',pass='$c',repass='$d' where username='$p1'";

        if(mysqli_query($con,$uquery))
        {
            echo "<br><b>Information updated successfully</b>";
        }
        else
        {
            echo "<br>Insurer not signed up";
        }
    }
    else
    {
        echo "<br><br>Error in Connection";
    }

    mysqli_close($con);
    ?>
    
    <a href="uinsu.php"><br>Back</a>

</body>
</html>