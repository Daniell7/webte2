<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>
     <link href="../css/menu.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

     
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   

</head>

<body>
       <?php
      //error_reporting(E_ALL);
//ini_set('display_errors', 1);
     include '../menu.php';
  
  
  
     $xml=simplexml_load_file("../zamestnanci.xml") or die("Error: Cannot create object");
     $clovek="Ing. Erich Stark";
     foreach($xml->children() as $zoznam) {  
            if($clovek==$zoznam->meno){
            
                ?>
                 <div class="container">
                 
                 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $clovek;   ?>
                    
                </h1>
               
            </div>
        </div>
              <div class="row">
            <div class="col-md-6">
                 
                <img class="img-responsive" src="../zamfoto/stark.jpg" alt="">
            </div>
            <div class="col-md-6">
            <?php echo "Miestnosť:".$zoznam->miestnost."<br>";   ?>
            <?php echo "Telefon:".$zoznam->telefon."<br>";   ?>
            <?php echo "Oddelenie:".$zoznam->oddelenie."<br>";   ?> 
            <?php  echo "Zaradenie:".$zoznam->zaradenie;   ?>
            
               
                 </div>
        </div>
                 <?php
          }

}
          
          ?>     

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Práce</h2>
            </div>
            
            <table>
            <tr>
    <th>Publikacie</th>
    <th>Druh výsledku</th>
    <th>Rok</th>
  </tr>
                   <?php
                        
                         $i=0;
                         
                  
                 $data = array(
			'lang' => 'sk',
			'rok' => '2016',
			'id' =>  '6041',
			'zalozka' => '5' 
		);   
 $ch=curl_init("http://is.stuba.sk/lide/clovek.pl");

 curl_setopt($ch, CURLOPT_POST,1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 $result = curl_exec($ch);
 curl_close($ch);
$doc = new DOMDocument();
 libxml_use_internal_errors(true);
 $doc->loadHTML($result);
 $xPath = new DOMXPath($doc);
 $tableRows = $xPath->query('//html/body/div/div/div/table[last()]/tbody/tr');
         while (!empty($tableRows[$i]->childNodes[0]->textContent))
 { $i++; };
 if($i!=1) {  
  $b=0;
  for ($b=0; $b<$i; $b++){ 
  echo "<tr><td>".$tableRows[$b]->childNodes[1]->textContent."</td><td>".$tableRows[$b]->childNodes[2]->textContent."</td><td>".$tableRows[$b]->childNodes[3]->textContent."</td></tr>";   
  
  } 
 };
  

//}   
   
   
            ?>
            </table>  
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

</body>

</html>
