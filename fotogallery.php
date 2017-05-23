<?php
require 'config.php';
// Create connection
/*
 *
 *
 *
 * ANGLICKY JAZYK JE NA     echo $pole1[0]['Title-EN'];  A   echo $pole2[0]['Title-EN'];
 *
 *
 *
 *
 * */
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM FOTOGALERIA WHERE Date = '2017-02-07'";
$sql2 = "SELECT * FROM FOTOGALERIA WHERE Date = '2015-09-25'";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);

$pole1 = array();
$pole2 = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $pole1[] = $row;
    }
} else {
    echo "ERROR: Nenajdeny vyraz v databaze";
}
if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        $pole2[] = $row2;
    }
} else {
    echo "ERROR: Nenajdeny vyraz v databaze";
}
//print_r($pole1);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <link href="css/fotogaleria.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Fotogaleria -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="services.html">Services</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="portfolio-1-col.html">1 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-2-col.html">2 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-3-col.html">3 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-4-col.html">4 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-item.html">Single Portfolio Item</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="blog-home-1.html">Blog Home 1</a>
                        </li>
                        <li>
                            <a href="blog-home-2.html">Blog Home 2</a>
                        </li>
                        <li>
                            <a href="blog-post.html">Blog Post</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="full-width.html">Full Width Page</a>
                        </li>
                        <li>
                            <a href="sidebar.html">Sidebar Page</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing Table</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Fotogaléria
            </h1>
        </div>
        <div class="col-lg-12">
            <h4>
                <?php
                    echo $pole1[0]['Title-SK'];
                ?>
            </h4>
        </div>
        <?php
        for ($i = 0; $i < count($pole1); $i++ ) {
                ?>
                <div class="col-md-2">
                    <div class="panel">
                        <div class="shadow cursor" onclick="openModal(1);currentSlide(<?php echo $i+1;?>)" >
                            <img src="fotogaleria/event001/<?php echo $pole1[$i]['Folder'];?>.JPG" alt="">
                            <!--<p class="foto">Deň otvorených dverí ÚAMT FEI STU (7.2.2017)</p>-->
                        </div>
                    </div>
                </div>
                <?php
        }
        ?>
    </div>
    <hr>
        <div class="row">
        <div class="col-lg-12">
            <h4>
                <?php
                echo $pole2[0]['Title-SK'];
                ?>
            </h4>
        </div>
        <?php
        for ($i = 0; $i < count($pole2); $i++ ) {
            ?>
            <div class="col-md-2">
                <div class="panel">
                    <div class="shadow cursor" onclick="openModal(2);currentSlide(<?php echo $i+1;?>)" >
                        <img src="fotogaleria/event002/<?php echo $pole2[$i]['Folder'];?>.jpg" alt="">
                        <!--<p class="foto">Deň otvorených dverí ÚAMT FEI STU (7.2.2017)</p>-->
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div id="Mod" class="mod">
        <span class="cl cursor" onclick="closeModal(1)">&times;</span>

        <div class="content">
            <?php
            for ($i = 0; $i < count($pole1); $i++ ) {
            ?>
            <div class="slides">
                <div class="cislo"><?php echo $i+1;?> / <?php echo count($pole1);?></div>
                <img src="fotogaleria/event001/<?php echo $pole1[$i]['Folder'];?>.JPG" alt="">
            </div>
            <?php }?>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>

    <div id="Mod2" class="mod">
        <span class="cl cursor" onclick="closeModal(2)">&times;</span>

        <div class="content">
            <?php
            for ($i = 0; $i < count($pole2); $i++ ) {
                ?>
                <div class="gal">
                    <div class="cislo"><?php echo $i+1;?> / <?php echo count($pole2);?></div>
                    <img src="fotogaleria/event002/<?php echo $pole2[$i]['Folder'];?>.jpg" alt="">
                </div>
            <?php }?>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>

            <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script src="fotogaleria/foto.js"></script>
<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
