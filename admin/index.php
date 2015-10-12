<?php session_start(); 


// bazis gamopdzaxeba
require_once ("config/database.php");

// errorebi
error_reporting (0);


if (isset($_SESSION['username'])) {
		$user_sql = mysql_query("SELECT * FROM admin WHERE username = '".$_SESSION['username']."'");
		$num_rows = mysql_num_rows($user_sql);
		}

if (!isset($_SESSION['username']) || $_SESSION['username'] == '' || $num_rows != 1){
	header("location: login.php");
	exit(0);
}
	
	
if (isset($_GET['action']) && $_GET['action'] == "logout")
{
	session_destroy();
	header("Location: login.php");
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/demo.css">
<link type="text/css" rel="stylesheet" href="css/jquery-te-1.4.0.css">
<link rel="stylesheet" type="text/css" href="css/<?php echo $lang; ?>.css" />

<link rel="stylesheet" href="./panel_files/istoolbar.css" type="text/css">

<script language="javascript" type="text/javascript" src="./panel_files/innovaeditor.js"></script>



<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
<script type="text/javascript" src="js/selects.js" charset="utf-8"></script>

<style type="text/css">
	td.calendarDateInput {letter-spacing:normal;line-height:normal;font-family:Tahoma,Sans-Serif;font-size:11px;}
	select.calendarDateInput {letter-spacing:.06em;font-family:Verdana,Sans-Serif;font-size:11px;}
	input.calendarDateInput {letter-spacing:.06em;font-family:Verdana,Sans-Serif;font-size:11px;}
</style>

<link href="./panel_files/en.css" rel="stylesheet" type="text/css">    

</head>

<body topmargin="0" leftmargin="0">
                <table border="0" cellspacing="0" width="100%" id="AutoNumber1" style="border-collapse: collapse" bordercolor="#111111" cellpadding="0" height="330">
            <tbody><tr>
                <td width="50%" background="./panel_files/admin_logo_foni.jpg" height="90" valign="top">
                    <div class="logo">
                        <a href=""><h1>Free info</h1></a>
                    </div>
                </td>

                <td width="50%" background="./panel_files/admin_logo_foni.jpg" height="90">
                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="260" id="AutoNumber2" align="right">
                        <tbody><tr>
                            <td width="6%" style="border-left-width: medium; border-right-width: medium; border-top-width: medium; border-bottom-style: dotted; border-bottom-width: 1" bordercolor="#C0C0C0">
                                <img border="0" src="./panel_files/user.jpg" width="10" height="17"></td>
                            <td width="3%" style="border-left-width: medium; border-right-width: medium; border-top-width: medium; border-bottom-style: dotted; border-bottom-width: 1" bordercolor="#C0C0C0">&nbsp;</td>
                            <td style="border-left-width: medium; border-right-width: medium; border-top-width: medium; border-bottom-style: dotted; border-bottom-width: 1" bordercolor="#C0C0C0">
                            <a href="?action=logout">გამოსვლა ( <b><?php echo $_SESSION['username']; ?></b> )</a></td>
                        </tr>

                    </tbody></table>
                </td>
            </tr>

            <tr>
                <td width="100%" colspan="2" height="241" style="border-bottom-style: solid; border-bottom-width: 1">

                    <table border="0" cellspacing="0" width="100%" id="AutoNumber3" style="border-collapse: collapse" bordercolor="#111111" cellpadding="0">
                        <tbody><tr>
                            <td width="10" valign="top">
                                <script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
window.open(theURL,winName,features);
}
//-->
</script> 
<meta http-equiv="Content-Language" content="en-us">

<table border="0" cellspacing="1" width="249" id="AutoNumber1" style="border-left-width: 0; border-top-width: 0; border-bottom-width: 0">
<tbody>

<tr>
	<td height="15">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>


<tr>
    <td width="10" style="border-style:none; border-width:medium; ">&nbsp;</td>
    <td width="23" style="border-left-width: medium; border-right-width: 1; ">
        <img border="0" src="./panel_files/web.jpg" width="18" height="25">
    </td>
    <td width="206"style="border-left-width: 1; border-right-width: 1;">
        <b>Web Management</b>
    </td>
</tr>

<tr>
	<td height="17" colspan="3" bgcolor="#EFEFEF">&nbsp;</td>
</tr>



<tr>
    <td width="10" style="border-style:none; border-width:medium; ">&nbsp;</td>
    <td width="23" style="border-bottom:1px solid #667">
        <img border="0" src="./panel_files/content.jpg" width="18" height="25">
    </td>
    <td width="206" style="border-bottom:1px solid #667">
        <b>Content Management</b>
    </td>
</tr>

<tr>
    <td>&nbsp;</td>
    <td align="right"></td>
    <td></td>
</tr>

<tr>
    <td>&nbsp;</td>
    <td align="right"><img border="0" src="./panel_files/kutxe.jpg" width="8" height="9"></td>
    <td><a href="?page=companies" <?php if(isset($_GET["page"]) && $_GET["page"] == "companies"){ echo 'style="color: #006DB7;text-decoration: underline;"'; } ?>><strong>კომპანიები</strong> </a></td>
</tr>

<tr>
    <td>&nbsp;</td>
    <td align="right"><img border="0" src="./panel_files/kutxe.jpg" width="8" height="9"></td>
    <td><a href="?page=add_company" <?php if(isset($_GET["page"]) && $_GET["page"] == "add_company"){ echo 'style="color: #006DB7;text-decoration: underline;"'; } ?>><strong>კომპანიის დამატება</strong> </a></td>
</tr>

<tr>
    <td>&nbsp;</td>
    <td align="right"><img border="0" src="./panel_files/kutxe.jpg" width="8" height="9"></td>
    <td><a href="?page=about"<?php if(isset($_GET["page"]) && $_GET["page"] == "about"){ echo 'style="color: #006DB7;text-decoration: underline;"'; } ?>> <strong>ჩვენ შესახებ</strong></a></td>
</tr>

<tr>
    <td>&nbsp;</td>
    <td align="right"><img border="0" src="./panel_files/kutxe.jpg" width="8" height="9"></td>
    <td><a href="?page=service" <?php if(isset($_GET["page"]) && $_GET["page"] == "service"){ echo 'style="color: #006DB7;text-decoration: underline;"'; } ?>> <strong>სერვისი</strong> </a></td>
</tr>




<tr>
    <td width="10" style="border-style: none; border-width: medium">&nbsp;</td>
    <td width="23" style="border-left-style: none; border-left-width: medium">&nbsp;</td>
    <td width="206" height="500"></td>
</tr>
</tbody></table>                                </td>

                            <td valign="top">
                                <p align="center">
                                    </p><div align="center">
<center>
    
<table border="0" cellspacing="0" bordercolor="#C0C0C0" width="98%" id="AutoNumber1" height="273" style="border-collapse: collapse" cellpadding="0">
        <tbody><tr>
            <td width="98%" height="16"></td>
        </tr>
        <tr>
            <td width="98%" height="16">
                <p align="center"><b>:: Web Management ::</b></p>
            </td>
        </tr>
        <tr>
            <td width="98%" height="16"></td>
        </tr>
        <tr>
            <td width="98%" bgcolor="#EFEFEF" height="19"><p align="center">
            	
            </td>
        </tr>
        <tr>
            <td width="98%" height="51">



<?php 


	if (isset($_GET['page']))
	{
		$action = $_GET['page'];
	}
	else
	{
		$action = "";
	}



	switch ($action)
	{
		case "add_company":
		include "html_blocks/add_company.php";
		break;
		
		case "edit_company":
		include "html_blocks/edit_company.php";
		break;
		
		case "about":
		include "html_blocks/about.php";
		break;
		
		case "companies":
		include "html_blocks/companies.php";
		break;
		
		case "service":
		include "html_blocks/service.php";
		break;
		

		
		
	}

?>













            </td>
        </tr>
        <tr>
            <td width="98%" height="155" align="center" valign="top"></td>
        </tr>
    </tbody></table>
</center>
</div>                                    <p></p>
                            </td></tr></tbody></table>
                </td>
            </tr>
            <tr>
                <td width="100%" colspan="2" height="15" bgcolor="#E4E4E4" style="border-top-style: solid; border-top-width: 1">
                    
                </td>
            </tr>
        </tbody></table>

    

</body></html>