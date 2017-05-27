<!DOCTYPE html>
<html lang="sk">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $translate[$_SESSION["lang"]]["biomech"];?></title>
    <link href="css/menu.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="icon" href="image/favicon.png" type="image/png" sizes="16x16">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
             <img class="img-responsive" src = "Captions/biomechatronika.jpg" alt="">
            </div>
            
			</div>
            


        <hr>

         <!-- Linky -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <a href="http://is.stuba.sk/"><?php echo $translate[$_SESSION["lang"]]["ais"];?></a><br>
                    <a href="http://aladin.elf.stuba.sk/rozvrh/"><?php echo $translate[$_SESSION["lang"]]["rozvrh"];?></a><br>
                    <a href="http://elearn.elf.stuba.sk/moodle/"><?php echo $translate[$_SESSION["lang"]]["moodle"];?></a><br>
                    <a href="http://www.sski.sk/webstranka/">SSKI</a><br>
                    <a href="https://www.jedalen.stuba.sk/WebKredit/"><?php echo $translate[$_SESSION["lang"]]["jedalen"];?></a><br>
                    <a href="https://webmail.stuba.sk/"><?php echo $translate[$_SESSION["lang"]]["webmail"];?></a><br>
                    <a href="https://kis.cvt.stuba.sk/i3/epcareports/epcarep.csp?ictx=stu&language=1"><?php echo $translate[$_SESSION["lang"]]["evidpubl"];?></a><br>
                    <a href="http://okocasopis.sk/"><?php echo $translate[$_SESSION["lang"]]["magazin"];?></a><br>
                    <a href="https://www.facebook.com/UAMTFEISTU"><?php echo $translate[$_SESSION["lang"]]["fb"];?></a><br>
                    <a href="https://www.youtube.com/channel/UCo3WP2kC0AVpQMIiJR79TdA"><?php echo $translate[$_SESSION["lang"]]["youtube"];?></a><br>
                </div>
            </div>
        </div>

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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
