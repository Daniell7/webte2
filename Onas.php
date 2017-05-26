<!DOCTYPE html>
<html lang="sk">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Domov - ÚAMT - FEI STU</title>
    <link href="css/menu.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

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
  

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('Captions/Caption1.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('Captions/Caption2.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('Captions/Caption3.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">


        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">O nás</h2>
            </div>
            <div class="col-md-12">
                
                <p>Ústav automobilovej mechatroniky bol zriadený k 1. júlu 2013 ako pedagogické a vedecko-výskumné pracovisko Fakulty elektrotechniky a informatiky STU v Bratislave. Zriadenie ústavu Automobilovej mechatroniky bolo logickým vyústením zámerov vedenia Fakulty elektrotechniky a informatiky STU v Bratislave vytvoriť taký ústav, ktorý by zohľadňoval súčasné požiadavky a potreby automobilového priemyslu na Slovensku s hlavným cieľom pripravovať absolventov bakalárskeho a inžienierského štúdia pre oblasť automobilovej mechatroniky.
Ústav automobilovej mechatroniky zabezpečuje výskum, vývoj a vzdelávanie v oblasti automobilovej mechatroniky a mechatronických systémov na základe integrácie a synergie mechanických, elektronických, informačných, komunikačných a riadiacich technológií do komplexných mechatronických systémov v automobiloch a ďalších odvetviach priemyslu.
Ústav garantuje študijné programy vo všetkých stupňoch štúdia akreditovaných na STU v Bratislave. Pre širokospektrálnu oblasť výučby a výskumu zabezpečuje integráciu výskumníkov a pedagógov z FEI STU do výskumného a výučbového procesu v jednotlivých študijných programoch.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Linky -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <a href="http://is.stuba.sk/">AIS STU</a><br>
					<a href="http://aladin.elf.stuba.sk/rozvrh/">Rozvrh hodín FEI</a><br>
					<a href="http://elearn.elf.stuba.sk/moodle/">Moodle FEI</a><br>
					<a href="http://www.sski.sk/webstranka/">SSKI</a><br>
					<a href="https://www.jedalen.stuba.sk/WebKredit/">Jedáleň STU</a><br>
					<a href="https://webmail.stuba.sk/">Webmail STU</a><br>
					<a href="https://kis.cvt.stuba.sk/i3/epcareports/epcarep.csp?ictx=stu&language=1">Evidencia publikácia STU</a><br>
					<a href="http://okocasopis.sk/">Časopis OKO</a><br>
					<a href="https://www.facebook.com/UAMTFEISTU">Facebook Ústavu</a><br>
					<a href="https://www.youtube.com/channel/UCo3WP2kC0AVpQMIiJR79TdA">Youtube Ústavu</a><br>
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
