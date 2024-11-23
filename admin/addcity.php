<?php
require 'dbconnect.php';
$qry="SELECT * FROM state where isactive=1";
$rs=mysqli_query($conn,$qry);

if(isset($_POST['submit']))
{
    $state_id=$_POST['state'];
    $city=$_POST['city_name'];
    $isactive=1;
    $doi=date('y-m-d');

    $qry="INSERT INTO city(sid,city_name,isactive,doi) values('".$state_id."','".$city."','".$isactive."','".$doi."')";
    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
        // echo "$qry";
        header("location:viewcity.php");
        exit();
    }
}
// if (isset($_POST['submit1']))
// {
//     header("location:viewcity.php");
// }
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/admincc/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:18:07 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Add City</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/all-themes.css" />
    <style type="text/css">
       button[type=button]
        {
            display: none;
        }
    </style>
</head>
<body class="theme-red">
<!-- Page Loader -->
<nav class="navbar">
    <div class="col-12">
        <div class="navbar-header">            
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.php">YouShip</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>

        </ul>
    </div>
</nav>
<!-- Left Sidebar -->
<?php require 'sidebar.php';?>



<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Add City</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">State</a></li> -->
                        <li class="breadcrumb-item active">Add City</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">

                    <div class="header">
                        <h2>Add City</h2>
                    </div>

                    <div class="body">
                        <form id="form_validation" method="POST">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    
                                    <input type="text" class="form-control" name="city_name" required>
                                    <label class="form-label">City Name</label>
                                    
                                </div>
                                <select name='state' class="form-control">
                                        <?php
                                        if(mysqli_num_rows($rs)>0){
                                            while($row=mysqli_fetch_assoc($rs)){


                                                ?>
                                                <option value="<?php echo $row['id'];?>"><?php echo $row['state_name'];?></option>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "no record found";
                                        }
                                        ?>
                                    </select>
                            </div>
            
                            <!-- <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button> -->
                            <input type="submit" name="submit" value="Add" class="btn btn-raised btn-primary waves-effect">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js  -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js  -->

<script src="assets/plugins/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css  -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js  -->
<script src="assets/js/pages/forms/form-validation.js"></script> 
</body>

<!-- Mirrored from thememakker.com/templates/admincc/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:18:09 GMT -->
</html>