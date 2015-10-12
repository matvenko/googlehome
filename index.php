<?php
ob_start();
session_start();
error_reporting(0);

// bazis gamopdzaxeba
require_once ("config/database.php");
mysql_query("set character set utf8");
if (isset($_GET['action']) && $_GET['action'] == "logout")
{
	session_destroy();
	echo '<meta http-equiv="refresh" content="0;url=?">';	
}



if (isset($_SESSION['username'])) {
		$user_sql = mysql_query("SELECT * FROM ganc WHERE username = '".$_SESSION['username']."'");
		$num_rows = mysql_num_rows($user_sql);
		
		if ($num_rows != 1){
			session_destroy();
			echo '<meta http-equiv="refresh" content="0;url=?">';

			}
		
		}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="">
<title>FreeInfo</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery-te-1.4.0.css" />
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery.min.js" charset="utf-8"></script> -->
<script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>

<script type="text/javascript">
			$(function() {

				//	create carousel
				$('#carousel').carouFredSel({
					responsive: true,
					items: {
						width: 180,
						height: '60%',
						visible: 5
					},
					auto: {
						items: 1
					},
					prev: '#prev',
					next: '#next'
				});

				//	re-position the carousel, vertically centered
				var $elems = $('#wrapper, #prev, #next'),
					$image = $('#carousel img:first')

				$(window).bind( 'resize.example', function() {
					var height = $image.outerHeight( true );

					$elems
						.height( height )
						.css( 'marginTop', -( height/2 ) );

				}).trigger( 'resize.example' );

			});
		</script>


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
                    <li style="padding-top:5px;"><a href="#" onclick="changelang('geo')"><img src="img/geo.png"></a> </li>
                    <li style="padding-top:5px;"><a href="#" onclick="changelang('eng')"><img src="img/eng.png"></a> </li>      
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
    
    
    
    
    
    <!-- vip+-->
    <div class="vip_plus_carusel">
    
        <div class="vip_header"> 
            <strong>VIP+</strong><?php echo GANCXADEBEBI ?>  
            <a href="#"><?php echo YVELA_GANCXADEBA ?></a>
        </div>
        
        
        
        
        <div id="wrapper">
			<div id="carousel">
            
				<img src="img/gng.jpg" alt="gng" width="250" height="150" />
				<?php   
				$i= -1;
				$vipp_sql = mysql_query("SELECT * FROM `ganc` WHERE statusi = 4 ORDER BY RAND()");
				while($vipp_row = mysql_fetch_array($vipp_sql))
				{
				
				//echo '<a href="detaluri.php?detail_id='.$vipp_row["id"].'">';
				echo '<img src="upload/'.$vipp_row['id'].'/'.$vipp_row['logo'].'" alt="dakar-1"  />';
				//echo '</a>';
				
				}
				
				
				?>
			</div>
		</div>
		<a id="prev" href="#"></a>
		<a id="next" href="#"></a>
        
        

    </div>
    
    
    <!--reclams block-->
    <div class="bottom_reclams_block">
        <div class="bottom_reclams"><a href="#"><img src="images_banners/4_66.png" alt="reklama" /></a></div>
        <div class="bottom_reclams"><a href="#"><img src="images_banners/3_66.png" alt="information" /></a></div>
        <div class="bottom_reclams"><a href="#"><img src="images_banners/1_66.png" alt="companies" /></a></div>
        <div class="bottom_reclams"><a href="#"><img src="images_banners/2_66.png" alt="freeinfo" /></a></div>
        <div class="bottom_reclams"><a href="#"><img src="images_banners/5_66.png" alt="gngstudio" /></a></div>
    </div>
    
    
    <!--kategoriebi-->
    <div class="categories">
        <!-- menu-->
        <div class="category_meny">
            <ul>
                <li><a href="sadziebo.php?cat=0"><?php echo QVELMOQMEDEBA ?></a>
                   <ul>
                        <li><a href="sadziebo.php?cat=0&subcat=0"> <?php echo EKLESIA ?>      </a></li>
                        <li><a href="sadziebo.php?cat=0&subcat=1"> <?php echo UPATRONOEBI ?>       </a></li>
                        <li><a href="sadziebo.php?cat=0&subcat=2"> <?php echo DAUCVELEBI ?>     </a></li>
                        <li><a href="sadziebo.php?cat=0&subcat=3"> <?php echo MOXUCEBI ?>      </a></li>
                        <li><a href="sadziebo.php?cat=0&subcat=4"> <?php echo SNEULEBI ?>      </a></li>                        
                    </ul>      
                </li>

                
                <li><a href="sadziebo.php?cat=1"><?php echo JANDACVA ?>  </a>
               <ul>
                    <li><a href="sadziebo.php?cat=1&subcat=0"> <?php echo SAMSHOBIAROEBI ?>     </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=1"><?php echo ONKOLOGIA ?>      </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=2"><?php echo PLASTIKURI ?>       </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=3"> <?php echo STOMATOLOGIA ?>     </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=4#"><?php echo REPRODUQCIA ?>      </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=5"> <?php echo SAMEDICINO_APARATURA ?>      </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=6"> <?php echo GINE_MAMO_URO ?>    </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=7"> <?php echo NEVROLOGIA ?>     </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=8"><?php echo FSIQOLOGIA ?>      </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=9"><?php echo DIAGNOSTIKA ?>      </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=10"> <?php echo LABORATORIULI_KVLEVA ?>     </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=11"><?php echo FARMACIA ?>       </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=12"> <?php echo KARDIOLOGIA ?>     </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=13"> <?php echo PEDIATRIA ?>     </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=14"> <?php echo SISXLIS_BANKI ?>     </a></li>
                    <li><a href="sadziebo.php?cat=1&subcat=15"> <?php echo OFTALMOLOGIA ?>      </a></li>
                    </ul>         
                </li>

                
                <li><a href="sadziebo.php?cat=2"> <?php echo GANATLEBA ?>  </a>
                   <ul>
                        <li><a href="sadziebo.php?cat=2&subcat=0">  <?php echo UNIVERSITETI ?>    </a></li>
                        <li><a href="sadziebo.php?cat=2&subcat=1"> <?php echo SKOLA ?>     </a></li>
                        <li><a href="sadziebo.php?cat=2&subcat=2">  <?php echo BAGI ?>      </a></li>
                        <li><a href="sadziebo.php?cat=2&subcat=3"> <?php echo KOLEJI ?>      </a></li>
                        <li><a href="sadziebo.php?cat=2&subcat=4">  <?php echo TREINING_CENTRI ?>      </a></li>  
                         <li><a href="sadziebo.php?cat=2&subcat=5">   <?php echo UCXO_ENIS_CENTRI ?>    </a></li>                         
                    </ul>   
                </li>
     

                <li><a href="sadziebo.php?cat=3"> <?php echo KVEBA ?>  </a>
                   <ul>
                        <li><a href="sadziebo.php?cat=3&subcat=0">   <?php echo RESTORANI ?>   </a></li>
                        <li><a href="sadziebo.php?cat=3&subcat=1">  <?php echo KAFE ?>    </a></li>
                        <li><a href="sadziebo.php?cat=3&subcat=2">   <?php echo BARI ?>   </a></li>
                        <li><a href="sadziebo.php?cat=3&subcat=3">  <?php echo SWRAFI_KVEBA ?>      </a></li>
                        <li><a href="sadziebo.php?cat=3&subcat=4">  <?php echo SUSHI ?>    </a></li>  
                         <li><a href="sadziebo.php?cat=3&subcat=5"> <?php echo LUDI ?>     </a></li>   
                         <li><a href="sadziebo.php?cat=3&subcat=6">  <?php echo PIZZA ?>   </a></li>   
                         <li><a href="sadziebo.php?cat=3&subcat=7">  <?php echo XINKALI ?>    </a></li>   
                    </ul>              
                </li>
                
                
                
                
                
                
                
                
                <li><a href="sadziebo.php?cat=4"> <?php echo SILAMAZE ?>  </a>
                
                  <ul>
                        <li><a href="sadziebo.php?cat=4&subcat=0">   <?php echo SALONI ?>    </a></li>
                        <li><a href="sadziebo.php?cat=4&subcat=1">  <?php echo SOLARIUMI ?>    </a></li>
                        <li><a href="sadziebo.php?cat=4&subcat=2">  <?php echo FITNESI ?>    </a></li>
                        <li><a href="sadziebo.php?cat=4&subcat=3">  <?php echo ESTETIKA ?>      </a></li>
                        <li><a href="sadziebo.php?cat=4&subcat=4">  <?php echo IOGA ?>    </a></li>  
                         <li><a href="sadziebo.php?cat=4&subcat=5"> <?php echo SAUNA ?>     </a></li>   
                         <li><a href="sadziebo.php?cat=4&subcat=6"> <?php echo AUZI ?>    </a></li>   
                         <li><a href="sadziebo.php?cat=4&subcat=7"> <?php echo AEROBIKA ?>     </a></li>   
                        <li><a href="sadziebo.php?cat=4&subcat=8">  <?php echo GAMAJANSAGEBELI ?>  </a></li>   
                    </ul>
                
                </li>
                

              <li><a href="sadziebo.php?cat=5"> <?php echo SABAVSHVO ?> </a>                    
                        <ul>
                         <li><a href="sadziebo.php?cat=5&subcat=0">  <?php echo GASARTOBI ?>     </a></li>   
                         <li><a href="sadziebo.php?cat=4&subcat=1">  <?php echo SABAVSHVO_MAGAZIA ?>   </a></li>   
                        </ul>
           
              </li>
                

              <li><a href="sadziebo.php?cat=6"> <?php echo GARTOBA ?></a>
                        <ul>
                         <li><a href="sadziebo.php?cat=6&subcat=0"> <?php echo KLUBI ?>     </a></li>   
                         <li><a href="sadziebo.php?cat=6&subcat=1">  <?php echo KARAOKE ?>  </a></li>   
                         <li><a href="sadziebo.php?cat=6&subcat=2">  <?php echo BILIARDI ?>       </a></li>   
                         <li><a href="sadziebo.php?cat=6&subcat=3">  <?php echo KINO ?>  </a></li>   
                         <li><a href="sadziebo.php?cat=6&subcat=4">  <?php echo TEATRI ?>    </a></li>   
                         <li><a href="sadziebo.php?cat=6&subcat=5">  <?php echo GALERIA ?>  </a></li>   
                         <li><a href="sadziebo.php?cat=6&subcat=6">  <?php echo OPERA ?>    </a></li>   
                        </ul>                     
                </li>
                
                 
                
                
                <li><a href="sadziebo.php?cat=7"> <?php echo DASVENEBA ?></a>
                     <ul>
                         <li><a href="sadziebo.php?cat=7&subcat=0">  <?php echo SASTUMRO ?>   </a></li>   
                         <li><a href="sadziebo.php?cat=7&subcat=1">  <?php echo TURISTULI ?>   </a></li>   
                         <li><a href="sadziebo.php?cat=7&subcat=2"> <?php echo AVIAKOMPANIA ?>     </a></li>   
                         <li><a href="sadziebo.php?cat=7&subcat=3">  <?php echo TUREBI ?>  </a></li>   
                        </ul>  
               </li>
                
      
                
                <li><a href="sadziebo.php?cat=8"> <?php echo MOMSAXUREBA ?> </a>
                    <ul>
                         <li><a href="sadziebo.php?cat=8&subcat=0"> <?php echo IURISTEBI ?>     </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=1">  <?php echo NOTARIUSEBI ?> </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=2">  <?php echo DAZGVEVA ?>    </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=3">  <?php echo BANKI ?> </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=4">  <?php echo MIKROSAFINANSO ?>   </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=5">  <?php echo BUGALTERIA ?>  </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=6">  <?php echo KOMPIUTEREBI ?>     </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=7">  <?php echo REKLAMA ?>   </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=8"> <?php echo GADAZIDVA ?>  </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=9"> <?php echo TAXI ?>   </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=10">  <?php echo DACVA ?>   </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=11">  <?php echo BECHDVA ?> </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=12">  <?php echo KAVSHIRGABMULOBA ?></a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=13"> <?php echo FOTO ?>   </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=14">  <?php echo RECXVA ?> </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=15">  <?php echo DIZAINI ?>    </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=16">  <?php echo TANSACMELI ?> </a></li>  
                         <li><a href="sadziebo.php?cat=8&subcat=17">  <?php echo DGESASWAULI ?>  </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=18">   <?php echo SAITII; ?> </a></li>   
                         <li><a href="sadziebo.php?cat=8&subcat=19">   <?php echo SXVA ?> </a></li>                              
                        </ul>          
                </li>
                
 

    
                
                <li><a href="sadziebo.php?cat=9"> <?php echo UDZRAVI_QONEBA ?></a>
                      <ul>
                         <li><a href="sadziebo.php?cat=9&subcat=0">   <?php echo UDZRAVI_QONEBIS_SAAGENTO ?> </a></li>   
                         <li><a href="sadziebo.php?cat=9&subcat=1">  <?php echo SAMSHENEBLO ?> </a></li>   
                         <li><a href="sadziebo.php?cat=9&subcat=2">  <?php echo MIMDINARE_MSHENEBLOBA ?>  </a></li>   
                         <li><a href="sadziebo.php?cat=9&subcat=3">  <?php echo DIZAINII ?> </a></li>   
                         <li><a href="sadziebo.php?cat=9&subcat=4">  <?php echo GATBOBA ?> </a></li>   
                         <li><a href="sadziebo.php?cat=9&subcat=5">  <?php echo REMONTI ?>  </a></li>   
                         <li><a href="sadziebo.php?cat=9&subcat=6">  <?php echo KAR_FANJARA ?></a></li>   
                        </ul> 
                </li>
                
                
                
                <li><a href="sadziebo.php?cat=10"> <?php echo AUTO ?></a>
                       <ul>
                         <li><a href="sadziebo.php?cat=10&subcat=0">  <?php echo AVTORENTI ?>    </a></li>   
                         <li><a href="sadziebo.php?cat=10&subcat=1">  <?php echo AVTOSKOLA ?>  </a></li>   
                         <li><a href="sadziebo.php?cat=10&subcat=2">  <?php echo KALONKA ?>     </a></li>   
                         <li><a href="sadziebo.php?cat=10&subcat=3">  <?php echo GAZI ?>   </a></li>   
                         <li><a href="sadziebo.php?cat=10&subcat=4">  <?php echo GAZI_MANQANA ?>      </a></li>   
                         <li><a href="sadziebo.php?cat=10&subcat=5">  <?php echo SAMRECXAO ?>  </a></li>   
                         <li><a href="sadziebo.php?cat=10&subcat=6">  <?php echo MANQANIS_AQSESUAREBI ?>     </a></li> 
                         <li><a href="sadziebo.php?cat=10&subcat=7">   <?php echo CAR_SERVICE_CENTER ?>  </a></li>   
                         <li><a href="sadziebo.php?cat=10&subcat=8">  <?php echo AVTOSERVISI_GZAZE ?>     </a></li>                             
                        </ul>
                </li>
                
                
                
                <li><a href="sadziebo.php?cat=11"> <?php echo MAGAZIA ?></a>
                    <ul>
                         <li><a href="sadziebo.php?cat=11&subcat=0">  <?php echo AVEJI ?>    </a></li>   
                         <li><a href="sadziebo.php?cat=11&subcat=1">   <?php echo TEQNIKA ?> </a></li>   
                         <li><a href="sadziebo.php?cat=11&subcat=2">  <?php echo TANSACMEL_FEXSACMELI ?>    </a></li>   
                         <li><a href="sadziebo.php?cat=11&subcat=3">  <?php echo SPORTULI_MAGAZIA ?>  </a></li>   
                         <li><a href="sadziebo.php?cat=11&subcat=4">   <?php echo PARFIUMERIA ?>   </a></li>   
                         <li><a href="sadziebo.php?cat=11&subcat=5">  <?php echo OPLIKA ?>   </a></li>   
                         <li><a href="sadziebo.php?cat=11&subcat=6">  <?php echo MARKETI_UBANSHI ?>      </a></li>                               
                        </ul>        
                </li>
                
                    
                
                
            </ul>
        </div>
        <!-- vip-->
        <div class="vip_statemants">
            <div class="vip_statemants_block">
                <div class="vip_header"><strong>VIP</strong>  <?php echo GANCXADEBEBI ?> <a href="#"> 
				<?php echo YVELA_GANCXADEBA ?> </a></div>
                
				<div class="vipebi">
					<div id="inner">
					
					<?php  
						$vip_sql = mysql_query("SELECT * FROM `ganc` WHERE statusi = 3 ORDER BY RAND()");
						$vip_num_rows = mysql_num_rows($vip_sql);
						while($vip_row = mysql_fetch_array($vip_sql))
						{

							echo '<div class="companys"><a href="detaluri.php?detail_id='.$vip_row["id"].'">';
							echo '<img src="upload/'.$vip_row['id'].'/'.$vip_row['logo'].'" alt="dakar-1"  />';
							echo '</a></div>';

						}

					?>
					</div><!-- inner -->
				</div><!-- vipebi -->

				
<script type="text/javascript">

$(function(){
	var vip_num_rows = <?php echo $vip_num_rows; ?>;
	var jer = (Math.ceil((vip_num_rows/4)))-5;
	var maxjer = (jer*105);
	var minjer = (0-maxjer);
	
	setInterval(function(){ 
	var lefti = parseInt($("#inner").position().top);
		
		if(lefti > minjer){
		$("#inner").animate({top: "-=105"},1000)
		}else{
			//$("#inner").css("left", 0);
			$("#inner").animate({top: "+="+maxjer+""},1000)
		}
	
	
	
}, 5000);
					
	});
			
			

</script>

		</div>
        
        
        </div>
        <!--reclams-->
        <div class="height_reclams">
            <div class="top_reclam"><img src="img/reclam_52.png"></div>
            <div class="bottom_reclams"><img src="img/reclam2_57.png"></div>
        
        </div>

    
    </div><!-- kategoriebi-->
    
    
    
    
    <!--dgis aqcia-->
    <div class="dgis_aqcia">
        <div class="aqcia_header"><strong> <?php echo DGIS_AQCIA ?> </strong><a href="#">
        <?php echo YVELA_AQCIA ?> </a></div>
        <div class="aqciebi"></div>
        <div class="aqciebi"></div>
        <div class="aqciebi"></div>
        <div class="aqciebi"></div>
        <div class="aqciebi"></div>
        <div class="aqciebi"></div>
        <div class="aqciebi"></div>
        <div class="aqciebi"></div>
        <div class="aqciebi"></div>
        <div class="aqciebi"></div>
    
    </div>
    


    
        <!--reclams block-->
    <div class="bottom_reclams_block">
        <div class="bottom_reclams"><a href="#"><img src="images_banners/1_66.png" alt="reklama" /></a></div>
        <div class="bottom_reclams"><a href="#"><img src="images_banners/2_66.png" alt="information" /></a></div>
        <div class="bottom_reclams"><a href="#"><img src="images_banners/3_66.png" alt="companies" /></a></div>
        <div class="bottom_reclams"><a href="#"><img src="images_banners/4_66.png" alt="freeinfo" /></a></div>
        <div class="bottom_reclams"><a href="#"><img src="images_banners/5_66.png" alt="gngstudio" /></a></div>
    </div>
    
    
    <!--bankomatebi da valutebi-->
    <div class="valuta_bankomati">
        <div class="konvertori">ვალუტის კონვერტორი</div>
        <div class="kursi">ვალუტის კურსი<br />
		
        

		</div>
        <div class="bankomati">ბანკომატები</div>
    </div>
    
    
    <!-- prognozi trafiki-->
    <div class="valuta_bankomati">
        <div class="amindi">ამინდის პროგნოზი</div>
        <div class="trafiki">ტრაფიკი</div>
        <div class="aftiaqi"> აფთიაქების ქსელი</div>
        <div class="gadaxdis_aparati"> გადახდის აპარატები</div>
        
    </div>
    
  
    <!-- footer-->
    <footer>
        <div class="footer">
        <p><a href="#"> <?php echo REKLAMAI; ?></a></p>          
        <p> <strong>All Rights Reserved | Freeinfo.ge</strong> <img src="img/top_73.png"> <strong> <a href="#">
         <?php echo SHEMOGVIERTDIT ?></a></strong></p>       
        </div>
    
    
    </footer>
    
    
</body>    
 </html>
