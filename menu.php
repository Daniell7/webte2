<style>
body {
    padding-top: 50px;
}

.color-link{
    background-color: red;
    color: white !important;
}

.color-link:hover{
    color: black !important;
}
</style>
<script>
    function language(selector){
        
        console.log(selector.value);
        
         var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
             location.reload();
            }
            };
        xmlhttp.open("GET", "/semzad/webte2/functions.php?lang="+selector.value, true);
        xmlhttp.send();
        
    }
</script>
<?php
include 'texty.php';
    session_start(); 
    if(!isset($_SESSION["lang"])){
        $_SESSION["lang"]="sk";
    }
?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/semzad/webte2/index.php"><?php echo $translate[$_SESSION["lang"]]["main"];?></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <span style="color:grey;"><?php echo $translate[$_SESSION["lang"]]["langSel"]; ?></span> 
                <select val="lang" id="lang_sel" onchange="language(this)">
                    <option <?php if($_SESSION["lang"]=="sk"){echo 'selected="true"';}?> value="sk">Slovensky</option>
                    <option <?php if($_SESSION["lang"]=="en"){echo 'selected="true"';}?>value="en">English</option>
                    <option <?php if($_SESSION["lang"]=="ru"){echo 'selected="true"';}?> value="ru">Pусский (Russian)</option>
                </select>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                    <li>
                        <a href="/semzad/webte2/onas.php"><?php echo $translate[$_SESSION["lang"]]["about"]; ?></a>
                    </li>
                    <li>
                        <a href="/semzad/webte2/pracovnici.php"><?php echo $translate[$_SESSION["lang"]]["staff"]; ?></a>
                    </li>
                    <li>
                        <a href="/semzad/webte2/studium.php"><?php echo $translate[$_SESSION["lang"]]["study"]; ?></a>
                    </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $translate[$_SESSION["lang"]]["research"]; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="/semzad/webte2/projekty.php"><?php echo $translate[$_SESSION["lang"]]["projects"]; ?></a></li>
                        
                    
                        
                            <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown-toggle disabled"><?php echo $translate[$_SESSION["lang"]]["retopics"]; ?></a>
                            <ul class="dropdown-menu">
                               
                                <li>
                                <a href="/semzad/webte2/motokara.php"><?php echo $translate[$_SESSION["lang"]]["ecart"];?> </a>
                            </li>
                            <li>
                                <a href="/semzad/webte2/vozidlo.php"><?php echo $translate[$_SESSION["lang"]]["6x6"];?></a>
                            </li>
                            <li>
                                <a href="/semzad/webte2/3Dkocka.php"><?php echo $translate[$_SESSION["lang"]]["ledcube"];?></a>
                            </li>
                            <li>
                                <a href="/semzad/webte2/bio.php"><?php echo $translate[$_SESSION["lang"]]["biomech"];?></a>
                            </li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>
                 <li>
                        <a href="/semzad/webte2/aktuality.php"><?php echo $translate[$_SESSION["lang"]]["news"]; ?></a>
                    </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $translate[$_SESSION["lang"]]["activity"]; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                         <li>
                                <a href="/semzad/webte2/foto.php"><?php echo $translate[$_SESSION["lang"]]["photos"]; ?></a>
                            </li>
                            <li>
                                <a href="/semzad/webte2/video.php"><?php echo $translate[$_SESSION["lang"]]["video"]; ?></a>
                            </li>
                            <li>
                                <a href="/semzad/webte2/media.php"><?php echo $translate[$_SESSION["lang"]]["media"]; ?></a>
                            </li>
                    
                        
                            <li class="dropdown-submenu">
                            <a href="/semzad/webte2/weby.php" class="dropdown-toggle" data-toggle="dropdown-toggle disabled"><?php echo $translate[$_SESSION["lang"]]["themeweb"];?></a>
                            <ul class="dropdown-menu">
                               
                                <li>
                                <a href="http://www.e-mobilita.fei.stuba.sk/"><?php echo $translate[$_SESSION["lang"]]["elmobil"];?></a>
                            </li>
                          
                            </ul>
                        </li>
                    </ul>
                </li>
                 <li>
                        <a href="/semzad/webte2/kontakt.php"><?php echo $translate[$_SESSION["lang"]]["contact"]; ?></a>
                    </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

