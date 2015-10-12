<?php @session_start(); 


// bazis gamopdzaxeba
require_once ("config/database.php");

// errorebi
error_reporting (E_ALL);



if (isset($_SESSION['username'])) {
		$user_sql = mysql_query("SELECT * FROM ganc WHERE username = '".$_SESSION['username']."'");
		$num_rows = mysql_num_rows($user_sql);
		}

if (!isset($_SESSION['username']) || $_SESSION['username'] == '' || $num_rows != 1){
	header("location: login.php");
	exit(0);
}

	
if (isset($_GET['action']) && $_GET['action'] == "logout")
{
	session_destroy();
	header("Location: index.php");
}




if(isset($_SESSION['id'])){
		$edit_id = $_SESSION['id'];
	

		$edit_sql = mysql_query("SELECT * FROM ganc WHERE id = ".$edit_id."");
		$edit_row = mysql_fetch_assoc($edit_sql);

		
		$image_dir = "upload/".$edit_id."/";
		
		if(isset($_POST['redaqtireba'])){
	
		$username = isset($_POST['username']) ? $_POST['username'] : $edit_row["username"];
		$userpass = isset($_POST['userpass']) ? $_POST['userpass'] : $edit_row["userpass"];
		$category = isset($_POST['category']) ? $_POST['category'] : $edit_row["category"];
		$subcat = isset($_POST['subcat']) ? $_POST['subcat'] : $edit_row["subcat"];
		$qalaqi = isset($_POST['qalaqi']) ? $_POST['qalaqi'] : $edit_row["qalaqi"];
		$raioni = isset($_POST['raioni']) ? $_POST['raioni'] : $edit_row["raioni"];
		$ubani = isset($_POST['ubani']) ? $_POST['ubani'] : $edit_row["ubani"];
		$company = isset($_POST['company']) ? $_POST['company'] : $edit_row["company"];
		$misamarti_geo = isset($_POST['misamarti_geo']) ? $_POST['misamarti_geo'] : $edit_row["misamarti_geo"];
		$misamarti_eng = isset($_POST['misamarti_eng']) ? $_POST['misamarti_eng'] : $edit_row["misamarti_eng"];
		$about_company_geo = isset($_POST['about_company_geo']) ? $_POST['about_company_geo'] : $edit_row["about_company_geo"];
		$about_company_eng = isset($_POST['about_company_eng']) ? $_POST['about_company_eng'] : $edit_row["about_company_eng"];
		$statusi = isset($_POST['statusi']) ? $_POST['statusi'] : $edit_row["statusi"];
		$ganc_tarigi = date("Y-m-d H:i:s");
		$ganc_periodi = isset($_POST['ganc_periodi']) ? $_POST['ganc_periodi'] : $edit_row["ganc_periodi"];
		$nomeri = isset($_POST['nomeri']) ? $_POST['nomeri'] : $edit_row["nomeri"];
		$saiti = isset($_POST['saiti']) ? $_POST['saiti'] : $edit_row["saiti"];
		$facebook = isset($_POST['facebook']) ? $_POST['facebook'] : $edit_row["facebook"];
		$skype = isset($_POST['skype']) ? $_POST['skype'] : $edit_row["skype"];
		$maili = isset($_POST['maili']) ? $_POST['maili'] : $edit_row["maili"];
		$ruka = isset($_POST['ruka']) ? $_POST['ruka'] : $edit_row["ruka"];
		$saatebi_geo = isset($_POST['saatebi_geo']) ? $_POST['saatebi_geo'] : $edit_row["saatebi_geo"];
		$saatebi_eng = isset($_POST['saatebi_eng']) ? $_POST['saatebi_eng'] : $edit_row["saatebi_eng"];
		$swavlebis_statusi_geo = isset($_POST['swavlebis_statusi_geo']) ? $_POST['swavlebis_statusi_geo'] : $edit_row["swavlebis_statusi_geo"];
		$swavlebis_statusi_eng = isset($_POST['swavlebis_statusi_eng']) ? $_POST['swavlebis_statusi_eng'] : $edit_row["swavlebis_statusi_eng"];
		$swavlebis_safexuri_geo = isset($_POST['swavlebis_safexuri_geo']) ? $_POST['swavlebis_safexuri_geo'] : $edit_row["swavlebis_safexuri_geo"];
		$swavlebis_safexuri_eng = isset($_POST['swavlebis_safexuri_eng']) ? $_POST['swavlebis_safexuri_eng'] : $edit_row["swavlebis_safexuri_eng"];
		$migeba = isset($_POST['migeba']) ? $_POST['migeba'] : $edit_row["migeba"];
		$samzareulo_geo = isset($_POST['samzareulo_geo']) ? $_POST['samzareulo_geo'] : $edit_row["samzareulo_geo"];
		$samzareulo_eng = isset($_POST['samzareulo_eng']) ? $_POST['samzareulo_eng'] : $edit_row["samzareulo_eng"];
		$darbazi_geo = isset($_POST['darbazi_geo']) ? $_POST['darbazi_geo'] : $edit_row["darbazi_geo"];
		$darbazi_eng = isset($_POST['darbazi_eng']) ? $_POST['darbazi_eng'] : $edit_row["darbazi_eng"];
		$rekviziti = isset($_POST['rekviziti']) ? $_POST['rekviziti'] : $edit_row["rekviziti"];
		$sms = isset($_POST['sms']) ? $_POST['sms'] : $edit_row["sms"];
		$partniorebi_geo = isset($_POST['partniorebi_geo']) ? $_POST['partniorebi_geo'] : $edit_row["partniorebi_geo"];
		$partniorebi_eng = isset($_POST['partniorebi_eng']) ? $_POST['partniorebi_eng'] : $edit_row["partniorebi_eng"];
		$sxva_servisi_geo = isset($_POST['sxva_servisi_geo']) ? $_POST['sxva_servisi_geo'] : $edit_row["sxva_servisi_geo"];
		$sxva_servisi_eng = isset($_POST['sxva_servisi_eng']) ? $_POST['sxva_servisi_eng'] : $edit_row["sxva_servisi_eng"];
		$aqcia_name_geo = isset($_POST['aqcia_name_geo']) ? $_POST['aqcia_name_geo'] : $edit_row["aqcia_name_geo"];
		$aqcia_name_eng = isset($_POST['aqcia_name_eng']) ? $_POST['aqcia_name_eng'] : $edit_row["aqcia_name_eng"];
		$aqcia_pirobebi_geo = isset($_POST['aqcia_pirobebi_geo']) ? $_POST['aqcia_pirobebi_geo'] : $edit_row["aqcia_pirobebi_geo"];
		$aqcia_pirobebi_eng = isset($_POST['aqcia_pirobebi_eng']) ? $_POST['aqcia_pirobebi_eng'] : $edit_row["aqcia_pirobebi_eng"];
		$visible = isset($_POST['visible']) ? $_POST['visible'] : $edit_row["visible"];
		
		
		
$tmp_name = $_FILES["upload_all"]["tmp_name"];
		$upload_all = $_FILES["upload_all"]["name"];
		
		
		$upload_aqc = $_FILES["upload_aqcia"]["tmp_name"];
		$upload_aqcia = $_FILES["upload_aqcia"]["name"];
		
		
		
		if ( $_FILES["logo"]["name"] != "" )
		{
			$logo = $_FILES["logo"]["tmp_name"];
			$logo_name = sha1( microtime(TRUE) . "_" . $_FILES["logo"]["size"] ) . ".jpg";
			move_uploaded_file($logo, $image_dir . $logo_name);
		} else {
			$logo_name = $edit_row['logo'];
		}
		
		
		if ( $_FILES["aqcia_photo"]["name"] != "" )
		{
			$aqcia_photo = $_FILES["aqcia_photo"]["tmp_name"];
			$aqcia_photo_name = sha1( microtime(TRUE) . "_" . $_FILES["aqcia_photo"]["size"] ) . ".jpg";
			move_uploaded_file($aqcia_photo, $image_dir . $aqcia_photo_name);
		} else {
			$aqcia_photo_name = $edit_row['aqcia_photo'];
		}
		

		if ($_FILES["surati1"]["name"] != "") {
			$s_1 = $_FILES["surati1"]["tmp_name"];
			$image_name_1 = sha1( microtime(TRUE) . "_" . $_FILES["surati1"]["size"] ) . ".jpg";
			move_uploaded_file($s_1, $image_dir . $image_name_1);
		}else{
			$image_name_1 = $edit_row['image1'];
		}

		if ($_FILES["surati2"]["name"] != "") {
			$s_2 = $_FILES["surati2"]["tmp_name"];
			$image_name_2 = sha1( microtime(TRUE) . "_" . $_FILES["surati2"]["size"] ) . ".jpg";
			move_uploaded_file($s_2, $image_dir . $image_name_2);
		}else{
			$image_name_2 = $edit_row['image2'];
		}

		if ( $_FILES["surati3"]["name"] != "" ) {
			$s_3 = $_FILES["surati3"]["tmp_name"];
			$image_name_3 = sha1( microtime(TRUE) . "_" . $_FILES["surati3"]["size"] ) . ".jpg";
			move_uploaded_file($s_3, $image_dir . $image_name_3);
		} else{
			$image_name_3 = $edit_row['image3'];
		}

		if ( $_FILES["surati4"]["name"] != "" ) {
			$s_4 = $_FILES["surati4"]["tmp_name"];
			$image_name_4 = sha1( microtime(TRUE) . "_" . $_FILES["surati4"]["size"] ) . ".jpg";
			move_uploaded_file($s_4, $image_dir . $image_name_4);
		}else{
			$image_name_4 = $edit_row['image4'];
		}

		if ( $_FILES["surati5"]["name"] != "" ) {
			$s_5 = $_FILES["surati5"]["tmp_name"];
			$image_name_5 = sha1( microtime(TRUE) . "_" . $_FILES["surati5"]["size"] ) . ".jpg";
			move_uploaded_file($s_5, $image_dir . $image_name_5);
		}else{
			$image_name_5 = $edit_row['image5'];
		}
		
		if ( $_FILES["surati6"]["name"] != "" ) {
			$s_6 = $_FILES["surati6"]["tmp_name"];
			$image_name_6 = sha1( microtime(TRUE) . "_" . $_FILES["surati6"]["size"] ) . ".jpg";
			move_uploaded_file($s_6, $image_dir . $image_name_6);
		}else{
			$image_name_6 = $edit_row['image6'];
		}
					
		move_uploaded_file($tmp_name, $image_dir. $upload_all);
		move_uploaded_file($upload_aqc, $image_dir.$upload_aqcia);



		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `username` = '".$username."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `userpass` = '".$userpass."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `category` = '".$category."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `subcat` = '".$subcat."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `qalaqi` = '".$qalaqi."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `raioni` = '".$raioni."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `ubani` = '".$ubani."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `company` = '".$company."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `misamarti_geo` = '".$misamarti_geo."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `misamarti_eng` = '".$misamarti_eng."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `about_company_geo` = '".$about_company_geo."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `about_company_eng` = '".$about_company_eng."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `ganc_tarigi` = '".$ganc_tarigi."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `ganc_periodi` = '".$ganc_periodi."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `nomeri` = '".$nomeri."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `saiti` = '".$saiti."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `facebook` = '".$facebook."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `skype` = '".$username."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `maili` = '".$maili."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `ruka` = '".$ruka."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `saatebi_geo` = '".$saatebi_geo."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `saatebi_eng` = '".$saatebi_eng."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `swavlebis_statusi_geo` = '".$swavlebis_statusi_geo."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `swavlebis_statusi_eng` = '".$swavlebis_statusi_eng."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `swavlebis_safexuri_geo` = '".$swavlebis_safexuri_geo."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `swavlebis_safexuri_eng` = '".$swavlebis_safexuri_eng."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `samzareulo_geo` = '".$samzareulo_geo."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `samzareulo_eng` = '".$samzareulo_eng."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `darbazi_geo` = '".$darbazi_geo."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `darbazi_eng` = '".$darbazi_eng."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `rekviziti` = '".$rekviziti."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `sms` = '".$sms."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `partniorebi_geo` = '".$partniorebi_geo."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `partniorebi_eng` = '".$partniorebi_eng."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `sxva_servisi_eng` = '".$sxva_servisi_eng."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `sxva_servisi_geo` = '".$sxva_servisi_geo."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `sxva_servisi_eng` = '".$sxva_servisi_eng."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `aqcia_name_geo` = '".$aqcia_name_geo."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `aqcia_name_eng` = '".$aqcia_name_eng."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `aqcia_pirobebi_geo` = '".$aqcia_pirobebi_geo."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `aqcia_pirobebi_eng` = '".$aqcia_pirobebi_eng."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `visible` = '".$visible."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `logo` = '".$logo_name."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `aqcia_photo` = '".$aqcia_photo_name."' WHERE `ganc`.`id` = ".$edit_id.";");
	    mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `image1` = '".$image_name_1."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `image2` = '".$image_name_2."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `image3` = '".$image_name_3."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `image4` = '".$image_name_4."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `image5` = '".$image_name_5."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `image6` = '".$image_name_6."' WHERE `ganc`.`id` = ".$edit_id.";");
		
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `upload_all` = '".$upload_all."' WHERE `ganc`.`id` = ".$edit_id.";");
		mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `upload_aqcia` = '".$upload_aqcia."' WHERE `ganc`.`id` = ".$edit_id.";");
		
		echo '<meta http-equiv="refresh" content="0;url='. $_SERVER['REQUEST_URI'].'">';		
				


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
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<style type="text/css">
.jqte{float:left; margin:15px 0}
input{margin:10px 0;
	width:195px;
	height:35px;
	float:left;
	padding:0 10px;
	color:#999999;
	font-size:12px;
	border:1px solid #999999;
	margin-bottom:20px;
	border-radius:3px;
	-webkit-box-shadow:0 1px 0 #f3f3f3;
	-moz-box-shadow:0 1px 0 #f3f3f3;
	box-shadow:0 1px 0 #f3f3f3;
	-webkit-box-shadow:inset 0px 3px 4px rgba(220,220,220,0.4);
	-moz-box-shadow:inset 0px 3px 4px rgba(220,220,220,0.4);
	box-shadow:inset 0px 3px 4px rgba(220,220,220,0.4);
	}
	
select{margin:10px 0;
	width:215px;
	height:35px;
	padding:0 10px;
	color:#999999;
	font-size:12px;
	border:1px solid #999999;
	margin-bottom:20px;
	border-radius:3px;
	-webkit-box-shadow:0 1px 0 #f3f3f3;
	-moz-box-shadow:0 1px 0 #f3f3f3;
	box-shadow:0 1px 0 #f3f3f3;
	-webkit-box-shadow:inset 0px 3px 4px rgba(220,220,220,0.4);
	-moz-box-shadow:inset 0px 3px 4px rgba(220,220,220,0.4);
	box-shadow:inset 0px 3px 4px rgba(220,220,220,0.4);
	}
	

input[type="submit"]{background-color:#65BBE9; color:#FFF; font-weight:bold;}
input[type="checkbox"]{    width: 48px;
  height: 23px;
  margin-right: 25px;
  margin-top: 12px;
  float: left;}
label{  line-height: 46px; font-size:12px;
  float: left; color:#900; font-weight:bold;}

td{
	font-size:13px;	
}





</style>
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
                    <li><a href="about.html"><?php echo ABOUT_US ?>	</a>  </li>
                    <li><a href="service.html"><?php echo SERVICE ?>	 </a> </li>
                    <li><a href="contact.html"><?php echo CONTACT ?>	</a> </li>
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
                    <a href="#">
						<?php if(isset($_SESSION['username']) && $_SESSION['username'] != ""){
									echo '<a href="?action=logout"> გასვლა </a>';
								}else{
									echo ENTER;
								}
                        ?>
                    </a>  
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
        <div class="logo"><img src="img/logo.png"></div>
    
        <!--reclam-->
        <div>
            <div class="reclam" style="background-color:#FFF"></div>
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
    
    
    
    
    <div class="main_content">
    	
    
    
    
    <center>
        <table border="0" cellspacing="0" bordercolor="#C0C0C0" width="99.8%" style="border-left: 7px solid #316686;
  border-right: 7px solid #316686;" id="AutoNumber1" style="border-collapse: collapse; width:100%;" cellpadding="0">
            <tbody>
                <td width="100%" height="51">
                    

<div align="center">
    <center>
        <table border="0" cellspacing="0" bordercolor="#C0C0C0" width="100%" id="AutoNumber1" height="273" style="border-collapse: collapse" cellpadding="0">
            <tbody>
           
            <tr>
                <td width="98%" bgcolor="#EFEFEF" height="54">
                    <p align="center">
                    </p>
                    
                    <form method="post" action="<?php print $_SERVER['REQUEST_URI']; ?>" enctype="multipart/form-data">
                    
                        <div align="center">
                        <table border="0" width="97%" id="table1" cellspacing="0" cellpadding="0">
                            <tbody><tr>
                                <td  align="right">&nbsp;</td>
                                <td  align="center">&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
                            
                            <tr>
                                <td width="150" height="30"  align="center" bgcolor="#C0C0C0"><b>ძირითადი ინფ.</b></td>
                                <td width="10" style="width:10px;" align="center" bgcolor="#990000">&nbsp;</td>
                                <td  bgcolor="#C0C0C0"><strong>&nbsp;&nbsp;თარიღი | სახელი | პაროლი | ლოგო | კატეგორია | ქვეკატეგორია</strong></td>
                            </tr>
                            
                            <tr>
                                <td  align="right">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

<!-- ganc_periodi -->
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>განც. განახლება</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="date" name="ganc_periodi"  value="<?php echo $edit_row["ganc_periodi"]; ?>">
                                </td>
                            </tr>

                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- USERNAME -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სახელი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="username"  value="<?php echo $edit_row["username"]; ?>">
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- USERPASS -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>პაროლი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="userpass"  value="<?php echo $edit_row["userpass"]; ?>">
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- LOGO -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>ლოგო</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="file" name="logo" />
                                    <img src="<?php echo $image_dir.$edit_row["logo"]; ?>" width="50" height="35" style="margin:10px;" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- CATEGORY -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>კატეგორია</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <select id="main" name="category" onChange="mn(this)">

                                        
                                    </select>

                                </td>
                            </tr>
                            

                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- SUB CATEGORY -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>ქვე კატეგორია</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <select id="sub" name="subcat">
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td  align="right">&nbsp;</td>
                                <td  align="center">&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>    
<!-- status  -->                                
                             <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>კომპანიის სტატუსი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <select name="statusi">
                                    	<option value="1" <?php  if($edit_row["statusi"] == 1){ echo 'selected="selected"';} ?>>Standard</option>
                                        <option value="2" <?php  if($edit_row["statusi"] == 2){ echo 'selected="selected"';} ?>>Standard +</option>
                                    	<option value="3" <?php  if($edit_row["statusi"] == 3){ echo 'selected="selected"';} ?>>Vip</option>
                                        <option value="4" <?php  if($edit_row["statusi"] == 4){ echo 'selected="selected"';} ?>>Vip +</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td  align="right">&nbsp;</td>
                                <td  align="center">&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>    
<!-- Visible  -->                                
                             <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>კომპანიის სტატუსი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="checkbox" value="1" name="visible" <?php  if($edit_row["statusi"] == 1){ echo 'checked="checked"';} ?>  />
                                </td>
                            </tr>
                            
                            <tr>
                                <td  align="right">&nbsp;</td>
                                <td  align="center">&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
                            
                            
                            <tr>
                                <td width="150" height="30"  align="center" bgcolor="#C0C0C0"><b>კომპანიის ინფ.</b></td>
                                <td width="10" style="width:10px;" align="center" bgcolor="#990000">&nbsp;</td>
                                <td  bgcolor="#C0C0C0"><strong>&nbsp;&nbsp; კომპანიიის სახელი &nbsp;|&nbsp;კომპანიის შესახებ | მისამამართი | ნომერი | FB | ელ-ფოსტა | რუკა | სხვა სერვისი | ასატვირთი ფაილი</strong></td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- Company Name  -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>კომპანიის სახელწოდება </b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="company"  value="<?php echo $edit_row["company"]; ?>" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td  align="right">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            
<!-- ABOUT COMPANY GEO -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>კომპანიის შესახებ GEO</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                <textarea name="about_company_geo" class="jqte-abouteg" style="float:left"><?php echo $edit_row["about_company_geo"]; ?></textarea>
                                <script>
                                    $('.jqte-abouteg').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-abouteg').jqte({"status" : jqteStatus})
                                    });
                                </script>                                    
                                </td>
                            </tr>
                            
                             <tr>
                                <td  align="right">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            
<!-- ABOUT COMPANY  ENG-->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>კომპანიის შესახებ ENG</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                <textarea name="about_company_eng" class="jqte-aboutee" style="float:left"><?php echo $edit_row["about_company_eng"]; ?></textarea>
                                <script>
                                    $('.jqte-aboutee').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-aboutee').jqte({"status" : jqteStatus})
                                    });
                                </script>                                    
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- NOMERI -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>ნომერი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="nomeri"  value="<?php echo $edit_row["nomeri"]; ?>" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- SAITI -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>საიტი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="saiti"  value="<?php echo $edit_row["saiti"]; ?>" />
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- FACEBOOK -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>FACEBOOK</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="facebook"  value="<?php echo $edit_row["facebook"]; ?>" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- SKYPE -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>SKYPE</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="skype"  value="<?php echo $edit_row["skype"]; ?>" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- MAILI -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>ელ-ფოსტა</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="maili"  value="<?php echo $edit_row["maili"]; ?>" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- RUKA -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>რუკა</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="ruka"  value="<?php echo $edit_row["ruka"]; ?>" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- ALL Upload -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>მიმაგრებული ფაილი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="file" name="upload_all"  value="<?php echo $edit_row["upload_all"]; ?>" />
                                </td>
                            </tr>
                            
                             <tr>
                                <td  align="right">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            
<!-- SXVA SERVISI GEO -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სხვა სერვისი GEO</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                <textarea name="sxva_servisi_geo" class="jqte-otherg" style="float:left"><?php echo $edit_row["sxva_servisi_geo"]; ?></textarea>
                                <script>
                                    $('.jqte-otherg').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-otherg').jqte({"status" : jqteStatus})
                                    });
                                </script>                                    
                                </td>
                            </tr>
                            
                             <tr>
                                <td  align="right">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            
<!-- SXVA SERVISI ENG -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სხვა სერვისი ENG</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                <textarea name="sxva_servisi_eng" class="jqte-othere" style="float:left"><?php echo $edit_row["sxva_servisi_eng"]; ?></textarea>
                                <script>
                                    $('.jqte-othere').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-othere').jqte({"status" : jqteStatus})
                                    });
                                </script>                                    
                                </td>
                            </tr>
                                                       
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
                            <tr>
                                <td width="150" height="30"  align="center" bgcolor="#C0C0C0"><b>კატეგორიების ინფ.</b></td>
                                <td width="10" style="width:10px;" align="center" bgcolor="#990000">&nbsp;</td>
                                <td  bgcolor="#C0C0C0"><strong>&nbsp;&nbsp; პირადი ინფორმაცია: სამუშაო საათები | სამზარეულო | დარბაზი | სწავლება | და ა.შ.</strong></td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- SAATEBI_GEO -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სამუშო საათები GEO </b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
								<textarea name="saatebi_geo" class="jqte-saatebig" style="float:left"><?php echo $edit_row["saatebi_geo"]; ?></textarea>
                                <script>
                                    $('.jqte-saatebig').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-saatebig').jqte({"status" : jqteStatus})
                                    });
                                </script>
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- SAATEBI_ENG -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სამუშო საათები ENG </b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
								<textarea name="saatebi_eng" class="jqte-saatebie" style="float:left"><?php echo $edit_row["saatebi_eng"]; ?></textarea>
                                <script>
                                    $('.jqte-saatebie').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-saatebie').jqte({"status" : jqteStatus})
                                    });
                                </script>
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- SAMZAREULO GEO -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სამზარეულო GEO</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="samzareulo_geo"  value="<?php echo $edit_row["samzareulo_geo"]; ?>">
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- SAMZAREULO ENG -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სამზარეულო ENG</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="samzareulo_eng"  value="<?php echo $edit_row["samzareulo_eng"]; ?>">
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- DARBAZI_GEO -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>დარბაზი GEO </b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
								<textarea name="darbazi_geo" class="jqte-darbazig" style="float:left"><?php echo $edit_row["darbazi_geo"]; ?></textarea>
                                <script>
                                    $('.jqte-darbazig').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-darbazig').jqte({"status" : jqteStatus})
                                    });
                                </script>
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- DARBAZI_ENG -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b> დარბაზი  ENG </b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
								<textarea name="darbazi_eng" class="jqte-darbazie" style="float:left"><?php echo $edit_row["darbazi_eng"]; ?></textarea>
                                <script>
                                    $('.jqte-darbazie').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-darbazie').jqte({"status" : jqteStatus})
                                    });
                                </script>
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- SASWAVLEBLIS SATATUSI GEO -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სასწავლებლის სტატუსი GEO</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="swavlebis_statusi_geo"  value="<?php echo $edit_row["swavlebis_statusi_geo"]; ?>">
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- SASWAVLEBLIS SATATUSI ENG -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სასწავლებლის სტატუსი ENG</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="swavlebis_statusi_eng"  value="<?php echo $edit_row["swavlebis_statusi_eng"]; ?>">
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- SWAVLEBILS SAFEXURI GEO -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სასწავლებლის საფეხური GEO</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="swavlebis_safexuri_geo"  value="<?php echo $edit_row["swavlebis_safexuri_geo"]; ?>">
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- SWAVLEBILS SAFEXURI ENG -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სასწავლებლის საფეხური ENG</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="swavlebis_safexuri_eng"  value="<?php echo $edit_row["swavlebis_safexuri_eng"]; ?>">
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- MIGEBA SASWAVLEBELSHI -->  
                          
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სასწავლებელში მიღება</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="date" name="migeba"  value="<?php echo $edit_row["migeba"]; ?>">
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- REKVIZITEBI -->  
                          
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>საბანკო რეკვიზიტები</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="rekviziti"  value="<?php echo $edit_row["rekviziti"]; ?>">
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- SMS NOMERI -->  
                          
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>დარეკეთ ან დაგვიმესიჯეთ</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="sms"  value="<?php echo $edit_row["sms"]; ?>">
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- PARTNIOREBI_GEO -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>პარტნიორები GEO </b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
								<textarea name="partniorebi_geo" class="jqte-partniorebig" style="float:left"><?php echo $edit_row["partniorebi_geo"]; ?></textarea>
                                <script>
                                    $('.jqte-partniorebig').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-partniorebig').jqte({"status" : jqteStatus})
                                    });
                                </script>
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- PARTNIOREBI_ENG -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b> პარტნიორები  ENG </b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
								<textarea name="partniorebi_eng" class="jqte-partniorebie" style="float:left"><?php echo $edit_row["partniorebi_eng"]; ?></textarea>
                                <script>
                                    $('.jqte-partniorebie').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-partniorebie').jqte({"status" : jqteStatus})
                                    });
                                </script>
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
                            <tr>
                                <td width="150" height="30"  align="center" bgcolor="#C0C0C0"><b>სურათები</b></td>
                                <td width="10" style="width:10px;" align="center" bgcolor="#990000">&nbsp;</td>
                                <td  bgcolor="#C0C0C0"><strong>&nbsp;&nbsp; სურათები</strong></td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- SURATI 1 -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სურათი 1)</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="file" name="surati1"  />
                                    
                                    <img src="<?php echo $image_dir.$edit_row["image1"]; ?>" width="50" height="35" style="margin:10px;" />
                                    
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- SURATI 2 -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სურათი 2)</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="file" name="surati2" />
                                    <img src="<?php echo $image_dir.$edit_row["image2"]; ?>" width="50" height="35" style="margin:10px;" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- SURATI 3 -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სურათი 3)</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="file" name="surati3"  />
                                    <img src="<?php echo $image_dir.$edit_row["image3"]; ?>" width="50" height="35" style="margin:10px;" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- SURATI 4 -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სურათი 4)</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="file" name="surati4"  />
                                    <img src="<?php echo $image_dir.$edit_row["image4"]; ?>" width="50" height="35" style="margin:10px;" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- SURATI 5 -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სურათი 5)</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="file" name="surati5" />
                                    <img src="<?php echo $image_dir.$edit_row["image5"]; ?>" width="50" height="35" style="margin:10px;" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- SURATI 6 -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>სურათი 6)</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="file" name="surati6" />
                                    <img src="<?php echo $image_dir.$edit_row["image6"]; ?>" width="50" height="35" style="margin:10px;" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td  align="right">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            
                            <tr>
                                <td width="150" height="30"  align="center" bgcolor="#C0C0C0"><b>მდებარეობა</b></td>
                                <td width="10" style="width:10px;" align="center" bgcolor="#990000">&nbsp;</td>
                                <td  bgcolor="#C0C0C0"><strong>&nbsp;&nbsp;ქალაქი | რაიონი | უბანი მისამართი </strong></td>
                            </tr>
                            
                            <tr>
                                <td  align="right">&nbsp;</td>
                                <td  align="center">&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
<!-- qalaqi -->                  
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>ქალაქი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <select name="qalaqi">
                                    	<option <?php  if($edit_row["statusi"] == "თბილისი"){ echo 'selected="selected"';} ?>>თბილისი</option>
                                        <option <?php  if($edit_row["statusi"] == "მცხეთა"){ echo 'selected="selected"';} ?>>მცხეთა</option>
                                    	<option></option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td  align="right">&nbsp;</td>
                                <td  align="center">&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
<!-- raioni -->                   
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>რაიონი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <select name="raioni">
                                    	<option <?php  if($edit_row["statusi"] == "საბურთალო"){ echo 'selected="selected"';} ?>>საბურთალო</option>
                                        <option <?php  if($edit_row["statusi"] == "ვაკე"){ echo 'selected="selected"';} ?>>ვაკე</option>
                                    	<option <?php  if($edit_row["statusi"] == "ვერა"){ echo 'selected="selected"';} ?>>ვერა</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td  align="right">&nbsp;</td>
                                <td  align="center">&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
<!-- ubani -->                    
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>უბანი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <select name="ubani">
                                    	<option <?php  if($edit_row["statusi"] == "ფონიჭალა"){ echo 'selected="selected"';} ?>>ფონიჭალა</option>
                                        <option <?php  if($edit_row["statusi"] == "ტაშკენტი"){ echo 'selected="selected"';} ?>>ტაშკენტი</option>
                                    	<option <?php  if($edit_row["statusi"] == "კანდელაკი"){ echo 'selected="selected"';} ?>>კანდელაკი</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- MISAMARTI GEO -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b> მისამართი GEO</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="misamarti_geo"  value="<?php echo $edit_row["misamarti_geo"]; ?>" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- MISAMARTI ENG -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b> მისამართი ENG</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="misamarti_eng"  value="<?php echo $edit_row["misamarti_eng"]; ?>" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td  align="right">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            
                            
<script type="text/javascript">

var model = new Array("ქველმოქმედება", "ჯანდაცვა და მედიცინა", "განათლება და ტრეინინგი", "კვების ობიექტები", "სილამაზე და ჯანმრთელობა", "საბავშვო სივრცე", "გართობა", "დასვენება", "მომსახურეობის სფერო", "უძრავი ქონება", "ავტო", " ");

    var marka = new Array(
                        new Array("ეკლესია–მონასტრების მშენებლობა/აღდგენა", "მიუსაფარ ბავშვთა სახლები", "სოციალურად დაუცველები", "მოხუცთა სახლები", "სნეულთა დახმარება"),
                        new Array("სამშობიაროები", "ონკოლოგია", "პლასტიკური მედიცინა", "სტომატოლოგია", "რეპროდუქტოლოგია", "სამედიცინო აპარატურა", "გინეკოლოგია/მამოლოგია/უროლოგია", "ნევროლოგია", "ფსიქოლოგია", "დიაგნოსტიკა", "ლაბორატორიული კვლევები", "ფარმაცევტული კომპანიები,აფთიაქები", "კარდიოლოგია", "პედიატრია", "სისხლის ბანკი", "ოფთალმოლოგიური კლინიკები"),
                        new Array("უნივერსიტეტი", "სკოლა", "საბავშვო ბაღი", "კოლეჯი", "ტრენინგ ცენტრი", "უცხო ენათა ცენტრი"),
                        new Array("რესტორანი", "კაფე", "ბარი", "სწრაფი კვება", "სუში", "პაბი, ლუდხანა", "პიცერია", "სახინკლე,სამწვადე"),
                        new Array("სილამაზის სალონი", "სოლარიუმი", "ფიტნესი", "ესთეტიკის ცენტრი", "იოგა", "საუნა", "საცურაო აუზი", "აერობიკა", "სპორტულ/გამაჯანსაღებელი"),
                        new Array("გასართობი ცენტრი", "საბავშვო მაღაზია"),
                        new Array("ღამის კლუბი", "კარაოკე", "საბილიარდო და ბოულინგის ცენტრი", "კინო", "თეატრი", "გალერეა", "ოპერა"),
                        new Array("სასტუმრო", "ტურისტული სააგენტო", "ავიაკომპანია", "ტურები"),
                        new Array("იურიდიული მომსახურება", "ნოტარიული მომსახურება", "სადაზღვევო მომსახურება", "საბანკო მომსახურება", "მიკროსაფინანსო კომპანია", "ბუღალტერია", "კომპიუტერული მომსახურება", "სარეკლამო კომპანია", "ტვირთების გადაზიდვის სერვისი", "ტაქსი", "დაცვის სამსახური", "ციფრული ბეჭდვა", "კავშირგაბმულობა", "ფოტო სტუდია", "ქიმწმენდა, რეცხვა", "დიზაინი, საქორწილო გაფორმება", "ტანსაცმლის გაქირავების სერვისი", "დღესასწაულების ორგანიზება", "ვებ–გვერდის დამზადება/დიზაინი", "სხვა (თხილამურების, სალაშქრო მოწყობილობების გაქირავება)"),
                        new Array("უძრავი ქონების სააგენტო", "სამშენებლო კომპანია", "მიმდინარე მშენებლობები", "ინტერიერის/ექსტერიერის დიზაინი", "გათბობა, ვენტილაცია და კონდიცირება", "სამშენებლო–სარემონტო მასალების მაღაზია", "კარ–ფანჯრების  დამზადება"),
                        new Array("ავტოგაქირავება", "ავტოსკოლა", "ბენზინგასამართი სადგური", "გაზგასამართი სადგური", "ავტომობილის გაზის სისტემები", "ავტოსამრეცხაო", "ავტომობილის აქსესუარები", "სერვის ცენტრები", "ავტოსერვისი შენს გზაზე"),
                        new Array("ავეჯი", "ტექნიკა", "ტანსაცმელი/ფეხსაცმელი", "სპორტული მაღაზია", "პარფიუმერია", "ოპტიკური სალონი", "სუპერმარკეტი შენს უბანში")
                        );
    
    (function () {
        
        var txt = "";

        for (var i = 0; i < model.length; i++) {
            txt += "<option value='" + i + "'>" + model[i] + "</option>";
        }


        document.getElementById("main").innerHTML = "<option value='-1'></option>"+txt;
    })();

    function mn(t) {
        var txt = "";
        for (var i = 0; i < marka[t.value].length; i++) {
            txt += "<option value='" + i + "'>" + marka[t.value][i] + "</option>";
        }
        document.getElementById("sub").innerHTML = txt;
    }



</script>                             
                            
                                                      
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>

                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;
                                    <input type="submit" value="Edit Company" name="redaqtireba" id="btnSubmit" />
                                </td>
                            </tr>
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                        </tbody></table>
                        </div>
                    </form>
                </td>
            </tr>
            <tr>
                <td width="98%" height="16"></td>
            </tr>
            <tr>
                <td width="98%" height="40" align="center" valign="top"></td>
            </tr>
        </tbody>
        </table>
    </center>
</div>    
                </td>
            </tr>
        </tbody>
        </table>

</center>
    
    
    
    
    
    
	</div><!-- main_content -->
    
    
    
    
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
        <div class="bottom_reclams"></div>
        <div class="bottom_reclams"></div>
        <div class="bottom_reclams"></div>
        <div class="bottom_reclams"></div>
        <div class="bottom_reclams"></div>
    </div>
    
    
    <!--bankomatebi da valutebi-->
    <div class="valuta_bankomati">
        <div class="konvertori">ვალუტის კონვერტორი</div>
        <div class="kursi">ვალუტის კურსი</div>
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
