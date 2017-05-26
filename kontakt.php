<!DOCTYPE html>
<?php session_start();
include 'texty.php';
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $translate[$_SESSION["lang"]]["contact"];?></title>
    <link href="css/menu.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="image/favicon.png" type="image/png" sizes="16x16">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
include 'menu.php';
?>
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $translate[$_SESSION["lang"]]["contact"];?>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Contact Details Column -->
        <div class="col-md-4">
            <h3><?php echo $translate[$_SESSION["lang"]]["cdata"];?></h3>
            <p>
                <?php echo $translate[$_SESSION["lang"]]["adresa"];?>
            </p>
            <hr>
            <h4><?php echo $translate[$_SESSION["lang"]]["sekretariat"];?></h4><br>
            <p><?php echo $translate[$_SESSION["lang"]]["secrname"];?></p>
            <p><i class="fa fa-phone"></i>
                +421 260 291 598</p>
            <p><i class="fa fa-envelope-o"></i>
                <a href="mailto:katarina.kermietova@stuba.sk">katarina.kermietova@stuba.sk</a>
            </p>
            <p><i class="fa fa-home"></i>
                D116</p><br><br>
            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="https://www.facebook.com/UAMTFEISTU" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                </li>
                <li>
                    <a href="https://plus.google.com/u/0/100236671029101000590" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCo3WP2kC0AVpQMIiJR79TdA" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
                </li>
            </ul>
        </div>
        <!-- Map Column -->
        <div class="col-md-8">
            <!-- Embedded Google Map -->
            <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Ilkovičova+2961/3,+Slovenská+technická+univerzita+v+Bratislave,+Bratislava,+Slovakia&amp;aq=&amp;sll=48.151853,17.073345&amp;sspn=0.0706,0.013937&amp;ie=UTF8&amp;hq=&amp;hnear=Ilkovičova+2961/3,+Slovenská+technická+univerzita+v+Bratislave,+Bratislava,+Slovakia&amp;t=m&amp;ll=48.151853,17.073345&amp;spn=0.06499,0.020149&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; DIvan LKorciciak DPetrik PFuchs PChynoransky</p>
                </div>
            </div>
</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

</body>

</html>
