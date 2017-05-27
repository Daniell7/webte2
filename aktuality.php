<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


session_start();
require 'config.php';
include 'texty.php';

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(!isset($_SESSION["offset"])){
    $_SESSION["offset"]=0;
}

$sql = "SELECT * FROM aktuality WHERE date_expire >= '".date("Y-m-d")."' AND language like '".$_SESSION["lang"]."' LIMIT ".$_SESSION["offset"].",5";
//$sql2 = "SELECT * FROM FOTOGALERIA WHERE Date = '2015-09-25'";

//$result2 = $conn->query($sql2);
$news=array();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
    if(isset($_GET["offset"])){
        $sql = "SELECT * FROM aktuality WHERE date_expire >= '".date("Y-m-d")."' AND language like '".$_SESSION["lang"]."' LIMIT ".$_SESSION["offset"].",5";
         $_SESSION["offset"]=$_GET["offset"];
    }
}

$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
        $news[] = $row;
    }



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

    <title><?php echo $translate[$_SESSION["lang"]]["news"];?></title>
    <link href="css/menu.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <link href="css/fotogaleria.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="image/favicon.png" type="image/png" sizes="16x16">
    <!-- Fotogaleria -->

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
                <?php echo $translate[$_SESSION["lang"]]["news"];?>
            </h1>
        </div>
        <div class="col-lg-12">
            <h4>
                <?php echo $translate[$_SESSION["lang"]]["dod"];?>
                
            </h4>
        </div>
        
        
    </div>
    <hr>
        <div class="row">
        <div class="col-lg-12">
           <table>
                <?php
           for ($i = 0; $i < count($news); $i++ ) {
              echo "<tr><td><h4>".$news[$i]["title"]."</h4><hr></td></tr>";
              echo "<tr style='border-bottom: 1px solid grey;'><td>".$news[$i]["content"]
                      . "<hr></td></tr>";}
                      echo "<tr><td>";
                       if( !$_SESSION["offset"]==0){
                  echo "<a href=\"/projekt/webte2/aktuality.php?offset=".($_SESSION["offset"]-5)."\">previous</a>";
            }else{
                echo "<a href=\"javascript:function() { return false; }\">previous</a>";
            }
           echo "</td><td>";
           
           if(count($news)>=5){
                  echo "<a href=\"/projekt/webte2/aktuality.php?offset=".($_SESSION["offset"]+5)."\">next</a>";
            }else{
                echo "<a href=\"javascript:function() { return false; }\">next</a>";
            }
              echo "</td></tr>";
              ?>
               
            </table>
        </div>
        
       
    </div>
    <div id="Mod" class="mod">
        
        <div class="content">
           <?php 
           
          
            
?>
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



</body>

</html>
