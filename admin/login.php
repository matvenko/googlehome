<?php 
@session_start();
include('config/database.php');



if (isset($_SESSION['admin_user']) && $_SESSION['admin_user'] != ''){
	header("location: index.php");
	exit(0);
}
// ------------------- session ----------------------------

if (isset($_GET['login']) && $_GET['login'] == 'true'){
	$username = isset($_POST['user']) ? $_POST['user'] : '';
	$password = isset($_POST['pass']) ? $_POST['pass'] : '';
	
	
	$q = mysql_query("SELECT id, username, userpass, userstatus FROM `admin` WHERE username = '{$username}' AND userpass = '{$password}' LIMIT 1") or die (mysql_error());
	$r = mysql_fetch_assoc($q);
	
	if (!empty($r)){
		$_SESSION['id'] = $r['id'];
		$_SESSION['username'] = $r['username'];
		$_SESSION['userstatus'] = $r['userstatus'];
		header("location: index.php");
	} else {
		echo '<p align="center"><br><br><br><br><font color="#fff">  მომხმარებლის სახელი არასწორია</font></p>';
	}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="google-site-verification" content="gguu0HWZzPp-ChGhh77visBaBEovZMKAi4CI1eZupbI" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="შესვლა, ავტორიზაცია, პაროლი, googlehome" />
<meta name="description" content="googlehomze avtorizacia, ავტორიზაცია, შესვლა, პაროლი" />
<title>FreeInfo | ავტორიზაცია</title>
<style type="text/css">
input{outline:none;}
.chemigverdi_div{margin-left:20px;}
input[type="text"]{width:173px; height:28px; border-radius:5px; border:1px solid #d2d2d2; margin-bottom:13px; line-height:28px; color:#667; text-indent:8px; font-size:12px}
input[type="password"]{width:173px; height:28px; border-radius:5px; border:1px solid #d2d2d2; margin-bottom:13px; line-height:28px; color:#667; text-indent:8px; font-size:12px}
.chemigverdi_submit_right{padding:5px 10px; background-color:#bb161c; color:#FFF; border-radius:5px; font-weight:bold; }
</style>

<link rel="shortcut icon" href="../img/fav1.png" /> 





<body style="background-image:url(images/back.jpg); background-repeat:repeat;">


<div style="width:220px; height:260px; background-color:#D1CDCD; position:absolute; left:40%; top:30%; border-radius:7px; -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);">
&nbsp;
<p align="center" style="font-family:Verdana, Geneva, sans-serif; font-size:16px; color:#FFF; font-weight:bold; text-shadow:2px 2px 2px #999;">
FreeInfo
</p>

<form method="post" action="?login=true">
	<div class="chemigverdi_div">
		<div class="clearer10"></div>
		<input type="text" name="user" id="check" class="chemigverdi_input" placeholder="მომხმარებლის სახელი" />
		<div class="clearer20"></div>
		<input type="password" name="pass" class="chemigverdi_input" placeholder="პაროლი" />
		<div class="clearer15"></div>
        <input type="submit" value="ავტორიზაცია" border="0" class="chemigverdi_submit_right"/>
        <input type="hidden" style="border:none;" name="login" value="true" />
		<div class="clearer10"></div>
		<input type="hidden" name="dalogineba"  />
	</div><!--chemigverdi_div-->
</form>




<br>
<br>
&nbsp;
<div class="clearer"></div>
</div>




</body>
</html>