<!DOCTYPE html>
<?php
session_start();
include '../texty.php';
?>
<html lang="sk">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pre uchádzačov o štúdium<?php //echo $translate[$_SESSION["lang"]]["welcome"];?></title>
    <link href="../css/menu.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/video.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../image/favicon.png" type="image/png" sizes="16x16">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
include '../menu.php';
?>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Pre uchádzačov o štúdium
                <?php //echo $translate[$_SESSION["lang"]]["welcome"];?>
            </h1>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Bakalárske štúdium</h4>
                </div>
                <div class="panel-body">
                    <p><strong>Informácie budú dodané neskôr.</strong><br>
                        Kompletný študijný plán pre akademický rok 2017-2018 (<a href="SP20172018b.pdf" target="_blank">SP20172018b.pdf</a>).<br>
                        Ďalšie informácie na <a href="http://www.mechatronika.cool">http://www.mechatronika.cool</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Inžinierske štúdium</h4>
                </div>
                <div class="panel-body">
                    <p><strong>Prečo študovať na našom ústave?</strong><br>
                        <ul>
                        <li>možnosť získať znalosti, ktoré sú implementovateľné v praxi</li>
                        <li>menšie skupiny študentov</li>
                        <li>možnosť dohodnúť si tému pre diplomovku s vybraným pedagógom na základe vlastných preferencií</li>
                        <li>možnosť riešiť diplomovú prácu a teda to, čo každého zaujíma, až 3 semestre</li>
                        <li>pre vynikajúcich študentov možnosť študovať dištančnou metódou</li>
                        <li>pre absolventov bakalárskeho štúdia na FEI STU odpustená prijímacia skúška</li>
                        <li>snaha o maximálnu informovanosť študentov prostredníctvom web stránky v dostatočnom predstihu</li>
                    </ul>
                    </p>
                    <p><strong>Nebudem mať problémy, keď som neštudoval mechatroniku aj na bakalárskom štúdiu?</strong><br>
                        <ul>
                        <li>Mechatronika predstavuje medziodborové štúdium, takže každý by sa tu mal nájsť. Hneď v prvom semestri inžinierskeho štúdia je pre študentov, ktorí predtým neštudovali mechatroniku pripravený vyrovnávací predmet z oblasti automatizácie.</li>
                    </ul>

                    <h3>Študijný program – 1. ročník</h3>
                    <p><strong>Zimný semester</strong><br>
                        <ul>
                        <li>CAE mechatronických systémov - tvorba virtuálnych dynamických modelov a ich simulácia</li>
                        <li>Metóda konečných prvkov - modelovanie a analýza mechatronických prvkov a systémov</li>
                        <li>Optimalizácia procesov v mechatronike – optimalizačné úlohy a metódy v inžinierskych aplikáciách</li>
                        <li>Vývojové programové prostredia pre mechatronické systémy - programovanie mikroprocesorov</li>
                        <li>Povinne voliteľný predmet</li>
                        </ul>
                    <p><strong>Letný semester</strong><br>
                    <ul>
                    <li>Diplomový projekt 1</li>
                    <li>Metódy číslicového riadenia – návrh regulačných obvodov pre modely mechatronických systémov</li>
                    <li>Multifyzikálne procesy v mechatronike - modelovanie tepelných, termoelastických, termoelektrických a piezoelektrických systémov</li>
                    <li>Pokročilé informačné technológie - klient-server aplikácie, riadenie mechatronických systémov v prostredí internetu, Internet vecí (IoT), Industry 4.0</li>
                    <li>Povinne voliteľný predmet</li>
                    </ul>
                    <p>Možné PVP pre záujemcov o elektroniku</p>
                    <p>Inteligentné mechatronické systémy - implementácia metód výpočtovej a umelej inteligencie pre mechatronické systémy
                        MEMS - inteligentné senzory a aktuátory - najmodernejšie senzory používané nielen v automobilovom priemysle (akcelerometre, gyroskopy, CCD senzory) a spracovanie signálov vnorenými mikropočítačmi</p>

                    <p>Možné PVP pre záujemcov o automobily</p>
                    <p>Transmisné systémy automobilov a elektromobilov - prevodové mechanizmy automobilov a elektromobilov
                        Pohonné systémy a zdroje v elektromobiloch - modelovanie a simulovanie činnosti trakčného a energetického systému elektromobilu</p>

                    <p>Možné PVP pre záujemcov o informatiku</p>
                    <p>Inteligentné mechatronické systémy - implementácia metód výpočtovej a umelej inteligencie pre mechatronické systémy
                    Vybrané kapitoly z automatického riadenia pre mechatroniku - vyrovnávací predmet z automatizácie
                        MEMS - inteligentné senzory a aktuátory - najmodernejšie senzory používané nielen v automobilovom priemysle (akcelerometre, gyroskopy, CCD senzory) a spracovanie signálov vnorenými mikropočítačmi</p>

                    <p>Kompletný študijný plán pre akademický rok 2017-2018 (<a href="SP20172018i.pdf" target="_blank">SP20172018i.pdf</a>).</p>
                    <p>Prijímacie skúšky na inžinierske štúdium			28.6.2017 o 10:00 v D124<br>
                    Prijímacia komisia		prof. Ing. Mikuláš Huba, PhD. (predseda)<br>
                    prof. Ing. Justín Murín, DrSc. (predseda)<br>
                    prof. Ing. Viktor Ferencey, PhD.<br>
                    prof. Ing. Štefan Kozák, PhD.<br>
                    doc. Ing. Katarína Žáková, PhD.<br>
                        Ďalšie informácie na <a href="http://www.mechatronika.cool">http://www.mechatronika.cool</a><br>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

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
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
