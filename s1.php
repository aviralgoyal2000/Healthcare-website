<!--Contributed by Aviral Goyal, 19BCE0883-->
<html>
    
<body>
    
    <?php
    
    session_start();
    
    $p1=$_SESSION['p1'];
    $p2=$_SESSION['p2'];
    $p3=$_SESSION['p3'];

    $DBservername = "localhost";
    $User = "root";
    $Pwd = "";
    $con = mysqli_connect($DBservername,$User,$Pwd);

    echo "<b>Search Results</b><br><br>";

    if($con)
    {
        
        mysqli_select_db($con,"abc");

        if($p1!="")
        {
            $squery = "select * from hospital where hname = '$p1'";
        }
        else if($p2!="")
        {
            $squery = "select * from hospital where loc = '$p2'";
        }
        else if($p3!="")
        {
            $squery = "select * from hospital where special = '$p3'";
        }
        else
        {
            echo "<br><br>No fields are filled or multiple fields filled<br><br>";
        }

        $result = $con -> query($squery);

        if($result -> num_rows > 0)
        {
            echo "<table border = 1><tr><th>Hospital Name</th><th>Hospital Location</th><th>Hopital Speciality</th></tr>";

            while($row = $result -> fetch_assoc())
            {
                echo "<tr><td>".$row["hname"]."</td><td>".$row["loc"]."</td><td>".$row["special"]."</td></tr>";
            }

            echo "</table>";
        }
        else
        {
            echo "<br><br>No Results<br><br>";
        }
    }
    else
    {
        echo "<br><br>Error in Connection";
    }

    mysqli_close($con);
    ?>
    
    <a href="shosp.php"><br>Back</a>

</body>
</html>