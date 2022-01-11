<!--Contributed by Aviral Goyal, 19BCE0883-->
<html>
    
<body>
    
    <?php
    
    session_start();
    
    $p1=$_SESSION['p1'];
    $p2=$_SESSION['p2'];
    $p3=$_SESSION['p3'];
    $p4=$_SESSION['p4'];

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
            $squery = "select * from patient where paname = '$p1'";
        }
        else if($p2!="")
        {
            $squery = "select * from patient where DOB = '$p2'";
        }
        else if($p3!="")
        {
            $squery = "select * from patient where gender = '$p3'";
        }
        else if($p4!="")
        {
            $squery = "select * from patient where address = '$p4'";
        }
        else
        {
            echo "<br><br>No fields are filled or multiple fields filled<br><br>";
        }

        $result = $con -> query($squery);

        if($result -> num_rows > 0)
        {
            echo "<table border = 1><tr><th>Patient Name</th><th>Patient Date of Birth</th><th>Patient Gender</th><th>Patient Address</th></tr>";

            while($row = $result -> fetch_assoc())
            {
                echo "<tr><td>".$row["paname"]."</td><td>".$row["DOB"]."</td><td>".$row["gender"]."<td>".$row["address"]."</td></tr>";
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
    
    <a href="spat.php"><br>Back</a>

</body>
</html>