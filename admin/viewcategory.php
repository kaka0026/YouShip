<?php 
    require 'dbconnect.php';
 ?>
<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/admincc/normal-tables.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:18:15 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>View Category</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/main.css">
<!-- Custom Css -->

<link rel="stylesheet" href="assets/css/all-themes.css" />
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
            <li><a href="logout.php" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
            
        </ul>
    </div>
</nav>
<!-- Left Sidebar -->
<?php require 'sidebar.php';?>

<!-- Right Sidebar -->


<section class="content">    
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>View Category</h2>
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);"> Category</a></li>
                        <li class="breadcrumb-item active">View Category</li>
                    </ul>
                </div>
            </div>
        </div>
         <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <!-- <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </div>
                    <div class="body table-responsive">

                        <?php 
                             $qry="SELECT * FROM category WHERE isactive!=2";
                            // echo "$qry";
                            $rs=mysqli_query($conn,$qry);
                         ?>

                        <table class="table table-striped">
                            <tr>
                                <thead>
                                    <td>ID</td>
                                    <td>Item name</td>
                                    <td>Quantity</td>
                                    <td>Description</td>
                                    <td>Weight (in KG)</td>
                                    <td>Isactive</td>
                                    <td>Edit</td>
                                    <td>Block</td>
                                    <td>Delete</td>
                                </thead>
                            </tr>
                            <?php 
                                if (mysqli_num_rows($rs)>0)
                                {
                                    while ($row=mysqli_fetch_assoc($rs))
                                    {
                            ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['itemname'] ?></td>
                                                <td><?php echo $row['quantity'] ?></td>
                                                <td><?php echo $row['description'] ?></td>
                                                <td><?php echo $row['weight'] ?></td>
                                                <td><?php $ia=$row["isactive"]; echo $ia; ?></td>
                                                <td><a href="editcategory.php?id=<?php echo $row['id'] ?>">Edit</a></td>
                                                <td><a href="blockcategory.php?id=<?php echo $row['id'] ?>">
                                                <?php 
                                                    if ($ia==1)
                                                    {
                                                ?>
                                                        Block
                                                <?php
                                                    }
                                                    else
                                                    {
                                                ?>
                                                        Active
                                                <?php
                                                    }
                                                ?>
                                                </a></td>

                                                <td><a href="deletecategory.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                                            </tr>
                                        </tbody>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "0 row found";
                                }
                                        ?>
                        </table>
                         <a href="addcategory.php"><input type="submit" name="submit" value="Go To Add Category" class="btn btn-raised btn-primary waves-effect"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
</body>

<!-- Mirrored from thememakker.com/templates/admincc/normal-tables.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:18:15 GMT -->
</html>