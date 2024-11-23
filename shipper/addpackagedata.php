<?php 
    require 'dbconnect.php';
    session_start();

    $qry="SELECT * FROM shipper WHERE isactive=1";
    $rs=mysqli_query($conn,$qry);
    
    if (isset($_POST['submit'])) 
    {
        $id=$_SESSION['id'];
        $title=$_POST['title'];
        $des=$_POST['des'];
        $price=$_POST['price'];
        $utype=1;
        $isactive=1;
        $doi=date("d-m-y H:i:s");


        $query="INSERT into package(added_by,title,description,price,utype,isactive,doi) VALUES('".$id."','".$title."','".$des."','".$price."','".$utype."','".$isactive."','".$doi."')"; 

        $result=mysqli_query($conn,$query);
        if (!$result)
        {
            echo "Insert  error";
        }
        else
        {
            header("location:viewpackage.php");
            exit();
        }
    }
    else
    {
        echo "OUT_IF_ERROR";
    }
 ?>