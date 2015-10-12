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