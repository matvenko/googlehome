<div class="wrapper">
<style type="text/css">
.jqte{float:left; margin:15px 0}

select{margin:10px 0;
	width:215px;
	height:35px;
	line-height:35px;
	padding: 5px;
	float:left;
	color:#990000;
	font-weight:bold;
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

select option{
	height:25px;	
}


</style>
<center>
<p align="center">
                    <b><a href="?page=add_news"></a> </b>
                </p>
                
                <div style="clear:both; height:20px; text-align:left; margin-bottom:20px;">
                <form>
                
                <input type="hidden" name="page" value="companies" />
                
                <select id="main" name="category" onchange="this.form.submit()">
                    <option value="-1"></option>
                    <option value="0" <?php if(isset($_GET["category"]) && $_GET["category"] == 0){ echo 'selected="selected"'; } ?>>ქველმოქმედება</option>
                    <option value="1" <?php if(isset($_GET["category"]) && $_GET["category"] == 1){ echo 'selected="selected"'; } ?>>ჯანდაცვა და მედიცინა</option>
                    <option value="2" <?php if(isset($_GET["category"]) && $_GET["category"] == 2){ echo 'selected="selected"'; } ?>>განათლება და ტრეინინგი</option>
                    <option value="3" <?php if(isset($_GET["category"]) && $_GET["category"] == 3){ echo 'selected="selected"'; } ?>>კვების ობიექტები</option>
                    <option value="4" <?php if(isset($_GET["category"]) && $_GET["category"] == 4){ echo 'selected="selected"'; } ?>>სილამაზე და ჯანმრთელობა</option>
                    <option value="5" <?php if(isset($_GET["category"]) && $_GET["category"] == 5){ echo 'selected="selected"'; } ?>>საბავშვო სივრცე</option>
                    <option value="6" <?php if(isset($_GET["category"]) && $_GET["category"] == 6){ echo 'selected="selected"'; } ?>>გართობა</option>
                    <option value="7" <?php if(isset($_GET["category"]) && $_GET["category"] == 7){ echo 'selected="selected"'; } ?>>დასვენება</option>
                    <option value="8" <?php if(isset($_GET["category"]) && $_GET["category"] == 8){ echo 'selected="selected"'; } ?>>მომსახურეობის სფერო</option>
                    <option value="9" <?php if(isset($_GET["category"]) && $_GET["category"] == 9){ echo 'selected="selected"'; } ?>>უძრავი ქონება</option>
                    <option value="10" <?php if(isset($_GET["category"]) && $_GET["category"] == 10){ echo 'selected="selected"'; } ?>>ავტო</option>
                    <option value="11" <?php if(isset($_GET["category"]) && $_GET["category"] == 11){ echo 'selected="selected"'; } ?>>ყველას ნახვა</option>
                    </select>
                </form>
                
                </div>
                
        <table border="0" cellspacing="0" bordercolor="#C0C0C0" width="98%" id="AutoNumber1" height="273" style="border-collapse: collapse" cellpadding="0">
            <tbody>
                <td width="98%" height="51">

<div align="center">
    <center>
        <table border="0" cellspacing="0" bordercolor="#C0C0C0" width="98%" id="AutoNumber1" height="273" style="border-collapse: collapse" cellpadding="0">
            <tbody>
           
            <tr>
                <td width="98%">

<?php

if(isset($_GET["delete_id"])){$delete_id = $_GET["delete_id"];}

if(isset($_GET['delete_id']))
	{
		$sqli = ("DELETE FROM `freeinfo_ge`.`ganc` WHERE `ganc`.`id` = ".$delete_id."");	
		$retval = mysql_query( $sqli );
		if(! $retval )
		{
		  die('Could not delete data: ' . mysql_error());
		}
		echo '<font color="#FF0000"> კომპანია წარმატებით წაიშალა. </font> <br /><br />';
	}



if(isset($_GET['vizible_id']))
	{
		$visible_id = $_GET['vizible_id'];
	}	
		
		
		if(isset($_GET['vizible_id']) && $_GET['visible'] == 1)
		{
			mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `visible` = '0' WHERE `ganc`.`id` = ".$visible_id.";");
		}else if(isset($_GET['vizible_id']) && $_GET['vizible'] == 0)
		{
			mysql_query("UPDATE `freeinfo_ge`.`ganc` SET `visible` = '1' WHERE `ganc`.`id` = ".$visible_id.";");
		}
		
		
		
	







?>



<table width="90%" border="1" cellpadding="2" cellspacing="0" id="menutable" style="border-collapse: collapse">
        <tbody><tr>
            <td align="center" bgcolor="#EEEEEE" height="26" width="127"><b>ლოგო</b></td>
            <td align="center" bgcolor="#EEEEEE" height="26" width="130"><b>username</b></td>
            <td width="127" height="26" align="center" bgcolor="#EEEEEE"><b>userpass</b></td>
            <td width="129" height="26" align="center" bgcolor="#EEEEEE"><b>company</b></td>
            <td width="273" height="26" align="center" bgcolor="#EEEEEE"><strong>მოკლე აღწერა</strong></td>
            <td width="139" height="26" align="center" bgcolor="#EEEEEE"><b>ელ-ფოსტა</b></td>
            <td width="151" height="26" align="center" bgcolor="#EEEEEE"><b>ნომერი</b></td>
            <td align="center" bgcolor="#EEEEEE" height="26" width="114"><b>რედაქტირება</b></td>
            <td align="center" bgcolor="#EEEEEE" height="26" width="88"><b>visible</b></td>
            <td align="center" bgcolor="#EEEEEE" height="26" width="87"><b>წაშლა</b></td>
        </tr>







<?php  



if(isset($_GET["category"]) && $_GET["category"] < 11)
{
	$category = $_GET["category"];
	$cat = mysql_query("SELECT * FROM `ganc` WHERE category = ".$category."");
	while ($cat_row = mysql_fetch_array($cat))
	{
	?>
	
			<tr>
				<td align="left" colspan="6" valign="middle"></td>
			</tr>
	
			<tr>
			
				<td align="center" valign="middle">
				<a href="#">
					<img src="../upload/<?php echo $cat_row["id"]."/".$cat_row["logo"]; ?>" alt="<?php echo $cat_row['company']; ?>" width="70" />
				</a>
				</td>
				
				<td align="left" valign="middle" width="130"> 
					<?php echo $cat_row['username']; ?>
				</td>
				
				<td align="left" valign="middle" width="127"> 
					<?php echo $cat_row['userpass']; ?>
				</td>
				
				<td align="left" valign="middle" width="129"> 
					<?php echo $cat_row['company']; ?>
				</td>
				
				<td align="left" valign="middle"> 
					<?php mb_internal_encoding("UTF-8"); echo mb_substr($cat_row['about_company_geo'],0,50)."..."; ?>
				</td>
				
				<td align="left" valign="middle" width="139"> 
					<?php echo $cat_row['maili']; ?>
				</td>
				
				<td align="left" valign="middle" width="151"> 
					<?php echo $cat_row['nomeri']; ?>
				</td>
				
				<td align="center" valign="middle">
            	<a href="?page=edit_company&edit_id=<?php echo $row["id"]; ?>">
                    <img border="0" src="images/map_edit.gif" alt="Page Edit" title="Edit" width="16" height="16">
                </a>&nbsp;&nbsp;
            </td>
            
            <td align="center" valign="middle">
            	<?php
                if($cat_row["visible"] == 1){
                ?> 
                    <a href="?page=companies&category=<?php echo $category; ?>&visible=1&vizible_id=<?php echo $cat_row["id"]; ?>">
                    	<img border="0" src="../img/visible.png" alt="delete" title="delete" width="16" height="16">
                    </a>
                <?php
                }else{
					?>
                        <a href="?page=companies&category=<?php echo $category; ?>&visible=0&vizible_id=<?php echo $cat_row["id"]; ?>">
                            <img border="0" src="../img/unvizible.png" alt="delete" title="delete" width="16" height="16">
                        </a>
                    <?php	
				}
				?>
            
            	
            </td>
            
            <td align="center" valign="middle">
                <a href="?page=companies&delete_id=<?php echo $cat_row["id"]; ?>" onclick="return confirm('ნამდვილად გსურთ წაშლა? ')">
                    <img border="0" src="images/delete.png" alt="delete" title="delete" width="16" height="16">
                </a>&nbsp;&nbsp;
			</td>
                
                
			
			</tr> 
	<?php
	}
}else if(!isset($_GET["category"]) || $_GET["category"] == 11){
		$sql = mysql_query("SELECT * FROM `ganc` ORDER BY `id`");
        while ($row = mysql_fetch_array($sql))
		{

?>

		<tr>
            <td align="left" colspan="6" valign="middle"></td>
        </tr>

        <tr>
        
            <td align="center" valign="middle">
			<a href="#">
				<img src="../upload/<?php echo $row["id"]."/".$row["logo"]; ?>" alt="<?php echo $row['company']; ?>" width="70" />
            </a>
            </td>
            
            <td align="left" valign="middle" width="130"> 
            	<?php echo $row['username']; ?>
            </td>
            
            <td align="left" valign="middle" width="127"> 
            	<?php echo $row['userpass']; ?>
            </td>
            
            <td align="left" valign="middle" width="129"> 
            	<?php echo $row['company']; ?>
            </td>
            
            <td align="left" valign="middle"> 
				<?php mb_internal_encoding("UTF-8"); echo mb_substr($row['about_company_geo'],0,50)."..."; ?>
            </td>
            
            <td align="left" valign="middle" width="139"> 
            	<?php echo $row['maili']; ?>
            </td>
            
            <td align="left" valign="middle" width="151"> 
            	<?php echo $row['nomeri']; ?>
            </td>
            
            <td align="center" valign="middle">
            	<a href="?page=edit_company&edit_id=<?php echo $row["id"]; ?>">
                    <img border="0" src="images/map_edit.gif" alt="Page Edit" title="Edit" width="16" height="16">
                </a>&nbsp;&nbsp;
            </td>
            
            <td align="center" valign="middle">
            	<?php
                if($row["visible"] == 1){
                ?> 
                    <a href="?page=companies&visible=1&vizible_id=<?php echo $row["id"]; ?>">
                    	<img border="0" src="../img/visible.png" alt="delete" title="delete" width="16" height="16">
                    </a>
                <?php
                }else{
					?>
                        <a href="?page=companies&visible=0&vizible_id=<?php echo $row["id"]; ?>">
                            <img border="0" src="../img/unvizible.png" alt="delete" title="delete" width="16" height="16">
                        </a>
                    <?php	
				}
				?>
            
            	
            </td>
            
            <td align="center" valign="middle">
                <a href="?page=companies&delete_id=<?php echo $cat_row["id"]; ?>" onclick="return confirm('ნამდვილად გსურთ წაშლა? ')">
                    <img border="0" src="images/delete.png" alt="delete" title="delete" width="16" height="16">
                </a>&nbsp;&nbsp;
			</td>
        
        </tr> 
		
        

<?php
		}
}
?>




        </tbody>
        </table>




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