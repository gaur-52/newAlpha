<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>team aplha</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <!--end of page level css-->
</head>

<body>
    <!-- Header Section Start -->
    <?php include 'header.php';?>
    <!-- //Header Section End -->
    <!-- Breadcrumb Section Start -->
    
    <!-- //Breadcrumb Section End -->
    <!-- Map Section Start -->
    
    <!-- //map Section End -->
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
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
                    
                    </div>
                </form>
            </div>
            <!-- //Conatc Form Section End -->
            <!-- Address Section Start -->
            <div class="col-md-6 col-sm-6">
                <div class="media media-right">
                    <div class="media-left media-top">
                        <a href="#">
                            <div class="box-icon">
                                <i class="livicon" data-name="home" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                            </div>
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Address:</h4>
                        <div class="danger">Team Alpha</div>
                        <address>
                            demo city for hackademic
                            <br> 911,demo street
                            <br> demo city,demo state
                            <br> demo country,india
                        </address>
                    </div>
                </div>
                <div class="media padleft10">
                    <div class="media-left media-top">
                        <a href="#">
                            <div class="box-icon">
                                <i class="livicon" data-name="phone" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                            </div>
                        </a>
                    </div>
                    <div class="media-body padbtm2">
                        <h4 class="media-heading">Telephone:</h4> 9496as5254
                        <br /> Fax:c0alpha911
                    </div>
                </div>
            </div>
            <!-- //Address Section End -->
        </div>
    </div>
    <!-- //Container Section End -->
    <!-- Footer Section Start -->
    <?php include'footer.php';?>
    <!-- Footer Section End -->
    <!-- Copy right Section Start -->
    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; Josh Admin Template, 2015</p>
        </div>
    </div>
    <!-- //Copy Right Section End -->
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
    <!-- page level js starts-->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmap.js"></script>
    <!--page level js ends-->
</body>

</html>
