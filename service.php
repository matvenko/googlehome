<?php
ob_start();
session_start();
error_reporting(0);


// bazis hosti
define ("DB_HOST", "localhost");

// bazis username
define ("DB_USER", "root");

// bazis paroli
define ("DB_PASS", "");

// bazis saxeli
define ("DB_NAME", "freeinfo_ge");


// Connection
$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS);
if ($conn != true){
	die (mysql_error());
	}


// bazis gamotana
mysql_select_db (DB_NAME) or die (mysql_error());

mysql_query("set character set utf8");
if (isset($_GET['action']) && $_GET['action'] == "logout")
{
	session_destroy();
	echo '<meta http-equiv="refresh" content="0;url=?">';	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="">
<title>FreeInfo</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-te-1.4.0.css" />
<script type="text/javascript" src="js/jquery-te-1.4.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
</head>

<form method="post" id="testlang">
    <input type="hidden" name="lang" id="lang" />
    </form>
      
    <script type="text/javascript">     
        function changelang(lang){
        document.getElementById("lang").value=lang;
        document.getElementById("testlang").submit();
        }
    </script>
    <?php if(isset($_POST['lang'])){
        $lang = $_POST['lang'];
        $_SESSION['lang'] = $_POST['lang'];
    }elseif(isset($_SESSION['lang'])){
        $lang = $_SESSION['lang'];
    }else{ 
	$lang = 'geo'; 
	$_SESSION['lang'] = $lang;
	}
	
	include("lang/".$lang.".php");
	
    ?>  

<body>

<h1>freeinfo</h1>
    <!-- header-->
    <div class="header">
        <header>
            <!--left menu-->
            <div class="header_left">
                <ul>
                    <li><a href="index.php"><?php echo MTAVARI ?>  </a> </li>
                    <li><a href="about.php"><?php echo ABOUT_US ?>	</a> </li>
                    <li><a href="service.php"><?php echo SERVICE ?>	 </a></li>
                    <li><a href="contact.php"><?php echo CONTACT ?>	</a></li>
                    <?php
						if (isset($_SESSION['username']) && $_SESSION['username'] != ""){
							  echo  '<li><a style="color:#CDFF5E; font-weight: bold;" href="main.php">'.$_SESSION['username'].'</a></li>';
							}
					?>
                </ul>
                
            </div>
                    
            <!-- right menu-->
            <div class="header_right">
                <ul>
                    <li>
						<?php if(isset($_SESSION['username']) && $_SESSION['username'] != ""){
									echo '<a href="?action=logout"> გასვლა </a>';
								}else{
									  echo '<a href="login.php">'.ENTER.'</a>';
								}
                        ?>
                    </li>
                    <li style="padding-top:5px;"><a href="#"	onclick="changelang('geo')"><img src="img/geo.png"></a>	</li>
                    <li style="padding-top:5px;"><a href="#"	onclick="changelang('eng')"><img src="img/eng.png"></a>	</li>      
                </ul>
           </div>
        
        </header>
    </div><!--header-->
    
    
    
    
    <!-- logo reclam -->
    <div class="logo_reclam">
        <!-- logo-->
        <div class="logo">
        	<a href="index.php">
            	<img src="img/logo.png">
            </a>
        </div>
    
        <!--reclam-->
        <div class="reclam_div">
            <div class="reclam" style="background-color:#FFF"><img src="img/banner_SGR-2.jpg" /></div>
        </div>
    
    </div><!-- logo_reclam-->
    
    <?php
	function menu_fun($t){
	$menu_sql = mysql_query("SELECT * FROM ganc WHERE category = ".$t ."");
	$menu_sum = mysql_num_rows($menu_sql);
	echo $menu_sum;
	}
	?>
    
    <!-- menu -->
    <div class="menu">
        <ul>
        <li><a href="sadziebo.php?cat=0"><span><?php menu_fun(0) ?></span><br/><h2>  <?php echo QVELMOQMEDEBA ?></h2></a></li>
        <li><a href="sadziebo.php?cat=1"><span><?php menu_fun(1) ?></span><h2> <?php echo JANDACVA ?></h2></a></li>
        <li><a href="sadziebo.php?cat=2"><span><?php menu_fun(2) ?></span><h2> <?php echo GANATLEBA ?></h2></a></li>
        <li><a href="sadziebo.php?cat=3"><span><?php menu_fun(3) ?></span><h2> <?php echo KVEBA ?></h2></a></li>
        <li><a href="sadziebo.php?cat=4"><span><?php menu_fun(4) ?></span><h2> <?php echo SILAMAZE ?></h2></a></li>
        <li><a href="sadziebo.php?cat=5"><span><?php menu_fun(5) ?></span><h2>  <?php echo SABAVSHVO ?> </h2></a></li>
        <li><a href="sadziebo.php?cat=6"><span><?php menu_fun(6) ?></span><br/>  <h2> <?php echo GARTOBA ?></h2></a></li>
        <li><a href="sadziebo.php?cat=7"><span><?php menu_fun(7) ?></span><br/><h2>  <?php echo DASVENEBA ?> </h2></a></li>
        <li><a href="sadziebo.php?cat=8"><span><?php menu_fun(8) ?></span><h2> <?php echo MOMSAXUREBA ?> </h2></a></li>
        <li><a href="sadziebo.php?cat=9"><span><?php menu_fun(9) ?></span><h2>  <?php echo UDZRAVI_QONEBA ?> </h2></a></li>
        <li><a href="sadziebo.php?cat=10"><span><?php menu_fun(10) ?></span><br/><h2><?php echo AUTO ?> </h2></a></li>
        <li><a href="sadziebo.php?cat=11"><span><?php menu_fun(11) ?></span><br/><h2>  <?php echo MAGAZIA ?> </h2></a></li>
        </ul>
    </div><!--menu-->
    
    
        <div class="clearer_5"></div>
    <div class="clearer_5"></div>
    <p class="class_p"></p>

    
    <!--reclams block-->
    <div class="reclams_block">
        <div class="reclams"><img src="img/256000_03.png"></div>
        <div class="reclams"><img src="img/caucasuas_03.png"></div>
        <div class="reclams"><img src="img/parketi_03.png"></div>
        <div class="reclams"><img src="img/dasvenebaaaaaa_03.png"></div>
        <div class="reclams"><img src="img/relax_03.png"></div>
    </div>

    


    <p class="class_p1"></p>
    <div class="clearer_5"></div>
    <div class="clearer_5"></div>
    
    
    <!--სერვისი-->

     <div class="service_block">
    
        <h2><?php echo SERVICE ?></h2>
        <div class="clearer_5"></div>
        
<div class="p">

<?php

$row = mysql_fetch_assoc(mysql_query("SELECT * FROM `service` WHERE id = 1"));

if(isset($_GET['service']) && $_GET['service']=='Standard') {echo $row["Evo_Range_Standard_".$lang.""];}
if(isset($_GET['service']) && $_GET['service']=='Standard_plus') {echo $row["Evo_Range_Standard_plus_".$lang.""];} 	 
if(isset($_GET['service']) && $_GET['service']=='vip') {echo $row["Evo_Range_vip_".$lang.""];} 	 
if(isset($_GET['service']) && $_GET['service']=='vip_plus') {echo $row["Evo_Range_vip_plus_".$lang.""];} 	 
if(isset($_GET['service']) && $_GET['service']=='plus_vip') {echo $row["Evo_Rangeplus_vip_".$lang.""];} 	 
if(isset($_GET['service']) && $_GET['service']=='plus_vip_plus') {echo $row["Evo_Rangeplus_vip_plus_".$lang.""];}
if(isset($_GET['service']) && $_GET['service']=='dgis_aqcia') {echo $row["Evo_Rangeplus_vip_plus_aqcia_".$lang.""];} 	  	 	


?>
</div>

         
         <!-- სერვისი -->
         <div class="servisi">
             
             <!--left side-->
             <div class="punqtebi_left">
                <div class="evo_range_plus">Evo-Range</div>
                    <div class="evo_range_plus"><a href="?service=Standard">Standard</a></div>
                    <div class="evo_range_plus"><a href="?service=Standard_plus">Standard+</a></div>
                    <div class="evo_range_plus"><a href="?service=vip">Vip</a></div>
                    <div class="evo_range_plus"><a href="?service=vip_plus">Vip+</a></div>
             </div>
        
             <!--right side-->
             <div class="punqtebi_right">
                        <p style="color:#000000; font-size:14px;"> გთავაზობთ ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის      გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ 
        </p>
             </div>
             
         </div><!--servisi-->
        
         
         
          <div class="clearer_5"></div>

         
    </div><!--servis block-->
    

    
    
    
    
    
    
    <!-- footer-->
    <footer>
        <div class="footer">
        <p><a href="#"> <?php echo REKLAMA ?></a></p>          
        <p> <strong>All Rights Reserved | Freeinfo.ge</strong> <img src="img/top_73.png"> <strong> 
        <a href="#"> <?php echo SHEMOGVIERTDIT ?></a></strong></p>       
        </div>
    
    
    </footer>
    
    
</body>    
 </html>
