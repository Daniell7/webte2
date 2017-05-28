<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>
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
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: black;
    color: white;
}

</style>

       <?php
     include 'menu.php';
  
         
   
  $xml=simplexml_load_file("zamestnanci.xml") or die("Error: Cannot create object");
          
          ?>
                
  <form method="post" action="" >
  <p>Oddelenie:  
<select name="oddelenie" > 
  <option value="Všetky" id="f">Všetky</option>  
  <option value="Oddelenie elektroniky, mikropočítačov a PLC systémov" id="b">Oddelenie elektroniky, mikropočítačov a PLC systémov</option>
  <option value="Administratívno - hospodársky úsek" id="c">Administratívno - hospodársky úsek</option>
  <option value="Oddelenie E-mobility, automatizácie a pohonov" id="d">Oddelenie E-mobility, automatizácie a pohonov</option>
  <option value="Oddelenie informačných, komunikačných a riadiacich systémov" id="e">Oddelenie informačných, komunikačných a riadiacich systémov</option>
  <option value="Oddelenie aplikovanej mechaniky a mechatroniky" id="f">Oddelenie aplikovanej mechaniky a mechatroniky</option>
</select>
 <input type="submit" name="stlac" />
  </form>           
  
    <form method="post" action="">
  <p>Zaradenie:  
<select name="zaradenie"> 
  <option value="Všetky" id="g">Všetky</option> 
   <option value="Doktorand" id="h">Doktorand</option>
  <option value="odborný asistent CSc." id="h">odborný asistent CSc.</option>
  <option value="odborná asistentka CSc." id="o">odborná asistentka CSc.</option>
  <option value="technická pracovníčka" id="i">technická pracovníčka</option>
  <option value="docent CSc." id="j">docent CSc.</option>
   <option value="docentka CSc." id="j">docentka CSc.</option>
  <option value="prevádzkový zámočník" id="k">prevádzkový zámočník</option>
  <option value="vedecký pracovník KS IIa. CSc." id="l">vedecký pracovník KS IIa. CSc.</option>
  <option value="profesor CSc." id="m">profesor CSc.</option>
  <option value="výskumný pracovník s VŠ vzdelaním" id="n">výskumný pracovník s VŠ vzdelaním</option>
  <option value="odborná administratívna pracovníčka" id="p">odborná administratívna pracovníčka</option>
  <option value="odborný asistent bez vedeckej hodnosti" id="q">odborný asistent bez vedeckej hodnosti</option>
</select>
 <input type="submit" name="stlac" />
  </form>
  
  <form action="" method="post">
<input type="submit" name="but1" value="Zoradovanie podla oddelenia">
</form>
<form action="" method="post">
<input type="submit" name="but2" value="Zoradovanie podla zaradenia">
</form>
        
          
          
          <table>
           <tr>
    <th>Meno</th>
    <th>Miestnosť</th>
    <th>Telefon</th>
    <th>Oddelenie</th>
    <th>Zaradenie</th>
    <th>Funkcia</th>
  </tr>
          <?php
             if(isset($_POST['oddelenie'])){ 
 $x = $_POST['oddelenie'];
     //echo $x;
  }
   if(isset($_POST['zaradenie'])){ 
 $y = $_POST['zaradenie'];
     //echo $y;
  }
   
          //$testmeno=htmlspecialchars($_POST['something']);
          //echo $testmeno;
foreach($xml->children() as $zoznam) { 
          $pom=$zoznam->meno; 
          
          //if($testmeno==$pom){
          //echo "<tr><td>".$zoznam->meno."</td><td>".$zoznam->miestnost."</td><td>".$zoznam->telefon."</td><td>".$zoznam->oddelenie."</td><td>".$zoznam->zaradenie."</td><td>".$zoznam->funkcia."</td></tr>";
          //}
          if($x==$zoznam->oddelenie){
                ?>
                <tr>
                <td>
                <a href="http://147.175.98.194/sem_projekt/webte2/zamestnanci/<?php echo $zoznam->meno; ?>.php"><?php echo $zoznam->meno; ?></a>
          </td>  
          <?php
          echo "<td>".$zoznam->miestnost."</td><td>".$zoznam->telefon."</td><td>".$zoznam->oddelenie."</td><td>".$zoznam->zaradenie."</td><td>".$zoznam->funkcia."</td></tr>";
          
          }
          if($y==$zoznam->zaradenie){
          ?>
                <tr>
                <td>
                <a href="http://147.175.98.194/sem_projekt/webte2/zamestnanci/<?php echo $zoznam->meno; ?>.php"><?php echo $zoznam->meno; ?></a>
          </td>  
          <?php
          echo "<td>".$zoznam->miestnost."</td><td>".$zoznam->telefon."</td><td>".$zoznam->oddelenie."</td><td>".$zoznam->zaradenie."</td><td>".$zoznam->funkcia."</td></tr>";
          
          }
          if($x=="Všetky"||$y=="Všetky"||$testmeno=="Všetky"){
          ?>
                <tr>
                <td>
                <a href="http://147.175.98.194/sem_projekt/webte2/zamestnanci/<?php echo $zoznam->meno; ?>.php"><?php echo $zoznam->meno; ?></a>
          </td>  
          <?php
          echo "<td>".$zoznam->miestnost."</td><td>".$zoznam->telefon."</td><td>".$zoznam->oddelenie."</td><td>".$zoznam->zaradenie."</td><td>".$zoznam->funkcia."</td></tr>";
          
          }

          
}   
    //<button id="myBtn">$zoznam->meno</button>

 
    


$pole[0]="Oddelenie elektroniky, mikropočítačov a PLC systémov";
$pole[1]="Administratívno - hospodársky úsek";
$pole[2]="Oddelenie E-mobility, automatizácie a pohonov";
$pole[3]="Oddelenie informačných, komunikačných a riadiacich systémov";
$pole[4]="Oddelenie aplikovanej mechaniky a mechatroniky";
 if (isset($_POST['but1'])) {
for($i=0;$i<5;$i++){
foreach($xml->children() as $zoznam) {  
            if($pole[$i]==$zoznam->oddelenie){
          ?>
                <tr>
                <td>
                <a href="http://147.175.98.194/sem_projekt/webte2/zamestnanci/<?php echo $zoznam->meno; ?>.php"><?php echo $zoznam->meno; ?></a>
          </td>  
          <?php
          echo "<td>".$zoznam->miestnost."</td><td>".$zoznam->telefon."</td><td>".$zoznam->oddelenie."</td><td>".$zoznam->zaradenie."</td><td>".$zoznam->funkcia."</td></tr>";
          
          }

}

}
}  

          

$pole1[0]="odborný asistent CSc."; 
$pole1[1]="odborná asistentka CSc."; 
$pole1[2]="technická pracovníčka"; 
$pole1[3]="docent CSc."; 
$pole1[4]="docentka CSc."; 
$pole1[5]="prevádzkový zámočník"; 
$pole1[6]="vedecký pracovník KS IIa. CSc."; 
$pole1[7]="profesor CSc."; 
$pole1[8]="profesor DrSc."; 
$pole1[9]="výskumný pracovník s VŠ vzdelaním"; 
$pole1[10]="odborná administratívna pracovníčka"; 
$pole1[11]="odborný asistent bez vedeckej hodnosti";
$pole1[12]="Doktorand";  
 if (isset($_POST['but2'])) {
for($j=0;$j<13;$j++){
foreach($xml->children() as $zoznam) {  
            if($pole1[$j]==$zoznam->zaradenie){
         ?>
                <tr>
                <td>
                <a href="http://147.175.98.194/sem_projekt/webte2/zamestnanci/<?php echo $zoznam->meno; ?>.php"><?php echo $zoznam->meno; ?></a>
          </td>  
          <?php
          echo "<td>".$zoznam->miestnost."</td><td>".$zoznam->telefon."</td><td>".$zoznam->oddelenie."</td><td>".$zoznam->zaradenie."</td><td>".$zoznam->funkcia."</td></tr>";
          
          }

}

}
}   
?>
          </table>
          <?php


 ?>
   </body>

</html>