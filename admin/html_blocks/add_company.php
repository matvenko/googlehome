<?php


if (isset($_GET['page']) && $_GET['page']=="add_company")
{

	if(isset($_POST['damateba'])){
	
	
	
	


	
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$userpass = 	isset($_POST['userpass']) ? $_POST['userpass'] : '';
	$category = 	isset($_POST['category']) ? $_POST['category'] : '';
	$subcat = 	isset($_POST['subcat']) ? $_POST['subcat'] : '';
	$qalaqi = isset($_POST['qalaqi']) ? $_POST['qalaqi'] : '';
	$raioni = isset($_POST['raioni']) ? $_POST['raioni'] : '';
	$ubani = isset($_POST['ubani']) ? $_POST['ubani'] : '';
	$company = isset($_POST['company']) ? $_POST['company'] : '';
	$misamarti_geo = isset($_POST['misamarti_geo']) ? $_POST['misamarti_geo'] : '';
	$misamarti_eng = isset($_POST['misamarti_eng']) ? $_POST['misamarti_eng'] : '';
	$about_company_geo = isset($_POST['about_company_geo']) ? $_POST['about_company_geo'] : '';
	$about_company_eng = isset($_POST['about_company_eng']) ? $_POST['about_company_eng'] : '';
	$statusi = isset($_POST['statusi']) ? $_POST['statusi'] : '';
	$ganc_tarigi = date("Y-m-d H:i:s");
	$ganc_periodi = isset($_POST['ganc_periodi']) ? $_POST['ganc_periodi'] : '';
	$nomeri = isset($_POST['nomeri']) ? $_POST['nomeri'] : '';
	$saiti = isset($_POST['saiti']) ? $_POST['saiti'] : '';
	$facebook = isset($_POST['facebook']) ? $_POST['facebook'] : '';
	$skype = isset($_POST['skype']) ? $_POST['skype'] : '';
	$maili = isset($_POST['maili']) ? $_POST['maili'] : '';
	$ruka = isset($_POST['ruka']) ? $_POST['ruka'] : '';
	$saatebi_geo = isset($_POST['saatebi_geo']) ? $_POST['saatebi_geo'] : '';
	$saatebi_eng = isset($_POST['saatebi_eng']) ? $_POST['saatebi_eng'] : '';
	$swavlebis_statusi_geo = isset($_POST['swavlebis_statusi_geo']) ? $_POST['swavlebis_statusi_geo'] : '';
	$swavlebis_statusi_eng = isset($_POST['swavlebis_statusi_eng']) ? $_POST['swavlebis_statusi_eng'] : '';
	$swavlebis_safexuri_geo = isset($_POST['swavlebis_safexuri_geo']) ? $_POST['swavlebis_safexuri_geo'] : '';
	$swavlebis_safexuri_eng = isset($_POST['swavlebis_safexuri_eng']) ? $_POST['swavlebis_safexuri_eng'] : '';
	$migeba = isset($_POST['migeba']) ? $_POST['migeba'] : '';
	$samzareulo_geo = isset($_POST['samzareulo_geo']) ? $_POST['samzareulo_geo'] : '';
	$samzareulo_eng = isset($_POST['samzareulo_eng']) ? $_POST['samzareulo_eng'] : '';
	$darbazi_geo = isset($_POST['darbazi_geo']) ? $_POST['darbazi_geo'] : '';
	$darbazi_eng = isset($_POST['darbazi_eng']) ? $_POST['darbazi_eng'] : '';
	$rekviziti = isset($_POST['rekviziti']) ? $_POST['rekviziti'] : '';
	$sms = isset($_POST['sms']) ? $_POST['sms'] : '';
	$partniorebi_geo = isset($_POST['partniorebi_geo']) ? $_POST['partniorebi_geo'] : '';
	$partniorebi_eng = isset($_POST['partniorebi_eng']) ? $_POST['partniorebi_eng'] : '';
	$sxva_servisi_geo = isset($_POST['sxva_servisi_geo']) ? $_POST['sxva_servisi_geo'] : '';
	$sxva_servisi_eng = isset($_POST['sxva_servisi_eng']) ? $_POST['sxva_servisi_eng'] : '';
	$aqcia_name_geo = isset($_POST['aqcia_name_geo']) ? $_POST['aqcia_name_geo'] : '';
	$aqcia_name_eng = isset($_POST['aqcia_name_eng']) ? $_POST['aqcia_name_eng'] : '';
	$aqcia_pirobebi_geo = isset($_POST['aqcia_pirobebi_geo']) ? $_POST['aqcia_pirobebi_geo'] : '';
	$aqcia_pirobebi_eng = isset($_POST['aqcia_pirobebi_eng']) ? $_POST['aqcia_pirobebi_eng'] : '';
	$visible = isset($_POST['visible']) ? $_POST['visible'] : '';


		$tmp_name = $_FILES["upload_all"]["tmp_name"];
		$upload_all = $_FILES["upload_all"]["name"];
		
		
		$tmp_name1 = $_FILES["upload_aqcia"]["tmp_name"];
		$upload_aqcia = $_FILES["upload_aqcia"]["name"];
		
		

		if ( $_FILES["logo"]["name"] != "" )
		{
			$logo = $_FILES["logo"]["tmp_name"];
			$logo_name = sha1( microtime(TRUE) . "_" . $_FILES["logo"]["size"] ) . ".jpg";
		} else {
			$logo = "";
		}


		
		if ( $_FILES["aqcia_photo"]["name"] != "" )
		{
			$aqcia_photo = $_FILES["aqcia_photo"]["tmp_name"];
			$aqcia_photo_name = sha1( microtime(TRUE) . "_" . $_FILES["aqcia_photo"]["size"] ) . ".jpg";
		} else {
			$aqcia_photo_name = "";
		}
		

		if ( $_FILES["surati1"]["name"] != "" )
		{
			$s_1 = $_FILES["surati1"]["tmp_name"];
			$image_name_1 = sha1( microtime(TRUE) . "_" . $_FILES["surati1"]["size"] ) . ".jpg";
			
		} else {
			$image_name_1 = "";
		}

		if ( $_FILES["surati2"]["name"] != "" )
		{
			$s_2 = $_FILES["surati2"]["tmp_name"];
			$image_name_2 = sha1( microtime(TRUE) . "_" . $_FILES["surati2"]["size"] ) . ".jpg";
			
		}else {
			$image_name_2 = "";
		}

		if ( $_FILES["surati3"]["name"] != "" )
		{
			$s_3 = $_FILES["surati3"]["tmp_name"];
			$image_name_3 = sha1( microtime(TRUE) . "_" . $_FILES["surati3"]["size"] ) . ".jpg";
		}else {
			$image_name_3 = "";
		}

		if ( $_FILES["surati4"]["name"] != "" )
		{
			$s_4 = $_FILES["surati4"]["tmp_name"];
			$image_name_4 = sha1( microtime(TRUE) . "_" . $_FILES["surati4"]["size"] ) . ".jpg";
		}else {
			$image_name_4 = "";
		}

		if ( $_FILES["surati5"]["name"] != "" )
		{
			$s_5 = $_FILES["surati5"]["tmp_name"];
			$image_name_5 = sha1( microtime(TRUE) . "_" . $_FILES["surati5"]["size"] ) . ".jpg";
			
		}else {
			$image_name_5 = "";
		}
		
		if ( $_FILES["surati6"]["name"] != "" )
		{
			$s_6 = $_FILES["surati6"]["tmp_name"];
			$image_name_6 = sha1( microtime(TRUE) . "_" . $_FILES["surati6"]["size"] ) . ".jpg";
		}else {
			$image_name_6 = "";
		}

							
							$sql="INSERT INTO `freeinfo_ge`.`ganc` (`id`, `username`, `userpass`, `category`, `subcat`, `qalaqi`, `raioni`, `ubani`, `logo`, `company`, `misamarti_geo`, `misamarti_eng`, `about_company_geo`, `about_company_eng`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `statusi`, `ganc_tarigi`, `ganc_periodi`, `nomeri`, `saiti`, `facebook`, `skype`, `maili`, `ruka`, `saatebi_geo`, `saatebi_eng`, `swavlebis_statusi_geo`, `swavlebis_statusi_eng`, `swavlebis_safexuri_geo`, `swavlebis_safexuri_eng`, `migeba`, `samzareulo_geo`, `samzareulo_eng`, `darbazi_geo`, `darbazi_eng`, `rekviziti`, `sms`, `partniorebi_geo`, `partniorebi_eng`, `sxva_servisi_geo`, `sxva_servisi_eng`, `upload_all`, `upload_aqcia`, `aqcia_name_geo`, `aqcia_name_eng`, `aqcia_photo`, `aqcia_pirobebi_geo`, `aqcia_pirobebi_eng`, `visible`) 
							VALUES (NULL, 
							'".mysql_real_escape_string($username)."', 
							'".mysql_real_escape_string($userpass)."', 
							'".mysql_real_escape_string($category)."', 
							'".mysql_real_escape_string($subcat)."', 
							'".mysql_real_escape_string($qalaqi)."', 
							'".mysql_real_escape_string($raioni)."', 
							'".mysql_real_escape_string($ubani)."', 
							'".mysql_real_escape_string($logo_name)."', 
							'".mysql_real_escape_string($company)."', 
							'".mysql_real_escape_string($misamarti_geo)."', 
							'".mysql_real_escape_string($misamarti_eng)."', 
							'".mysql_real_escape_string($about_company_geo)."',
							'".mysql_real_escape_string($about_company_eng)."', 
							'".mysql_real_escape_string($image_name_1)."', 
							'".mysql_real_escape_string($image_name_2)."', 
							'".mysql_real_escape_string($image_name_3)."', 
							'".mysql_real_escape_string($image_name_4)."', 
							'".mysql_real_escape_string($image_name_5)."', 
							'".mysql_real_escape_string($image_name_6)."', 
							'".mysql_real_escape_string($statusi)."', 
							'".mysql_real_escape_string($ganc_tarigi)."', 
							'".mysql_real_escape_string($ganc_periodi)."', 
							'".mysql_real_escape_string($nomeri)."', 
							'".mysql_real_escape_string($saiti)."', 
							'".mysql_real_escape_string($facebook)."', 
							'".mysql_real_escape_string($skype)."', 
							'".mysql_real_escape_string($maili)."', 
							'".mysql_real_escape_string($ruka)."', 
							'".mysql_real_escape_string($saatebi_geo)."', 
							'".mysql_real_escape_string($saatebi_eng)."', 
							'".mysql_real_escape_string($swavlebis_statusi_geo)."', 
							'".mysql_real_escape_string($swavlebis_statusi_eng)."', 
							'".mysql_real_escape_string($swavlebis_safexuri_geo)."', 
							'".mysql_real_escape_string($swavlebis_safexuri_eng)."', 
							'".mysql_real_escape_string($migeba)."', 
							'".mysql_real_escape_string($samzareulo_geo)."', 
							'".mysql_real_escape_string($samzareulo_eng)."', 
							'".mysql_real_escape_string($darbazi_geo)."', 
							'".mysql_real_escape_string($darbazi_eng)."', 
							'".mysql_real_escape_string($rekviziti)."', 
							'".mysql_real_escape_string($sms)."', 
							'".mysql_real_escape_string($partniorebi_geo)."', 
							'".mysql_real_escape_string($partniorebi_eng)."', 
							'".mysql_real_escape_string($sxva_servisi_geo)."', 
							'".mysql_real_escape_string($sxva_servisi_eng)."', 
							'".mysql_real_escape_string($upload_all)."', 
							'".mysql_real_escape_string($upload_aqcia)."', 
							'".mysql_real_escape_string($aqcia_name_geo)."', 
							'".mysql_real_escape_string($aqcia_name_eng)."', 
							'".mysql_real_escape_string($aqcia_photo)."', 
							'".mysql_real_escape_string($aqcia_pirobebi_geo)."', 
							'".mysql_real_escape_string($aqcia_pirobebi_eng)."', 
							'".mysql_real_escape_string($visible)."')";
							mysql_query($sql) or die (mysql_error());
							echo '<br /><font size="4" color="#FF0000"><strong>წარმატებით დაემატა</strong></font><br />';
							echo '<meta http-equiv="refresh" content="4; url='.$_SERVER['REQUEST_URI'].'"';

				
				if($sql=true){
				
					$last_query = mysql_fetch_object(mysql_query("SELECT MAX(id) as id FROM ganc"));
					$last_id = $last_query->id;
		
		
					ini_set("display_errors", 0);
					$image_dire = "../upload/";
					if ( !is_dir($image_dire . $last_id) ) {
						mkdir($image_dire . $last_id . "/", 0777);
					}
				
					$image_dir = "../upload/". $last_id . "/";	
					
					
					move_uploaded_file($tmp_name, $image_dir.$upload_all);
					move_uploaded_file($tmp_name1, $image_dir.$upload_aqcia);
					move_uploaded_file($aqcia_photo, $image_dir . $aqcia_photo_name);
					move_uploaded_file($logo, $image_dir . $logo_name);
					move_uploaded_file($s_1, $image_dir . $image_name_1);
					move_uploaded_file($s_2, $image_dir . $image_name_2);
					move_uploaded_file($s_5, $image_dir . $image_name_3);
					move_uploaded_file($s_4, $image_dir . $image_name_4);
					move_uploaded_file($s_5, $image_dir . $image_name_5);
					move_uploaded_file($s_6, $image_dir . $image_name_6);
				}


	}
}




?>





<div class="wrapper">
<style type="text/css">
.jqte{float:left; margin:15px 0}
input{margin:10px 0;
	width:195px;
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
label{  line-height: 46px;
  float: left; color:#900; font-weight:bold;}

</style>



<center>
        <table border="0" cellspacing="0" bordercolor="#C0C0C0" width="98%" id="AutoNumber1" height="273" style="border-collapse: collapse" cellpadding="0">
            <tbody>
                <td width="98%" height="51">
                    

<div align="center">
    <center>
        <table border="0" cellspacing="0" bordercolor="#C0C0C0" width="98%" id="AutoNumber1" height="273" style="border-collapse: collapse" cellpadding="0">
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
<!-- ganc_tarigi -->
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>Date</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="date" name="ganc_tarigi" value="">
                                </td>
                            </tr>

                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- ganc_periodi -->
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>განც. პერიოდი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="date" name="ganc_periodi"  value="">
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
                                    <input type="text" name="username"  value="">
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
                                    <input type="text" name="userpass"  value="">
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
                                    <input type="file" name="logo" >
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
                                    	<option value="1">Standard</option>
                                        <option value="2">Standard +</option>
                                    	<option value="3">Vip</option>
                                        <option value="4">Vip +</option>
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
                                    <input type="checkbox" value="1" name="visible" checked="checked" />
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
                                    <input type="text" name="company"  value="">
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
                                <textarea name="about_company_geo" class="jqte-abouteg" style="float:left"></textarea>
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
                                <textarea name="about_company_eng" class="jqte-aboutee" style="float:left"></textarea>
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
                                    <input type="text" name="nomeri"  value="">
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
                                    <input type="text" name="saiti"  value="">
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
                                    <input type="text" name="facebook"  value="">
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
                                    <input type="text" name="skype"  value="">
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
                                    <input type="text" name="maili"  value="">
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
                                    <input type="text" name="ruka"  value="">
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
                                    <input type="file" name="upload_all" >
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
                                <textarea name="sxva_servisi_geo" class="jqte-otherg" style="float:left"></textarea>
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
                                <textarea name="sxva_servisi_eng" class="jqte-othere" style="float:left"></textarea>
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
								<textarea name="saatebi_geo" class="jqte-saatebig" style="float:left"></textarea>
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
								<textarea name="saatebi_eng" class="jqte-saatebie" style="float:left"></textarea>
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
                                    <input type="text" name="samzareulo_geo"  value="">
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
                                    <input type="text" name="samzareulo_eng"  value="">
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
								<textarea name="darbazi_geo" class="jqte-darbazig" style="float:left"></textarea>
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
								<textarea name="darbazi_eng" class="jqte-darbazie" style="float:left"></textarea>
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
                                    <input type="text" name="swavlebis_statusi_geo"  value="">
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
                                    <input type="text" name="swavlebis_statusi_eng"  value="">
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
                                    <input type="text" name="swavlebis_safexuri_geo"  value="">
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
                                    <input type="text" name="swavlebis_safexuri_eng"  value="">
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
                                    <input type="date" name="migeba"  value="">
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
                                    <input type="text" name="rekviziti"  value="">
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
                                    <input type="text" name="sms"  value="">
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
								<textarea name="partniorebi_geo" class="jqte-partniorebig" style="float:left"></textarea>
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
								<textarea name="partniorebi_eng" class="jqte-partniorebie" style="float:left"></textarea>
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
                                    <input type="file" name="surati1" value="<?php if(isset($_POST['surati1']) && $_POST['surati1'] != ''){ echo $_POST['surati1']; } ?>" />
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
                                    <input type="file" name="surati2" value="<?php if(isset($_POST['surati2']) && $_POST['surati2'] != ''){ echo $_POST['surati2']; } ?>"  />
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
                                    <input type="file" name="surati3" value="<?php if(isset($_POST['surati3']) && $_POST['surati3'] != ''){ echo $_POST['surati3']; } ?>"  />
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
                                    <input type="file" name="surati4" value="<?php if(isset($_POST['surati4']) && $_POST['surati4'] != ''){ echo $_POST['surati4']; } ?>"  />
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
                                    <input type="file" name="surati5" value="<?php if(isset($_POST['surati5']) && $_POST['surati5'] != ''){ echo $_POST['surati5']; } ?>" />
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
                                    <input type="file" name="surati6" value="<?php if(isset($_POST['surati6']) && $_POST['surati6'] != ''){ echo $_POST['surati6']; } ?>" />
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
                                    	<option>თბილისი</option>
                                        <option>მცხეთა</option>
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
                                    	<option>საბურთალო</option>
                                        <option>ვაკე</option>
                                    	<option>ვერა</option>
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
                                    	<option>ფონიჭალა</option>
                                        <option>ტაშკენტი</option>
                                    	<option>კანდელაკი</option>
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
                                    <input type="text" name="misamarti_geo"  value="" />
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
                                    <input type="text" name="misamarti_eng"  value="" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td  align="right">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="150" height="30"  align="center" bgcolor="#C0C0C0"><b>აქცია</b></td>
                                <td width="10" style="width:10px;" align="center" bgcolor="#990000">&nbsp;</td>
                                <td  bgcolor="#C0C0C0"><strong>&nbsp;&nbsp;ასატვირთი ფაილი | აქციის სახელი | აქციის სურათი | აქციის პირობები</strong></td>
                            </tr>
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- Aqciis Upload -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>აქციის ფაილი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                  <input type="file" name="upload_aqcia" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- aqciis saxeli geo -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b> აქციის სახელი GEO</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="aqcia_name_geo"  value="" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
                            
<!-- aqciis saxeli eng -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b> აქციის სახელი ENG</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                    <input type="text" name="aqcia_name_eng"  value="" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                            </tr>
<!-- Aqciis photo -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>აქციის სურათი</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                  <input type="file" name="aqcia_photo" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td  align="right">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            
<!-- aqciis_piroba GEO -->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>აქციის პირობა GEO</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                <textarea name="aqcia_pirobebi_geo" class="jqte-aqciag" style="float:left"></textarea>
                                <script>
                                    $('.jqte-aqciag').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-aqciag').jqte({"status" : jqteStatus})
                                    });
                                </script>                                    
                                </td>
                            </tr>
                            
                             <tr>
                                <td  align="right">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            
<!-- aqciis_piroba  ENG-->                             
                            <tr>
                                <td bgcolor="#FFFFFF" align="center"><b>აქციის პირობა ENG</b></td>
                                <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                                <td bgcolor="#FFFFFF">
                                <textarea name="aqcia_pirobebi_eng" class="jqte-aqciae" style="float:left"></textarea>
                                <script>
                                    $('.jqte-aqciae').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-aqciae').jqte({"status" : jqteStatus})
                                    });
                                </script>                                    
                                </td>
                            </tr>
                            
                            
<script type="text/javascript">

var model = new Array("ქველმოქმედება", "ჯანდაცვა და მედიცინა", "განათლება და ტრენინგი", "კვების ობიექტები", "სილამაზე და ჯანმრთელობა", "საბავშვო სივრცე", "გართობა", "დასვენება", "მომსახურეობის სფერო", "უძრავი ქონება", "ავტო", "მაღაზია");

    var marka = new Array(
                        new Array("ეკლესია–მონასტრების მშენებლობა/აღდგენა", "მიუსაფარ ბავშვთა სახლები", "სოციალურად დაუცველები", "მოხუცთა სახლები", "სნეულთა დახმარება"),
                        new Array("სამშობიაროები", "ონკოლოგია", "პლასტიკური მედიცინა", "სტომატოლოგია", "რეპროდუქტოლოგია", "სამედიცინო აპარატურა", "გინეკოლოგია/მამოლოგია/უროლოგია", "ნევროლოგია", "ფსიქოლოგია", "დიაგნოსტიკა", "ლაბორატორიული კვლევები", "ფარმაცევტული კომპანიები,აფთიაქები", "კარდიოლოგია", "პედიატრია", "სისხლის ბანკი", "ოფთალმოლოგიური კლინიკები"),
                        new Array("უნივერსიტეტი", "სკოლა", "საბავშვო ბაღი", "კოლეჯი", "ტრენინგ ცენტრი", "უცხო ენათა ცენტრი"),
                        new Array("რესტორანი", "კაფე", "ბარი", "სწრაფი კვება", "სუში", "პაბი, ლუდხანა", "პიცერია", "სახინკლე,სამწვადე"),
                        new Array("სილამაზის სალონი", "სოლარიუმი", "ფიტნესი", "ესთეტიკის ცენტრი", "იოგა", "საუნა", "საცურაო აუზი", "აერობიკა", "სპორტულ/გამაჯანსაღებელი"),
                        new Array("გასართობი ცენტრი", "საბავშვო მაღაზია"),
                        new Array("ღამის კლუბი", "კარაოკე", "საბილიარდო და ბოულინგის ცენტრი", "კინო", "თეატრი", "გალერეა", "ოპერა"),
                        new Array("სასტუმრო", "ტურისტული სააგენტო", "ავიაკომპანია", "ტურები"),
                        new Array("იურიდიული მომსახურება", "ნოტარიული მომსახურება", "სადაზღვევო მომსახურება", "საბანკო მომსახურება", "მიკროსაფინანსო კომპანია", "ბუღალტერია", "კომპიუტერული მომსახურება", "სარეკლამო კომპანია", "ტვირთების/ამანათების გადაზიდვის სერვისი", "ტაქსი", "დაცვის სამსახური", "ციფრული ბეჭდვა", "კავშირგაბმულობა", "ფოტო/ვიდეო მომსახურება", "ქიმწმენდა, რეცხვა", "დიზაინი, საქორწილო გაფორმება", "სამკერვალო ატელიე/ ტანსაცმლის გაქირავება", "დღესასწაულების ორგანიზება", "ვებ–გვერდის დამზადება/დიზაინი", "სხვა (თხილამურების, სალაშქრო მოწყობილობების გაქირავება)"),
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
                                    <input type="submit" value="Add Company" name="damateba" id="btnSubmit">
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
                <td width="98%" height="155" align="center" valign="top"></td>
            </tr>
        </tbody></table>
    </center>
</div>    
                </td>
            </tr>
            <tr>
                <td width="98%" height="155" align="center" valign="top"></td>
            </tr>
        </tbody></table>

</center>

</div><!-- wrapper -->

<div class="clearer80"></div>