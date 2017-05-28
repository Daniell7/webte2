<!DOCTYPE html>
<html lang="sk">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $translate[$_SESSION["lang"]]["biomech"]; ?></title>
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
   <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $translate[$_SESSION["lang"]]["projects"]; ?>
            </h1>
        </div>
        <div class="col-lg-12 table-responsive">
            <table class="table table-bordered">
  <tr>
    <th >ID</th>
    <td >Typ projektu</td>
    <td >Číslo</td>
    <td >Názov</td>
    <td >Title</td>
    <td >Trvanie</td>
    <td >Konzultant</td>
    <td >Partneri</td>
    <td >Webstránka</td>
    <td >Vnútorný kód</td>
    <td >Anotácia SK</td>
    <td >Anotácia EN</td>
  </tr>
  <tr>
    <td >1</td>
    <td >VEGA</td>
    <td >1/0937/14 </td>
    <td >Pokrocilé metódy nelineárneho modelovania a riadenia mechatronických systémov </td>
	<td >Advanced methods for nonlinear modeling and control of mechatronic systems </td>
	<td >3 roky</td>
    <td >prof. Ing. Mikuláš Huba, PhD. 
</td>
	<td ></td>
	<td ></td>
    <td >1425
</td>
	<td >Projekt sa zameriava na rozvoj metód nelineárneho riadenia a ich aplikácií. Zahrňuje metódy algebrického a diferenciálneho prístupu k návrhu nelineárnych systémov, riadenie časovo oneskorených (time delayed) systémov a systémov s obmedzeniami uvažovaných ako súčasť hybridných, autonómnych a inteligentných systémov, metódy simulácie, modelovania a automatizovaného návrhu s využitím podporných numerických a symbolických metód a programov. Venuje sa formulácii riešených problémov v rámci vnorených (embedded) systémov a PLC, spracovaniu signálov, zohľadneniu aspektov riadenia cez Internet, mobilné a rádiové siete, identifikácii a kompenzácii nelinearít, integrácii jednotlivých prístupov pri implementácii a fyzickej realizácii konkrétnych algoritmov a štruktúr riadenia. Pôjde najmä o riadenie mechatronických, robotických a ďalších systémov s dominantnými nelinearitami.
</td>
	<td >The project focuses on development of nonlinear control methods and their applications. It includes algebraic and differential approach to nonlinear control, control of time-delayed and constrained systems considered as a part of hybrid autonomous intelligent systems, simulations modeling and automatized design based on numeric and symbolic computer aided methods. It is dealing with formulation of solved problems within the embedded systems and PLCs, with signal processing, control via Internet, mobile and radio networks, with identification and compensation of nonlinearities, integration of particular approaches in implementing and physically accomplishing particular algorithms and structures. Thereby, one considers especially mechatronic and robotic systems and other systems with dominating nonlinear behavior.
</td>
  </tr>
  <tr>
    <td >2</td>
    <td >VEGA</td>
    <td >1/0228/14</td>
    <td >Modelovanie termohydraulických a napätostných pomerov vo vybraných komponentoch tlakovodných jadrových reaktorov </td>
	<td >Modelling of thermohydraulic and stress conditions in selected components of NPP with pressurized water reactor </td>
	<td >2 roky</td>
    <td >doc. Ing. Vladimír Kutiš, PhD. 
</td>
	<td ></td>
	<td ></td>
    <td >1435
</td>
	<td >Cieľom predkladaného projektu je tvorba matematických modelov vybraných komponentov jadrových zariadení tlakovodného jadrového reaktora ako sú palivová kazeta, aktívna zóna ako aj celý jadrový reaktor. Tieto komponenty budú analyzované z pohľadu termohydrauliky ako aj z pohľadu mechanického (napätostného) namáhania. Takto získané numerické výsledky budú konfrontované s dostupnými experimentálnymi údajmi daných zariadení, pričom cieľom má byť zvyšovanie bezpečnosti prevádzky týchto zariadení. Pri tvorbe jednotlivých matematických modelov budú použité moderné numerické metódy, ako sú Computational Fluid Dynamics (CFD) a Metóda Konečných Prvkov (MKP), ktoré sú implementované v programoch ANSYS CFX a ANSYS Multiphysics. Súčasťou predkladaného projektu bude realizácia prepojenia matematických modelov termohydrauliky a mechanického namáhania, ktoré bude realizované tak, aby jednotlivé fyzikálne domény boli priamo previazané. Výstupom projektu okrem matematických modelov budú aj vedecké a odborné články a príspevky.
</td>
	<td >The aim of this project is to create mathematical models of selected components of nuclear power plants like fuel assembly, the active zone as well as a nuclear reactor itself considering pressurized water reactor. These components will be analyzed in terms of thermo-hydraulics and mechanical point of view (stress loading). Obtained numerical results will be confronted with available experimental data to increase operational safety of these devices. In the process of developing the mathematical models modern numerical methods such as Computational Fluid Dynamics (CFD) and Finite Element Method (FEM) will be used. These methods are implemented in programs ANSYS CFX and ANSYS Multiphysics. The proposed project will interconnect the thermo-hydraulic and mechanical mathematical models, which will be implemented so that the individual physical domains were directly connected. The outcome of the project will be the mathematical models and also scientific and technical papers and conference contributions.
</td>
  </tr>
  <tr>
    <td >3</td>
    <td >VEGA</td>
    <td >1/0453/15 </td>
    <td >Výskum stiesneného krútenia uzatvorených prierezov </td>
	<td >Research of nonuniform torsion of cross-sections </td>
	<td >2 roky</td>
    <td >prof. Ing. Justín Murín, DrSc. 
</td>
	<td ></td>
	<td ></td>
    <td >1479
</td>
	<td >"Podstatou projektu je skúmanie účinkov stiesneného krútenia v nosníkoch s uzatvoreným tenkostenným prierezom numerickými metódami ako aj experimentálnym meraním na fyzikálnych modeloch. Bude vytvorený nový 3D nosníkový konečný prvok so zahrnutím stiesneného krútenia uzatvorených prierezov, kde sa uplatní deformačný účinok sekundárneho krútiaceho momentu. Matica tuhosti a hmotnosti bude zostavená pre homogénny materiál ako aj pre kompozitné nosníky s pozdĺžnou premenlivosťou materiálových vlastností.
Odvodené vzťahy a rovnice budú implementované do počítačového programu pre elastostatickú a modálnu analýzu s uvažovaním stiesneného krútenia. Bude navrhnuté a vyrobené meracie zariadenie, ktorým sa budú verifikovať výsledky teoretických výpočtov novým konečným prvkom. Predpokladá sa, že výsledky riešenia projektu prispejú ku zmene tvrdenia normy EC 3, podľa ktorej vplyv stiesneného krútenia možno pri nosníkoch uzatvoreného prierezu zanedbať. Výsledky nášho výskumu majú za cieľ zvýšiť bezpečnosť projektovania mechanických sústav."
</td>
	<td >The project aim is to examine the effects of non-uniform torsion in thin-walled beams with closed cross-section by numerical methods and experimental measurements on physical models. A 3D beam finite element will be created including the non-uniform torsion with the secondary torsion moment deformation effect. The stiffness and mass matrix will be prepared for a homogeneous material as well as for composite beams with longitudinal variation of material properties. Derived relations and equations will be implemented in the computer programs for elastic-static and modal analyses. Measurement equipment will be designed, by which the results of theoretical calculations by the new finite elements will be verified. It is expected that the results of the project will contribute to review the arguments of the Eurocode 3, according to which the effect of non-uniform torsion can be neglected in the closed cross-section beams. The results of the project are intended to enhance the safety of the beam structures design.
</td>
  </tr>
  <tr>
    <td >4</td>
    <td >KEGA</td>
    <td >035STU-4/2014 </td>
    <td >Návrh virtuálneho laboratória pre implementáciu pokrocilých metodík výucby v novom študijnom programe Elektromobilita </td>
	<td >Development of virtual laboratory for implementation of advanced methods of teaching in the new study program Electromobility </td>
	<td >2 roky</td>
    <td >prof. Ing. Viktor Ferencey, PhD. 
</td>
	<td ></td>
	<td ></td>
    <td >1709
</td>
	<td >"Projekt je zameraný na vybudovanie moderného špecializovaného virtuálneho laboratória pre pripravovaný študijný program Elektromobilita. V projekte sú navrhnuté pokročilé metódy výučby, ktoré integrujú tvorivú implementáciu teoretických poznatkov priamo do virtuálneho modelovania a simulovania mechatronických systémov v inteligentných vozidlách s elektrickým pohonom, t.j. elektromobiloch.
Pre podporu špecializovaného vzdelávania a novú metodológiu v študijnom programe Elektromobilita bude v projekte spracovaná nová moderná študijná literatúra a vybudované Špecializované virtuálne laboratórium s inovatívnym vybavením pre teoretickú i praktickú výučbu predmetov v tomto študijnom programe. Všetky predmety programu Elektromobilita sú zamerané na virtuálne prototypovanie smart mechatronických systémov používaných v elektromobiloch s náväznosťou na nové systémy pohonu dopravných prostriedkov s využitím virtuálneho prototypovania.
Súčasťou projektu bude spracovanie študijných materiálov, vedeckých monografií, tvorba inovatívnej web stránky, publikovanie v odborných časopisoch a účasť na vedeckých konferenciách. Špecializované virtuálne laboratórium bude vybavené mechatronickými učebnými modulmi pre výučbu a štúdium sofistikovaných technológií."
</td>
	<td >The project aim it to build a modern specialized virtual laboratory for prepared study program Electromobility. In this project, advanced teaching methods are proposed that integrate theoretical knowledge into practical application directly into mechatronic systems in vehicles with electric drive (electric vehicles). To promote specialized training and a new methodology in the study program Electromobility, the project will support processing of a new modern study literature and creating a dedicated virtual laboratory with innovative facilities for theoretical and practical training courses in this program of study. These courses aim at smart mechatronic systems used in electromobility systems with links to the new drive systems of vehicles using virtual prototyping. The project includes new study materials processing, writing scientific monographs, creating innovative websites, publications in peer-reviewed journals and participation in scientific conferences. Dedicated virtual laboratory will be equipped with educational mechatronic modules for teaching and learning sophisticated technology.
</td>
  </tr>
  <tr>
    <td >5</td>
    <td >KEGA</td>
    <td >032STU-4/2013 </td>
    <td >Online laboratórium pre výucbu predmetov automatického riadenia </td>
	<td >Online laboratory for teaching automation control subjects </td>
	<td >2 roky</td>
    <td >doc. Ing. Katarína Žáková, PhD. 
</td>
	<td ></td>
	<td ></td>
    <td >1719
</td>
	<td >"Projekt sa zameriava na tvorbu interaktívnych znovupoužiteľných vzdelávacích objektov pre zvolené segmenty teórie automatického riadenia, na budovanie širšej škály experimentov ilustrujúcich aplikáciu študovaných teoretických prístupov na riešenie praktických problémov, ktoré umožňujú a podporujú nadobúdanie vedomostí, zručností, návykov a postojov v kvázi-autentickom prostredí.
Projekt má za cieľ podporovať využitie nielen proprietárnych, ale aj open technológií, ktoré prinášajú viaceré výhody v oblasti šírenia výsledkov a nesporne aj po finančnej stránke. Snahou je uľahčiť prístup k laboratórnym experimentom v rámci rôznych foriem vzdelávania (denných, dištančných, resp. elektronických foriem)."
</td>
	<td >"The project is focussed on development of interactive reusable learning objects for chosen segments of automatic control, on building broader spectrum of experiments illustrating application of studied
theoretical approaches onto practical problems enabling and supporting acquisition of knowledge, skills, habits and attitudes in an quasi-authentic environment.
The project is going to support the use of not only proprietary but also open technologies that bring various advantages in the area of results dissemination and from the financial point of view as well. Our aim is to facilitate approach to laboratory experiments for students in daily or distance form of education."
</td>
  </tr>
  <tr>
    <td >6</td>
    <td >KEGA</td>
    <td >030STU-4/2015 </td>
    <td >Multimediálna podpora vzdelávania v mechatronike </td>
	<td >Multimedial education in mechatronics </td>
	<td >2 roky</td>
    <td >doc. Ing. Danica Rosinová, PhD. 
</td>
	<td ></td>
	<td >http://uamt.fei.stuba.sk/KEGA_MM/
</td>
    <td >1723
</td>
	<td >Svetovým trendom v oblasti modernej a bezbariérovej výučby sú jej interaktívne formy na báze internetu, videa, audiovizuálnych pomôcok a vzdialených laboratórií (on-line vzdelávanie), ktoré sa uplatňujú nielen v dištančnom vzdelávaní, ale aj v prezenčnej forme vzdelávanie s podporou nových technológií (technology augmented classroom teaching). Popri slide-show prezentáciách a edukačných miniaplikáciách (dynamické web stránky, flash animácie, Java Applets a pod.) preferujú svetové výskumné univerzity vývoj a tvorbu edukačných videí, ktorých cieľovou skupinou sú poslucháči konkrétneho predmetu (kurzu). Edukačné videá sú voľne dostupné a umožňujú študentom sledovať výklad danej problematiky kdekoľvek a kedykoľvek. Návrh a realizácia zrozumiteľného a zaujímavo podaného edukačného videa z technickej oblasti je komplexná úloha, ktorá si vyžaduje synergiu odborných, pedagogických a umeleckých kvalít jeho tvorcov. Projekt je zameraný na multimediálnu podporu vzdelávania v oblasti mechatroniky, s dôrazom na poznatky z aplikovanej informatiky, automatizácie a príbuzných vedných disciplín. Cieľom projektu je vybudovanie multimediálneho laboratória na tvorbu kvalitných edukačných videomateriálov pre prezenčnú aj dištančnú formu univerzitného vzdelávania v oblasti mechatroniky a vytvorenie a otestovanie viacerých modulov takýchto materiálov. Výstupy projektu budú ďalej využiteľné pre účely vzdelávania odborníkov z praxe vrámci celoživotného vzdelávania, a tiež popularizácie mechatroniky a automatizácie u širokej verejnosti a žiakov stredných škôl - potenciálnych študentov vysokých škôl technického zamerania.
</td>
	<td >"Presently, interactive education forms based on exploitation of Internet, video, audiovisual aids and remote laboratories (on-line education) are world trends in modern and barrier-free education;
it is applied not only in distance education but in the attendance teaching as technology augmented classroom teaching. Along with slide-shows and educational miniapplications (dynamic websites,
flash animations, Java Applets etc.) research universities usually prefer to develop their own education videos targeted to the audience in a single course. Education videos are freely available and enable the students to follow the explanatory discourse on the subject topic anytime and anywhere. Design and realization of a comprehensible and interesting educational video on a technological field is a quite complex task requiring synergy of technical, educational and artistic qualities of its creators. The project deals with the multimedia support of education in mechatronics engineering, with the focus on applied informatics, automation and related fields. The objective of the project is to build a multimedia laboratory for creating high-quality educational videomaterial for both distance and attendance education in mechatronics engineering. Project outcomes will be further employed in life-long education of practitioners, and for popularization of mechatronics and automation among the public and potential university students of technology."
</td>
  </tr>
  <tr>
    <td >7</td>
    <td >KEGA</td>
    <td >011STU-4/2015 </td>
    <td >Elektronické pedagogicko-experimentálne laboratóriá mechatroniky </td>
	<td >Electronic educational-experimental laboratories of Mechatronics </td>
	<td >2 roky</td>
    <td >doc. Ing. Peter Drahoš, PhD. 
</td>
	<td ></td>
	<td >http://uamt.fei.stuba.sk/kega/
</td>
    <td >1724
</td>
	<td >"Projekt sa zaoberá vytvorením modernej vedomostnej a experimentálnej základne pre výučbu mechatroniky s dôrazom na jej elektronické súčasti. Vzhľadom na to, že mechatronika integruje viaceré oblasti poznania a ich spojením vytvára synergický efekt, budú v rámci projektu budú vypracované nové metódy a formy vo výučbe, ktoré študentom umožnia získať nové poznatky s praktickou skúsenosťou s využívaním moderných elektronických prvkov a systémov, ktoré tvoria neoddeliteľnú súčasť komplexných mechatronických systémov v oblasti výrobkov spotrebnej elektroniky, energetiky, automobilovej techniky a v zdravotníctve.
Podnetnou výzvou pre podanie projektu bol vznik nových študijných programoch""""Automobilová mechatronika"""" (Bc. program) a """"Aplikovaná mechatronika a elektromobilita"""" (Ing. program). Pre tieto študijné programy budú vytvorené elektronické učebné texty pre 7 predmetov.
Za účelom ďalšieho zvyšovania kvality výučby a výskumu sa plánuje v rámci v rámci riešenia projektu vytvoriť 5 nových experimentálnych pracovísk podľa najnovších trendov v elektronike, snímacej technike a riadiacich systémoch, ktoré budú mať viacúčelové využitie v priamej pedagogike, v individuálnych a tímových študentských projektoch ako aj pri výskumnej a vývojovej činnosti ústavu.
Cieľom projektu je zvýšiť odborné kompetencie študentov, učiteľov a výskumných pracovníkov a všetkých zúčastnených v týchto oblastiach: moderné senzory a MEMS, aktuátory na báze smart materiálov, elektrické trakčné pohony, mikroradiče a DSP pre vstavané riadiace systémy a spracovanie signálov, návrh riadiacich algoritmov a ich programovanie, elektronika a integrované obvody (ASICs) pre mechatroniku. Ďalším dôležitým sub-cieľom riešenej problematiky je získať široké kompetencie v komunikačných systémoch pre rôzne aplikačné oblasti mechatronických systémov najmä v automobilovom priemysle.
Navrhovaný projekt bude podporovaný prostredníctvom moderných audiovizuálnych systémov, prostredníctvom web stránky a videí s multimediálnym spracovaním."
</td>
	<td >The project deals with the creation of modern knowledge and experimental basis for education in Mechatronics Engineering with the emphasis on electronic components. Due to the fact that mechatronics integrates several fields of knowledge and their junction yields a synergy effect, new methods and forms of eduation will be elaborated within the project allowing students to acquire new knowledge combined with practical experience in using modern electronic components and systems; such systems are integral parts of complex pervasive mechatronic systems (in consumer electronics, energy and automotive industries, healthcare). Inspiration for elaboration of the proposed project was launching of new study programs ""Automotive Mechatronics"" (Bachelor degree), and ""Applied Mechatronics and Electromobility"" (Master degree). For these study programs electronic textbooks for 7 subjects will be created. To further increase quality of education and research, 5 new experimental workplaces are planned to be created within the project to according to the latest development trends electronics, sensing technology and control systems having multi-purpose exploitation in direct teaching, individual and team projects as well as in research and development activities of the Institute. The objective of the project is to increase professional competences of students, teachers and researchers, and all involved in the areas: advanced sensors and MEMS, smart materials based actuators, electric traction motors, microcontrollers and digital signal processors (DSP´s) for embedded control systems and signal processing, design of control algorithms and their programming, electronics and integrated circuits (ASICs) for mechatronics. Another important sub-objective is to acquire wide competences in communication systems for various application areas of mechatronic systems, in particular in automotive industry. Modern audiovisual systems, web pages and multimedia processed videos will be widely used to support project results.
</td>
  </tr>
  <tr>
    <td >8</td>
    <td >APVV</td>
    <td >APVV-0246-12 </td>
    <td >Pokročilé metódy modelovania a simulácie SMART mechatronických systémov </td>
	<td >Advanced Methods and Simulations of SMART Mechatronic Systems </td>
	<td >3 roky</td>
    <td >prof. Ing. Justín Murín, DrSc. 
</td>
	<td ></td>
	<td ></td>
    <td >AK14
</td>
	<td >V prvej fáze riešenia projektu bude kladený dôraz na materiálové, technické a prístrojové zabezpečenie experimentálnych častí, ktoré budú v projekte riešené. V tejto fáze takisto budú odvodené MKP rovnice pre 3D-FGM nosníky ako aj multifyzikálne modely pre SMA. Súčasťou prvej fázy riešenia projektu bude taktiež začatá príprava fyzikálnych experimentov za účelom verifikácie matematických modelov FGM a SMA systémov. V nasledovnom období riešenia projektu bude vykonaná verifikácia matematických modelov na vybraných experimentálnych vzorkách, ktoré boli dôsledne experimentálne analyzované z hľadiska materiálového zloženia. Výsledky experimentálnych meraní na SMA aktuátore budú využité v nasledovnom období riešenia projektu pri návrhu a realizácii alternatívneho spôsobu uchytenia SMA aktuátora. Bude nasledovať vytvorenie nelineárneho modelu aktuátora SMA a návrhu nových metód syntézy zameraných na riadenie polohy a potlačenie dominantných porúch. V tomto období budú súčasne prebiehať výskumné práce na teoretickom odvodení MKP rovníc pre FGM škrupinu a jej spojenia s 3D-FGM nosníkovým prvkom do kombinovaného nosníkovo-škrupinového MEMSu. V záverečnej fáze projektu bude kladený dôraz jednak na verifikáciu odvodených MKP rovníc pre nosníkovo-škrupinový MEMS pomocou fyzikálneho experimentu ako aj na riadenie SMA aktuátora konvenčnými a inteligentnými metódami riadenia.
</td>
	<td >In the first phase, attention will be given to the material, technical and equipment set-up required for the first set experiments. At the same time, the FGM-beam FEM equations will be derived and SMA models designed. In addition, the first sets of experiments will be used for the verification of numerical models of 3D-FGM and SMA systems. A complex verification of numerical models will take place on selected samples whose chemistry has been consistently analyzed. Results of SMA actuator measurements will be used in the consecutive stages of the project in the design and application of alternative anchoring for SMA actuators. Next the nonlinear model of SMA actuator and new methods of synthesis focused on position control and error elimination will be proposed. This research will take place in parallel with the theoretical analysis and FEM equations derivation of FGM shells. In the final stage, emphasis will be given to both the verification of the derived FGM beam-shell equations by real sample measurements and the control of the SMA actuator by conventional and intelligent methods.
</td>
  </tr>
  <tr>
    <td >9</td>
    <td >APVV</td>
    <td >APVV-0343-12 </td>
    <td >Počítačová podpora návrhu robustných nelineárnych regulátorov </td>
	<td >Computer aided robust nonlinear control design </td>
	<td >4 roky</td>
    <td >prof. Ing. Mikuláš Huba, PhD. 
</td>
	<td ></td>
	<td ></td>
    <td >AK29
</td>
	<td >Projekt sa zaoberá vypracovaním podporného počítačového systému na návrh robustných nelineárnych regulátorov s obmedzeniami vo verzii pre Matlab/Simulink a web a vytvorením integrovaného elektronického prostredia v LMS Moodle, ktoré ho spája s webovou stránkou projektu, s elearningovými modulmi a s prístupom k vzdialeným experimentom umožňujúcim jeho overenie online. Systém je založený na novej metóde návrhu regulátorov vychádzajúcej s obmedzovania odchýlok od požadovaných tvarov vstupných a výstupných, resp. stavových veličín. Táto integruje výsledky viacerých doteraz izolovaných prístupov k návrhu regulátorov - tradičnú teóriu PID regulátorov, moderný stavový prístup s teóriou pozorovateľov, časovo optimálne riadenie, nelineárne systémy a riadenie systémov s veľkým dopravným oneskorením a robustný návrh regulátorov. Vyvíjaný systém bude vhodný pre širokú triedu neurčitých a nelineárnych objektov, ktoré predstavujú väčšinu bežných aplikácií v praxi. Systém bude pozostávať z centrálnej pracovnej stanice umožňujúcej dostatočne rýchle generovanie tzv. portrétu správania riadeného objektu s uvažovaným typom regulátora, z úložiska vytvorených portrétov správania a z grafických staníc, ktoré umožnia na základe špecifikácie neurčitých parametrov riadeného objektu a zadaných kvalitatívnych požiadaviek na riadené procesy určiť optimálne nastavenie regulátora zaručujúce pre zadané požiadavky dosiahnutie najvyššej možnej dynamiky prechodových dejov aj pri zohľadnení neurčitostí.
</td>
	<td >The project deals with development and introduction into practice of the computer aided system for design of robust constrained nonlinear control (in versions for Matlab/Simulink and web) and of the integrated electronic environment in LMS Moodle interconnecting the system with the project web page, with the elearning modules and with access to remote experiments enabling its online verification. The system will be based on a new robust control method based on constraining deviations from required shapes of the input, output, or state variables. This is holistically integrating several up to now isolated control design approaches - the traditional PID control, modern state & disturbance observer approach, minimum time control, nonlinear control, control of systems with long dead time and robust control. The developed system is intended for a broad class of uncertain and nonlinear plants that represent a majority of all applications in practice. The system will consist of a central work station enabling a sufficiently fast generation of the so called performance portrait of given plant with a considered type of control, from a repository of generated performance portraits and from graphical terminals enabling by means of specifying parameters of given plant and the required shape-related performance measures to determine the optimal controller tuning guaranteeing the fastest possible transients responses in the control loop under consideration of the given uncertainties.
</td>
  </tr>
  <tr>
    <td >10</td>
    <td >APVV</td>
    <td >APVV-0772-12 </td>
    <td >Moderné metódy riadenia s využitím FPGA štruktúr </td>
	<td >Advanced control methods based on FPGA structures </td>
	<td >4 roky</td>
    <td >doc. Ing. Alena Kozáková, PhD. 
</td>
	<td ></td>
	<td ></td>
    <td >AK39
</td>
	<td >Projekt rieši aktuálne otázky výskumu a vývoja moderných metód riadenia s využitím hardvérových realizácií konvenčných (PID) ako aj moderných (optimálne, robustné, prediktívne) algoritmov riadenia pre procesy s rýchlou dynamikou. V súčasnosti dominujú vo výskume a implementácii moderných riadiacich systémov tieto smery: riešenia na báze mikroprocesorov (softvérový prístup), jednoúčelové riešenia ASIC a riešenia na báze programovateľných hradlových polí (Field Programmable Gate Arrays, FPGA), ktoré predstavujú konfigurovateľné obvody vysokého stupňa integrácie (VLSI) schopné integrovať rôzne logické a riadiace funkcie. Hardvérové implementácie algoritmov riadenia sú v porovnaní so softvérovými realizáciami vo všeobecnosti o niekoľko rádov rýchlejšie, pretože spracovanie v nich prebieha paralelne, navyše sú kompaktnejšie a vo všeobecnosti lacnejšie. Hlavným cieľom projektu je výskum a vývoj algoritmov na báze FPGA štruktúr, ktorý bude skúmaný na vývojových FPGA systémoch a verifikovaný na fyzikálnych laboratórnych modeloch s rýchlou dynamikou.
</td>
	<td >The project deals with research and development of advanced control methods based on HW implementation of conventional (PID) as well as modern optimal, robust and predictive algorithms applicable in control of plants with fast dynamics. Predominating approaches in the research of modern control systems implementation are microprocessor-based solutions (software approach), ASIC (dedicated approach) and the FPGA based approach. Field Programmable Gate Arrays (FPGA) are configurable circuits of very-large-scale-integration (VLSI) able to integrate various logical and control functions. In general, HW implementations of control algorithms are faster by several orders compared with SW implementations due to parallel processing of information; moreover they are more compact and also less expensive. The main objective of the project is research and development of FPGA-based control algorithms. Their research and development will be studied on available FPGA development kits and verified on laboratory plants with fast dynamics.
</td>
  </tr>
  <tr>
    <td >11</td>
    <td >APVV</td>
    <td >APVV-14-0613 </td>
    <td >Širokopásmový MEMS detektor terahertzového žiarenia </td>
	<td >Broadband MEMS detector of terahertz radiaton </td>
	<td >3 roky</td>
    <td >doc. Ing. Vladimír Kutiš, PhD. </td>
	<td ></td>
	<td ></td>
    <td ></td>
	<td ></td>
	<td >The project is aimed on research and development of new types of broadband detectors for terahertz frequency range. This new type of detector is designed in a concept of micro-electro-mechanical system and uses the bolometric sensing principle. The design construction of the detector consists of a microbolometric sensing device coupled to a broadband antenna. Thermal conversion of the incident THz radiation takes place on a thin polyimide membrane which enables (a) to achieve high thermal conversion efficiency and (b) to design detectors with balanced amplitude characteristics even at high frequency range. The proposed MEMS detector concept will be optimized by a sophisticated process of modeling and simulation in direct mutual iteration with experimental analysis of functionality and detection capability. The completion of the project will be given by the developed state-of-the-art methodology of characterization, broadband THz detection and simulation of the MEMS detector device applicable in the research and education.</td>
  </tr>
  <tr>
    <td >12</td>
    <td >Program EHP Slovakia – Mobility projects among universities </td>
    <td >SK06-II-01-004 </td>
    <td >Podpora medzinárodnej mobility medzi STU Bratislava, NTNU Trondheim a Universität Liechtenstein </td>
	<td >Support of international mobilites between STU Bratislava, NTNU Trondheim, and Universität Liechtenstein </td>
	<td >1 rok</td>
    <td >zodpovedný za ÚAMT - prof. Ing. Mikuláš Huba, PhD. </td>
	<td >Norwegian University of Science and Technology Trondheim (prof. Skogestad, prof. Johansen, prof. Hovd)|Universität Liechtenstein, Liechtenstein (prof. Droege)</td>
	<td ></td>
    <td ></td>
	<td >Projekt rieši aktuálne otázky výskumu a vývoja moderných metód riadenia s využitím hardvérových realizácií konvenčných (PID) ako aj moderných (optimálne, robustné, prediktívne) algoritmov riadenia pre procesy s rýchlou dynamikou. V súčasnosti dominujú vo výskume a implementácii moderných riadiacich systémov tieto smery: riešenia na báze mikroprocesorov (softvérový prístup), jednoúčelové riešenia ASIC a riešenia na báze programovateľných hradlových polí (Field Programmable Gate Arrays, FPGA), ktoré predstavujú konfigurovateľné obvody vysokého stupňa integrácie (VLSI) schopné integrovať rôzne logické a riadiace funkcie. Hardvérové implementácie algoritmov riadenia sú v porovnaní so softvérovými realizáciami vo všeobecnosti o niekoľko rádov rýchlejšie, pretože spracovanie v nich prebieha paralelne, navyše sú kompaktnejšie a vo všeobecnosti lacnejšie. Hlavným cieľom projektu je výskum a vývoj algoritmov na báze FPGA štruktúr, ktorý bude skúmaný na vývojových FPGA systémoch a verifikovaný na fyzikálnych laboratórnych modeloch s rýchlou dynamikou.</td>
	<td >The aim of the project is to support international mobility of students, PhD students, and staff members of four participating faculties of STU in Bratislava with partners from NTNU Trondheim and Universität Liechtenstein. It will initiate academic cooperation between the University of Liechtenstein and STU Bratislava in construction, architecture, and space planning, focusing on the use of alternative energy sources in operation of buildings, including computer-aided simulations of energy needs and internal environment, and spatial planning of rural settlements as well. The project also contributes to further strengthening of already existing cooperation between NTNU Trondheim and faculties of STU in Bratislava in the field of advanced methods of automatic control and to progress of inter-faculty cooperation at STU in Bratislava.</td>
  </tr>
  <tr>
    <td >13</td>
    <td >Iné domáce projekty</td>
    <td >TB</td>
    <td >Softvérové riadenie smerovej dynamiky vozidla UGV 6x6 </td>
	<td >Softvérové riadenie smerovej dynamiky vozidla UGV 6x6 </td>
	<td >1 rok</td>
    <td >Ing. Martin Bugár, PhD. </td>
	<td ></td>
	<td ></td>
    <td >7506</td>
	<td ></td>
	<td ></td>
  </tr>
  <tr>
    <td >14</td>
    <td >Iné domáce projekty</td>
    <td >VW</td>
    <td >Predlžovanie životnosti akumulátorového systému </td>
	<td >Predlžovanie životnosti akumulátorového systému </td>
	<td >1 rok</td>
    <td >Ing. Martin Bugár, PhD. </td>
	<td ></td>
	<td ></td>
    <td >7509</td>
	<td ></td>
	<td ></td>
  </tr>
    <tr>
    <td >15</td>
    <td >Iné domáce projekty</td>
    <td >MV</td>
    <td >REST platforma pre online riadenie experimentov </td>
	<td >REST Platform for Online Control of Experiments </td>
	<td >1 rok</td>
    <td >Ing. Miroslav Gula </td>
	<td ></td>
	<td ></td>
    <td >1361</td>
	<td >"Tento projekt je súčasťou rozsiahlejšieho cieľa o vytvorenie univerzálneho protokolu pre vzdialené riadenie reálnych sústav a tiež balíka softvérových nástrojov na jeho implementáciu. Hlavným cieľom celého úsilia je zjednodušiť a urýchliť budovanie modulárnych online laboratórií.
Úlohami projektu sú návrh a vytvorenie nástroaj pre vzdialený prístup k softvéru Scilab, zavŕšenie implementácie podobného nástroja určeného pre softvérový balík Matlab/Simulink, a návrh a čiastočná implementácia mechatronického systému, ktorý bude v budúcnosti slúžiť na demonštráciu spomenutých nástrojov a následne ako učebná pomôcka."</td>
	<td >The project is a part of an extensive endeavor to create universal protocol for remote control of real plants, and a suite of software tools to implement this protocol. The main objective of this whole endeavor is to simplify and accelerate implementation of modular online laboratories. Tasks of this project include design and implementation of a software tool for remote access to Scilab, completion of implementation of a similar tool for Matlab/Simulink, and design and partial implementation of a mechatronic system which will serve for demonstration of mentioned tools and later on as teaching aid.</td>
  </tr>
</table>

            
			</div>
    </div>

    <!-- Page Content -->
   

        <!-- Marketing Icons Section -->
              

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
