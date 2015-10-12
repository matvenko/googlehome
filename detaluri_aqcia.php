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
                    <li>|<a href="#"><?php echo ENTER ?></a>  |</li>
                    <li style="padding-top:5px;"><a href="?lang=geo"><img src="img/geo.png"></a>	</li>
                    <li style="padding-top:5px;"><a href="?lang=eng"><img src="img/eng.png"></a>	</li>      
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
    
    
    
    <!-- menu -->
    <div class="menu">
        <ul>
        <li><span>5	</span><br/><h2><?php echo QVELMOQMEDEBA ?>		</h2></li>
        <li><span>15</span><h2><?php echo JANDACVA ?></h2></li>
        <li><span>25</span><h2><?php echo GANATLEBA ?></h2></li>
        <li><span>12</span><h2><?php echo KVEBA ?></h2></li>
        <li><span>354</span><h2><?php echo SILAMAZE ?> </h2></li>
        <li><span>245</span><h2><?php echo SABAVSHVO ?> </h2></li>
        <li><span>135</span><br/><h2> <?php echo GARTOBA ?> </h2></li>
        <li><span>345</span><br/><h2><?php echo DASVENEBA ?>  </h2></li>
        <li><span>123</span><h2><?php echo MOMSAXUREBA ?>   </h2></li>
        <li><span>45</span><h2><?php echo UDZRAVI_QONEBA ?>   </h2></li>
        <li><span>245</span><br/><h2><?php echo AUTO ?>  </h2></li>
        <li><span>112</span><br/><h2> <?php echo MAGAZIA ?> </h2></li>
        </ul>
    </div><!--menu-->
    
    
    
    <!--- mtavari ---->
<div class="sadziebo_content">
	
	<!--- row ---->
	<div class="row">
		<div class="cell leftside">
            
          
            <!--gallery-->
            <div class="gallery">
                <div class="small_photo">
                    <!--header-->
                    <div class="header_small_photo"><?php echo FOTOGALEREA ?></div>
                    <!--photos-->
                    <div class="photos"><img src="img/tsisq_1_03.png" ></div>
                    <div class="photos"><img src="img/tsisq2_03.png"></div>
                    <div class="photos"><img src="img/tsisq3_03.png"></div>
                    <div class="photos"><img src="img/tsisq4_03.png" ></div>
                    <div class="photos"><img src="img/tsisq5_03.png" ></div>
                    <div class="photos"><img src="img/tsisq6_03.png"></div>            
                </div>
                
                
    


                
                
                <div class="big_photo">
                <!--header-->
                <div class="header_big_photo_header"><strong><?php echo RESTORANI ?>:  წისქვილი</strong> <em><?php echo STATUSI ?>: VIP+</em> </div>
                <!--photo-->
                <div class="main_photo" id="test"><img src="img/tsiskdid.png"></div>   
                </div>          
            </div>

            
    
           
            
            
            
            <!--menu da a.sh-->
            <div class="clearer_5"></div>
            <div class="menu_info">
                <!--download menu-->
                <div class="menu_download"><?php echo IXILE_MENU ?>: <img src="img/download_menu_07.png"></div>
                <div class="information"><strong><?php echo SRULI_INFO ?>: </strong> <time><?php echo GANAXLEBA ?>:   2015/03/28   12:00</time> </div>
            </div>
            
            <!--info-->
            <div class="clearer_5"></div>
            
            
            <!--- informacia ---->
            <div class="detaluri_informacia">

                
              <!--- row ---->
                <div class="row">
                    <div class="cell leftside"><?php echo ABOUT_US ?></div>
                    <div class="cell rightside">მტკვრის მარჯვენა სანაპირო, ბელიაშვილის ქუჩამტკვრის მარჯვენა სანაპირო, ბელიაშვილის ქუჩამტკვრის მარჯვენა სანაპირო, ბელიაშვილის ქუჩამტკვრის მარჯვენა სანაპირო, ბელიაშვილის ქუჩამტკვრის მარჯვენა სანაპირო, ბელიაშვილის ქუჩა</div>
                </div><!--- end row --->
                
                
                <!--- row ---->
                <div class="row">
                    <div class="cell leftside"><?php echo MISAMARTI ?></div>
                    <div class="cell rightside">მტკვრის მარჯვენა სანაპირო, ბელიაშვილის ქუჩა</div>
                </div><!--- end row --->

                <div class="row">
                    <div class="cell leftside"> <?php echo TELEFONI ?> </div>
                    <div class="cell rightside"> +995 32 253 07 97; +995 32 254 06 09; +995 591 25 55 77; +995 514 25 55 77 </div>
                </div><!--- end row --->

                               <div class="row">
                    <div class="cell leftside"> <?php echo ELFOSTA ?> </div>
                    <div class="cell rightside">  tsiskvili@gmail.com </div>
                </div><!--- end row --->

                
                                <div class="row">
                    <div class="cell leftside"><?php echo SAITI ?>  </div>
                    <div class="cell rightside">http://www.tsiskvili.ge </div>
                </div><!--- end row --->

                
                                <div class="row">
                    <div class="cell leftside"> Facebook </div>
                    <div class="cell rightside"> http://facebook/tsiskvili</div>
                </div><!--- end row --->

                
                                <div class="row">
                    <div class="cell leftside"><?php echo SAMZAREULO ?>  </div>
                    <div class="cell rightside"> ქართული</div>
                </div><!--- end row --->

                
                                <div class="row">
                    <div class="cell leftside"><?php echo DARBAZI_MAGIDA ?></div>
                    <div class="cell rightside">სამი დარბაზი და კუპეები, სულ 200 კაცი</div>
                </div><!--- end row --->

                
                                <div class="row">
                    <div class="cell leftside"><?php echo MUSHAOBA ?></div>
                    <div class="cell rightside">12:00 – ბოლო სტუმრის წასვლამდე</div>
                </div><!--- end row --->

                
                                <div class="row">
                    <div class="cell leftside"> <?php echo SXVA_SERVISI ?></div>
                    <div class="cell rightside">თანხის გადახდა პლასტიკური ბარათებით, WIFI, მუდმივ
სტუმრებზე 15% ფასდაკლება	საკუთარი ავტოსადგომი.</div>
                </div><!--- end row --->

                
                
            </div>
            <!---- mtavari ---->

            
            
            
            <!-- aqcia -->
            <div class="clearer_5"></div>
            <div class="aqcia">
                <!--left menu-->
                <div class="daily_aqcia"><?php echo DGIS_AQCIA ?></div>
                <!--download menu-->
                <div class="daily_menu"><?php echo IXILE_MENU ?>: <img src="img/download_menu_07.png"></div>
                <!--offer-->
                <div class="offer">  bazaSisakdakad;' 5 კაციანი მენიუ 50 ლარად</div>
            </div>
            
            
            <!--aqcia poto-->
            <div class="clearer_5"></div>
            <div class="aqcia_poto"><img src="img/aqcia_03.png"> </div>
            <div class="wesebi">
            
            <strong><?php echo AQCIIS_POROBA ?></strong>
                <div class="clearer_5"></div>
გადახდილი თანხა უკან არ ბრუნდება (კანონით გათვალისწინებული გამონაკლისების გარდა)ვაუჩერის გამოყენება შესაძლებელია შეძენისთანავე, მომსახურების/პროდუქტის მისაღებად აუცილებელია მობილურზე მოსული SMS კოდის ან ამობეჭდილი ვაუჩერის წარდგენავაუჩერის ვადა - 1 თვე
ძვირფასო მომხმარებლებო თქვენივე უფლებების დაცვის მიზნით, გთხოვთ მომსახურების მიღებისას აუცილებლად წარადგინოთ პირადობის დამადასტურებელი მოწმობა
            
            </div>
		
        <!--naxe rukaze-->
        
        <div class="clearer_5"></div>
        
        <div class="naxe_rukaze"><?php echo NAXE_RUKAZE ?></div>    
            
        </div><!--left side-->
        
        
        
        
		<div class="cell rightside">
            <div class="reclam_big"><img src="img/reclam_52.png"></div>
            <div class="reclam_big"><img src="img/reclam2_57.png"></div>
            <div class="small_reclam"><img src="img/მთავარი1_30.png"></div>
            <div class="small_reclam"><img src="img/მთავარი1_30.png"></div>
            <div class="small_reclam"><img src="img/მთავარი1_30.png"></div>
            <div class="small_reclam"><img src="img/მთავარი1_30.png"></div>
            <div class="small_reclam"><img src="img/მთავარი1_30.png"></div>
        
        </div>
	</div><!--- end row --->

</div>
<!---- mtavari ---->

    
    <!--ruka-->
    <div class="clearer_5"></div>
    <div class="detaluri_ruka">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2975.648301398781!2d44.77988399999999!3d41.77124000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srestorani+wisqvili!5e0!3m2!1sen!2s!4v1428005854855" width="1100" height="395" frameborder="0" style="border:0"></iframe>
    <div class="logo_freeinfo"></div>
    </div>
    
    
   <!-- footer-->
    <footer>
        <div class="footer">
        <p><a href="#"> <?php echo REKLAMA ?></a></p>          
        <p> <strong>All Rights Reserved | Freeinfo.ge</strong> <img src="img/top_73.png"> <strong> <a href="#">
         <?php echo SHEMOGVIERTDIT ?></a></strong></p>       
        </div>
    
    
    </footer>
    
    
</body>    
 </html>

