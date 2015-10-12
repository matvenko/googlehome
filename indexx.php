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
    

  
    
    
</body>    
 </html>
