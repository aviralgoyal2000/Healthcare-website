<!--Contributed by Aviral Goyal, 19BCE0883-->
<html>
    
<body>
    
    <?php
    
    session_start();
    
    $p1=$_SESSION['p1'];
    $p2=$_SESSION['p2'];
    $p3=$_SESSION['p3'];
    $p4=$_SESSION['p4'];
    $p5=$_SESSION['p5'];

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
            $squery = "select * from practitioner where prname = '$p1'";
        }
        else if($p2!="")
        {
            $squery = "select * from practitioner where special = '$p2'";
        }
        else if($p3!="")
        {
            $squery = "select * from practitioner where dept = '$p3'";
        }
        else if($p4!="")
        {
            $squery = "select * from practitioner where hoid = '$p4'";
        }
        else if($p5!="")
        {
            $squery = "select * from practitioner where proid = '$p5'";
        }
        else
        {
            echo "<br><br>No fields are filled or multiple fields filled<br><br>";
        }

        $result = $con -> query($squery);

        if($result -> num_rows > 0)
        {
            echo "<table border = 1><tr><th>Practitioner Name</th><th>Practitioner Speciality</th><th>Practitioner Department</th><th>Working Hospital ID</th><th>Working Proof ID</th></tr>";

            while($row = $result -> fetch_assoc())
            {
                echo "<tr><td>".$row["prname"]."</td><td>".$row["special"]."</td><td>".$row["dept"]."</td><td>".$row["hoid"]."</td><td>".$row["proid"]."</td></tr>";
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
    
    <a href="spract.php"><br>Back</a>

</body>
</html>