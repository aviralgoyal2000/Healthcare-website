<?php
$DBservername = "localhost";
$User = "root";
$Pwd = "";

$con = mysqli_connect($DBservername,$User,$Pwd);
if($con)
{
    echo "Connected Successfully";
    
    if(mysqli_query($con,"create database abc"))
    {
        echo "<br>Database created";
    }
    else
    {
        echo "<br>Database already exist";
    }

    mysqli_select_db($con,"abc");
    echo "<br>Selected abc database";

    $table1 = "create table hospital(hid int auto_increment,hname varchar(50),loc varchar(50),special varchar(50),primary key(hid))";
    $table2 = "create table practitioner(prid int auto_increment,prname varchar(50),special varchar(50),dept varchar(20),hoid varchar(4),proid varchar(4),primary key(prid))";
    $table3 = "create table patient(paid int auto_increment,paname varchar(50),DOB date,gender varchar(10),address varchar(1000),primary key(paid))";
    $table4 = "create table insurer(username varchar(50),email varchar(90),pass varchar(90),repass varchar(90),primary key(username))";


    if(mysqli_query($con,$table1))
    {
        echo "<br>Hospital table created";
    }
    else
    {
        echo "<br>Hospital table already exist";
    }

    if(mysqli_query($con,$table2))
    {
        echo "<br>Practitioner table created";
    }
    else
    {
        echo "<br>Practitioner table already exist";
    }

    if(mysqli_query($con,$table3))
    {
        echo "<br>Patient table created";
    }
    else
    {
        echo "<br>Patient table already exist";
    }

    if(mysqli_query($con,$table4))
    {
        echo "<br>Insurer table created";
    }
    else
    {
        echo "<br>Insurer table already exist";
    }
}
else
{
    echo "Error in Connection";
}

mysqli_close($con);
?>