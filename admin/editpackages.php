<?php 
    require 'dbconnect.php';
 ?>
<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/admincc/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:18:07 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Edit Packages</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />
<!-- <link rel="stylesheet" type="text/css" href="style.css"/> -->
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
                    <h2>Edit Packages</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">State</a></li> -->
                        <li class="breadcrumb-item active">Edit Packages</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Edit Packages</h2>
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
                            $id=$_GET['id'];
                            $qry="SELECT * FROM package WHERE id=$id";
                            // echo "$qry";
                            $rs=mysqli_query($conn,$qry);
                            $row=mysqli_fetch_assoc($rs);
                         ?>
                         <form action="updatepackagedata.php" method="post">
                                    <table class="table table-striped">
                                        <tr>
                                            <thead>
                                                <td>Package ID</td>
                                                <td>Shipper ID</td>
                                                <td>Title</td>
                                                <td>Description</td>
                                                <td>Price</td>
                                                <td>Active</td>
                                                <td>Date of Insert</td>
                                            </thead>
                                        </tr>
                                        <tr>
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['added_by']; ?></td>
                                                    <style type="text/css">
                                                        .default-form.style-two input[type="text"],.default-form.style-two input[type="tel"]
                                                        {
                                                            background-color: white;
                                                            height: 40px;
                                                            width: 100%;
                                                            padding: 0;
                                                        }
                                                        .table>tbody>tr>td{
                                                            padding: 5px;
                                                            vertical-align: middle;
                                                        }
                                                    </style>
                                            <td><input type="text" name="title" value="<?php echo $row['title'] ?>"></td>
                                            <td><input type="text" name="des" value="<?php echo $row['description'] ?>"></td>
                                            <td><input type="tel" name="price" value="<?php echo $row['price'] ?>"></td>
                                            <td><input type="tel" name="isactive" min="1" max="2" value="<?php echo $row['isactive']; ?>"></td>
                                            <td><?php echo $row['doi']; ?></td>
                                        </tr>
                                     </table>
                                     <input type="submit" name="submit" value="Update Data" class="btn btn-raised btn-primary waves-effect">
                                 </form>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/forms/form-validation.js"></script> 
</body>

<!-- Mirrored from thememakker.com/templates/admincc/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:18:09 GMT -->
</html>