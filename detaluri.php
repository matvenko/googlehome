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
                    <li>
						<?php if(isset($_SESSION['username']) && $_SESSION['username'] != ""){
									echo '<a href="?action=logout"> გასვლა </a>';
								}else{
									  echo '<a href="login.php">'.ENTER.'</a>';
								}
                        ?>
                    </li>
                    <li style="padding-top:5px;"><a href="#" onclick="changelang('geo')"><img src="img/geo.png"></a>	</li>
                    <li style="padding-top:5px;"><a href="#" onclick="changelang('eng')"><img src="img/eng.png"></a>	</li>            
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
    
<?php
	include("config/functions.php");
?>

    
    <!--- mtavari ---->
<div class="sadziebo_content">
	
	<!--- row ---->
	<div class="row">
		<div class="cell leftside">
            
			<script type="text/javascript">
				$(function(){

					$(".photos").click(function(){
						var es = $(this).find("img").attr("src"); 
						$("#big_img").find("img").attr("src", es);
					});
				});
				
				
			</script>
          
            <!--gallery-->
            <div class="gallery">
			
                <div class="small_photo">
                    <!--header-->
                    <div class="header_small_photo"><?php echo FOTOGALEREA ?></div>
                    <!--photos-->
                    <div class="photos"><img src="upload/<?php echo $detail_row["id"]."/".$detail_row["image1"]; ?>" alt="<?php echo $detail_row["company"]; ?>" title="<?php echo $detail_row["company"]; ?>" onclick="dede()"	 /></div>
                    <div class="photos"><img src="upload/<?php echo $detail_row["id"]."/".$detail_row["image2"]; ?>" alt="<?php echo $detail_row["company"]; ?>" title="<?php echo $detail_row["company"]; ?>" onclick="dede()" /></div>
                    <div class="photos"><img src="upload/<?php echo $detail_row["id"]."/".$detail_row["image3"]; ?>" alt="<?php echo $detail_row["company"]; ?>" title="<?php echo $detail_row["company"]; ?>" onclick="dede()" /></div>
                    <div class="photos"><img src="upload/<?php echo $detail_row["id"]."/".$detail_row["image4"]; ?>" alt="<?php echo $detail_row["company"]; ?>" title="<?php echo $detail_row["company"]; ?>" onclick="dede()" /></div>
                    <div class="photos"><img src="upload/<?php echo $detail_row["id"]."/".$detail_row["image5"]; ?>" alt="<?php echo $detail_row["company"]; ?>" title="<?php echo $detail_row["company"]; ?>" onclick="dede()" /></div>
                    <div class="photos"><img src="upload/<?php echo $detail_row["id"]."/".$detail_row["image6"]; ?>" alt="<?php echo $detail_row["company"]; ?>" title="<?php echo $detail_row["company"]; ?>" onclick="dede()" /></div>          
                </div>
                
                <div class="big_photo">

					<div class="header_big_photo_header">
						<strong> <?php echo $detail_row["company"]; ?></strong> 
						<em><?php echo STATUSI ?>: 
						
						<?php 
						
						if($detail_row["statusi"] == 1){
							$result = "Standart";
						}
	
						if($detail_row["statusi"] == 2){
							$result = "Standart+";
						}
						
						if($detail_row["statusi"] == 3){
							$result = "Vip";
						}
						
						if($detail_row["statusi"] == 4){
							$result = "Vip+";
						}
						
						echo $result;
						
						?></em> 
					</div>

					<div class="main_photo" id="big_img">

							<img src="upload/<?php echo $detail_row["id"]."/".$detail_row["image1"]; ?>" alt="<?php echo $detail_row["company"]; ?>" title="<?php echo $detail_row["company"]; ?>" />

					</div>   
					
                </div>
				
            </div><!-- gallery -->

            
            <!--menu da a.sh-->
            <div class="clearer_5"></div>

            <div class="menu_info">
                <!--download menu-->
                <div class="menu_download"><?php echo $file_text; ?>: 
                    <a href="upload/<?php echo $detail_row["id"]."/".$detail_row["upload_all"]; ?>" dowload>
                        <img src="img/download_menu_07.png">
                    </a>
                </div>
                <div class="information"><strong><?php echo SRULI_INFO ?>: </strong> <time><?php echo GANAXLEBA ?>:   2015/03/28   12:00</time> </div>
            </div>
            
            <!--info-->
            <div class="clearer_5"></div>
            
            
            <!--- informacia ---->
            <div class="detaluri_informacia">

                
              <!--- row ---->
                <div class="row">
                    <div class="cell leftside"><?php echo ABOUT_US ?></div>
                    <div class="cell rightside"><?php echo $detail_row["about_company_".$lang.""]; ?></div>
                </div><!--- end row --->
                
                
                <!--- row ---->
                <div class="row">
                    <div class="cell leftside"><?php echo MISAMARTI ?></div>
                    <div class="cell rightside"><?php echo $detail_row["misamarti_".$lang.""]; ?></div>
                </div><!--- end row --->

                <div class="row">
                    <div class="cell leftside"> <?php echo TELEFONI ?> </div>
                    <div class="cell rightside"> <?php echo $detail_row["nomeri"]; ?> </div>
                </div><!--- end row --->

				<div class="row">
                    <div class="cell leftside"> <?php echo ELFOSTA ?> </div>
                    <div class="cell rightside">  <?php echo $detail_row["maili"]; ?> </div>
                </div><!--- end row --->

                
				<div class="row">
                    <div class="cell leftside"><?php echo SAITI ?>  </div>
                    <div class="cell rightside"><a href="<?php echo $detail_row["saiti"]; ?>" target="_blank"><?php echo $detail_row["saiti"]; ?></a> </div>
                </div><!--- end row --->

                
				<div class="row">
                    <div class="cell leftside"> Facebook </div>
                    <div class="cell rightside"> <a href="<?php echo $detail_row["facebook"]; ?>" target="_blank"><?php echo $detail_row["facebook"]; ?></a></div>
                </div><!--- end row --->

                
                <?php
                if($detail_row["samzareulo_geo"] != "")
				{
				?>
				<div class="row">
                    <div class="cell leftside"><?php echo SAMZAREULO ?>  </div>
                    <div class="cell rightside"> <?php echo $detail_row["samzareulo_".$lang.""]; ?></div>
                </div><!--- end row --->
				<?php
				}
				?>
                
                <?php
                if($detail_row["darbazi_geo"] != "")
				{
				?>
				<div class="row">
                    <div class="cell leftside"><?php echo DARBAZI_MAGIDA ?>  </div>
                    <div class="cell rightside"> <?php echo $detail_row["darbazi_".$lang.""]; ?></div>
                </div><!--- end row --->
				<?php
				}
				?>
                
				<?php
                if($detail_row["saatebi_geo"] != "")
				{
				?>
				<div class="row">
                    <div class="cell leftside"><?php echo MUSHAOBA ?>  </div>
                    <div class="cell rightside"> <?php echo $detail_row["saatebi_".$lang.""]; ?></div>
                </div><!--- end row --->
				<?php
				}
				?>
				
                <?php
                if($detail_row["swavlebis_statusi_geo"] != "")
				{
				?>
				<div class="row">
                    <div class="cell leftside"><?php echo STATUSI ?>  </div>
                    <div class="cell rightside"> <?php echo $detail_row["swavlebis_statusi_".$lang.""]; ?></div>
                </div><!--- end row --->
				<?php
				}
				?>
                
                <?php
                if($detail_row["swavlebis_safexuri_geo"] != "")
				{
				?>
				<div class="row">
                    <div class="cell leftside"><?php echo XARISXI ?>  </div>
                    <div class="cell rightside"> <?php echo $detail_row["swavlebis_safexuri_".$lang.""]; ?></div>
                </div><!--- end row --->
				<?php
				}
				?>
                
                <?php
                if($detail_row["migeba"] != "")
				{
				?>
				<div class="row">
                    <div class="cell leftside"><?php echo REGISTRACIA; ?>  </div>
                    <div class="cell rightside"> <?php echo $detail_row["migeba"]; ?></div>
                </div><!--- end row --->
				<?php
				}
				?>
                
                <?php
                if($detail_row["rekviziti"] != "")
				{
				?>
				<div class="row">
                    <div class="cell leftside"><?php echo REKVIZITEBI; ?>  </div>
                    <div class="cell rightside"> <?php echo $detail_row["rekviziti"]; ?></div>
                </div><!--- end row --->
				<?php
				}
				?>
                
                <?php
                if($detail_row["sms"] != "")
				{
				?>
				<div class="row">
                    <div class="cell leftside" style="font-size:13px"><?php echo SMS_GAGZAVNA; ?>  </div>
                    <div class="cell rightside"> <?php echo $detail_row["sms"]; ?></div>
                </div><!--- end row --->
				<?php
				}
				?>
                
                <?php
                if($detail_row["partniorebi_geo"] != "")
				{
				?>
				<div class="row">
                    <div class="cell leftside" style="font-size:12px"><?php echo PARTNIOREBI_DAZGVEVA ?>  </div>
                    <div class="cell rightside"> <?php echo $detail_row["partniorebi_".$lang.""]; ?></div>
                </div><!--- end row --->
				<?php
				}
				?>
                
                
                

                <?php
                if($detail_row["sxva_servisi_geo"] != "")
				{
				?>
				<div class="row">
                    <div class="cell leftside"><?php echo SXVA_SERVISI ?>  </div>
                    <div class="cell rightside"> <?php echo $detail_row["sxva_servisi_".$lang.""]; ?></div>
                </div><!--- end row --->
				<?php
				}
				?>


                
                
                
                
            </div>
            <!---- mtavari ---->

            
            
            
            <?php
            if($detail_row["aqcia_name_geo"] != '')
			{
			?>
			 <!-- aqcia -->
            <div class="clearer_5"></div>
            <div class="aqcia">
                <!--left menu-->
                <div class="daily_aqcia"><?php echo DGIS_AQCIA ?></div>
                <!--download menu-->
                <div class="daily_menu"><?php echo IXILE_MENU ?>: 
                <?php if($detail_row["upload_aqcia"] != ""){ ?>
                    <a href="upload/<?php echo $detail_row["id"]."/".$detail_row["upload_aqcia"]; ?>">
                        <img src="img/download_menu_07.png" />
                    </a>
                <?php }else{
						echo '<img src="img/download_menu_07.png" />';
					} ?>
                </div>
                
                <!--offer-->
                <div class="offer"> <?php echo $detail_row["aqcia_name_".$lang.""]; ?></div>
            </div>
            
            
            <!--aqcia poto-->
            <div class="clearer_5"></div>
            <div class="aqcia_poto"><img src="upload/<?php echo $detail_row["id"]."/".$detail_row["aqcia_photo"]; ?>" /> </div>
            <div class="wesebi">
            
            <strong><?php echo AQCIIS_POROBA ?></strong>
                <div class="clearer_5"></div>
                
                <?php echo $detail_row["aqcia_pirobebi_".$lang.""]; ?>
            
            </div>
            
            
            <?php
			}
			?>
            
            
            
            

 
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

        
        </div>
	</div><!--- end row --->

</div>
<!---- mtavari ---->

    
    <!--ruka-->
    <div class="clearer_5"></div>
    <div class="detaluri_ruka">
    <?php echo $detail_row["ruka"]; ?>
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

