<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>team alpha</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!--end of global css-->
</head>

<body>
    <!-- Header Start -->
    <?php include 'header.php';?>
    <!-- //Header End -->
    <!-- Breadcrumb Section Start -->
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="index.php"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Insurence</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Insurence
            </div>
        </div>
    </div>
    <!-- //Breadcrumb Section End-->
    <!-- Container Section Start -->
    <div class="container">
        <!--Content Section Start -->
        <h2>Insurence</h2>
		<div class="col-md-3"></div>
		<div class="col-md-6">
                <h2>Contact Form</h2>
                <form class="contact" action = "contact_connect.php" method = "post">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Your name" name = "name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Your email address" name = "email">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control input-lg" placeholder="contact number" name = "contact">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control input-lg no-resize" rows="6" placeholder="Write Us" name = "message"></textarea>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-primary">submit</button>
                        <button class="btn btn-danger">cancel</button>
                    </div>
                    <div class="col-md-6">
                            <?php if($_GET['log']==1) {?>
                                <p style="color:red">*we will contact you soon</p>
                            <?php }?>
                    
                    </div>
                </form>
            </div>	
			<div class="col-md-3"></div>
        <div style="height:350px;"></div>
        <!-- //Content Section End -->
    </div>
    <!-- //Container Section End -->
    <!-- Footer Section Start -->
   <?php include'footer.php';?>
    <!-- //Footer Section End -->
    <div class="copyright">
        <div class="container">
        <p>Copyright &copy; Josh Admin Template, 2015</p>
        </div>
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!--global js starts-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
   
    <script type="text/javascript" src="js/raphael.js"></script>
    <script type="text/javascript" src="js/livicons-1.4.min.js"></script>
    <script type="text/javascript" src="js/josh_frontend.js"></script>
    <!--global js end-->
</body>

</html>
