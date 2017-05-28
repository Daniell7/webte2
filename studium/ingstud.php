<?php


$ch = curl_init('http://is.stuba.sk/pracoviste/prehled_temat.pl');

if(isset($_POST['institute'])){
    $kod = $_POST['institute'];
}else{
    $kod = '642';
}
if(isset($_POST['project'])){
    $typ_projektu = $_POST['project'];
}else{
    $typ_projektu = '0';
}
if(isset($_POST['program'])){
    $stud_program = $_POST['program'];
}else{
    $stud_program = '';
}
if(isset($_POST['director'])){
    $veduci_prace = $_POST['director'];
}else{
    $veduci_prace = '';
}
function pokus($test){
    echo $test." ";
}
// zostavenie dat pre POST dopyt
$data = array(
    'filtr_typtemata2' => '2',
    'filtr_programtemata2'=> $stud_program,
    'filtr_vedtemata2' => $veduci_prace,
    'pracoviste' => '642',
    'lang' => 'sk',
    'omezit_temata2' => 'Obmediť'
);

// nastavenie curl-u pre pouzitie POST dopytu
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// nastavenie curl-u pre ulozenie dat z odpovede do navratovej hodnoty z volania curl_exec
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// vykonanie dopytu
$result = curl_exec($ch);
curl_close($ch);

// parsovanie odpovede pre ziskanie pozadovanych dat
$doc = new DOMDocument();
libxml_use_internal_errors(true);
$doc->loadHTML($result);
$xPath = new DOMXPath($doc);
$tableRows = $xPath->query('//html/body/div/div/div/form/table[last()]/tbody/tr');
$typeWork = $xPath->query('//html/body/div/div/div/form/table/tbody/tr/td/small/select');


$annotationURL = 'http://is.stuba.sk'.$tableRows[0]->childNodes[7]->firstChild->firstChild->getAttribute('href');


// vykonanie sekundarneho curl dopytu, a parsovanie odpovede pre ziskanie anotacie
$ch = curl_init($annotationURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);

$doc = new DOMDocument();
libxml_use_internal_errors(true);
$doc->loadHTML($result);
$xPath = new DOMXPath($doc);
$annotation = $xPath->query('//html/body/div/div/div/table[1]/tbody/tr[last()]/td[last()]')[0]->textContent;

?>
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

    <title>Inžinierske štúdium<?php //echo $translate[$_SESSION["lang"]]["welcome"];?></title>
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
                Inžinierske štúdium
                <?php //echo $translate[$_SESSION["lang"]]["welcome"];?>
            </h1>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Všeobecné informácie</h4>
                </div>
                <div class="panel-body">
                    <p><strong>Harmonogram inžinierskeho štúdia</strong><br>

                    <p><strong>Zimný semester</strong></p>
                    <p>Začiatok výučby v semestri			19. 09. 2016<br>
                        Prázdniny	<br>				31. 10. 2016<br>
                        18. 11. 2016<br>
                        23. 12. 2016 – 01. 01. 2017<br>
                        Začiatok skúškového obdobia			02. 01. 2017<br>
                        Ukončenie skúškového obdobia			12. 02. 2017</p>
                    <p> <strong>Letný semester</strong></p>
                    <p>Začiatok výučby v semestri			13. 02. 2017<br>
                        Prázdniny					14. 04. 2017 – 18. 04. 2017<br>
                        Začiatok skúškového obdobia			22. 05. 2017<br>
                        Ukončenie skúškového obdobia			02. 07. 2017</p>
                    <p><strong>Záver inžinierskeho štúdia</strong></p>
                    <p>Zadanie diplomovej práce 			13. 02. 2017<br>
                        Odovzdanie diplomovej práce 			19. 05. 2017<br>
                        Štátne skúšky inžinierskeho štúdia 		13. 06. 2017 – 16. 06. 2017<br>
                        Termín promócií 				10. 07. 2017 – 14. 07. 2017<br><br>
                        <a href="SP20162017i.pdf" target="_blank">Študijný plán 2016-2017</a><br>
                        <a href="studijny_poriadok.pdf" target="_blank">Študijný poriadok</a><br>
                        <a href="klasifikacna_stupnica.pdf" target="_blank">Klasifikačná stupnica</a><br>

                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Diplomové práce - Pokyny

                    </h4>
                </div>
                <div class="panel-body">
                    <p><strong>Ukončovanie predmetov DP1, DP2, DP3, DZP</strong></p>
                        <p><strong>Diplomový projekt 1</strong><br>
                        Zodpovedný: 			prof. Ing. Mikuláš Huba, PhD.<br>
                        Hodnotenie predmetu: 		klasifikovaný zápočet<br>
                        Štandardný čas plnenia: 	1. roč. inžinierskeho štúdia, letný semester<br>
                        Pre získanie klasifikovaného zápočtu musí študent odovzdať technickú dokumentáciu svojmu vedúcemu práce v nim špecifikovanom rozsahu najneskôr do 20.júna daného roku. Prácu na projekte hodnotí vedúci práce.
                        </p>
                    <p><strong>Diplomový projekt 2</strong><br>
                        Zodpovedný: 			prof. Ing. Mikuláš Huba, PhD.<br>
                        Hodnotenie predmetu: 		klasifikovaný zápočet<br>
                        Štandardný čas plnenia: 	2. roč. inžinierskeho štúdia, zimný semester<br>
                        Pre získanie klasifikovaného zápočtu musí študent odovzdať technickú dokumentáciu svojmu vedúcemu práce v nim špecifikovanom rozsahu najneskôr do 20.januára daného roku a obhájiť svoje priebežné výsledky pred minimálne 2-člennou komisiou (jej členom by mal byť vedúci práce). Prácu na projekte hodnotí komisia pri obhajobe, ktorá zoberie do úvahy hodnotenie vedúceho práce.
                    </p>
                    <p><strong>Diplomový projekt 3</strong><br>
                        Zodpovedný: 			prof. Ing. Mikuláš Huba, PhD.<br>
                        Hodnotenie predmetu: 		klasifikovaný zápočet<br>
                        Štandardný čas plnenia: 	2. roč. inžinierskeho štúdia, letný semester<br>
                        Pre získanie klasifikovaného zápočtu musí študent do dátumu špecifikovanom v harmonograme štúdia FEI STU odovzdať diplomovú prácu:<br>
                        1.	v elektronickej forme do AIS<br>
                        2.	v tlačenej forme v počte 2 kusy Ing. Sedlárovi? (A803)<br>
                        alebo odovzdať technickú dokumentáciu svojmu vedúcemu práce v nim špecifikovanom rozsahu najneskôr do 20.júna daného roku.<br>
                        Prácu na projekte hodnotí vedúci práce.
                    </p>
                    <p><strong>Diplomová záverečná práca</strong><br>
                        Zodpovedný: 			prof. Ing. Mikuláš Huba, PhD.<br>
                        Hodnotenie predmetu: 		skúška<br>
                        Štandardný čas plnenia: 	2. roč. inžinierskeho štúdia, letný semester<br>
                        Pre získanie skúšky musí študent obhájiť tému svojej diplomovej práce pred štátnicovou komisiou, ktorá zároveň udeľuje známku za obhajobu.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h4 class="page-body">
                Voľné témy
            </h4>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <?php
                $tab = "myTable";
                echo "<table class='table table-bordered'>";
                echo "<tr><th>Typ práce</th><th>Názov</td><th>Vedúci práce</th><th>Študijný program</th><th>Obsadenosť</th></tr>";
                for($i=0;$i<$tableRows->length;$i++){
                    if($tableRows[$i]->childNodes[8]->textContent[0]==0){
                        echo "<tr><td>".$tableRows[$i]->childNodes[1]->textContent."</td>";
                        echo "<td>".$tableRows[$i]->childNodes[2]->textContent."</td>";
                        echo "<td>".$tableRows[$i]->childNodes[3]->textContent."</td>";
                        echo "<td>".$tableRows[$i]->childNodes[5]->textContent."</td>";
                        echo "<td>".$tableRows[$i]->childNodes[8]->textContent."</td>";
                        //echo "<td>".$annotation."</td></tr>";
                    }
                }
                echo "</table>";

                ?>
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
    $(document).ready(function () {
        $('.myTable tr:nth-child(odd)').addClass('alt');
    });
</script>

</body>

</html>
