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
        $p5=$_SESSION['p5'];
        $p6=$_SESSION['p6'];//new name
        $p7=$_SESSION['p7'];//new speciality
        $p8=$_SESSION['p8'];//new dept
        $p9=$_SESSION['p9'];//new working hopital ID
        $p10=$_SESSION['p10'];//new working proof ID
        
        echo "Practitioner name is "."$p6"."<br>";
        echo "Practioner speciality is "."$p7"."<br>";
        echo "Practitioner Department is "."$p8"."<br>";
        echo "Practitioner Working Hospital ID is "."$p9"."<br>";
        echo "Practitioner Working Proof ID is"."$p10"."<br>";
        
        $DBservername = "localhost";
        $User = "root";
        $Pwd = "";
        $con = mysqli_connect($DBservername,$User,$Pwd);
        
        if($con)
        {
                        
            mysqli_select_db($con,"abc");
            
            if($p6!="")
            {
                $a=$p6;
            }
            else
            {
                $a=$p1;
            }
            
            if($p7!="")
            {
                $b=$p7;
            }
            else
            {
                $b=$p2;
            }
            
            if($p8!="")
            {
                $c=$p8;
            }
            else
            {
                $c=$p3;
            }
            
            if($p9!="")
            {
                $d=$p9;
            }
            else
            {
                $d=$p4;
            }
            
            if($p10!="")
            {
                $e=$p10;
            }
            else
            {
                $e=$p5;
            }
            
            $uquery = "update practitioner set prname='$a',special='$b',dept='$c',hoid='$d',proid='$e' where prname='$p1'";
            
            if(mysqli_query($con,$uquery))
            {
                echo "<br><b>Practitioner Information Updated</b>";
            }
            else
            {
                echo "<br>Practitioner not registered";
            }
        }
        else
        {
            echo "<br><br>Error in Connection";
        }
        mysqli_close($con);
    ?>
    
    <a href="uprac.php"><br>Back</a>

</body>
</html>