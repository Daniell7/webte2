<?php
require 'config.php';
// Create connection
/*
 *
 *
 *
 * ANGLICKY JAZYK JE NA     echo $videos[0]['Title-EN'];
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
$sql = "SELECT * FROM VIDEO";
$result = $conn->query($sql);

$videos = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $videos[] = $row;
    }
} else {
    echo "ERROR: Nenajdeny vyraz v databaze";
}

//print_r($videos);
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

    <title>Videá</title>
    <link href="css/menu.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/video.css" rel="stylesheet">
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
 <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Videá
            </h1>
        </div>
        <?php
        for ($i = 0; $i < count($videos); $i++ ) {
        ?>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center shadow cursor" onclick="currentSlide(<?php echo $i+1;?>)">
                    <h4><?php echo $videos[$i]['Title-SK'];?></h4>
                </div>
            </div>
        </div>

            <div class="col-md-6 slides center-block">

                    <iframe class="player" width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $videos[$i]['Link'];?>" frameborder="0" allowfullscreen></iframe>

            </div>

        <?php
        }
        ?>
    </div>
    <!-- /.row -->
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
<script src="js/video.js"></script>
<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
