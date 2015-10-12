<?php  
        $sql = mysql_query("SELECT * FROM `service` WHERE id = 1");
        $row = mysql_fetch_assoc($sql);
		
			$Evo_Range_Standard_geo = isset($_POST["Evo_Range_Standard_geo"]) ? $_POST["Evo_Range_Standard_geo"] : "";
			$Evo_Range_Standard_eng = isset($_POST["Evo_Range_Standard_eng"]) ? $_POST["Evo_Range_Standard_eng"] : "";
			
			$Evo_Range_Standard_plus_geo = isset($_POST["Evo_Range_Standard_plus_geo"]) ? $_POST["Evo_Range_Standard_plus_geo"] : "";
			$Evo_Range_Standard_plus_eng = isset($_POST["Evo_Range_Standard_plus_eng"]) ? $_POST["Evo_Range_Standard_plus_eng"] : "";
			
			$Evo_Range_vip_geo = isset($_POST["Evo_Range_vip_geo"]) ? $_POST["Evo_Range_vip_geo"] : "";
			$Evo_Range_vip_eng = isset($_POST["Evo_Range_vip_eng"]) ? $_POST["Evo_Range_vip_eng"] : "";
			
			$Evo_Range_vip_plus_geo = isset($_POST["Evo_Range_vip_plus_geo"]) ? $_POST["Evo_Range_vip_plus_geo"] : "";
			$Evo_Range_vip_plus_eng = isset($_POST["Evo_Range_vip_plus_eng"]) ? $_POST["Evo_Range_vip_plus_eng"] : "";
			
			
			$Evo_Rangeplus_vip_geo = isset($_POST["Evo_Rangeplus_vip_geo"]) ? $_POST["Evo_Rangeplus_vip_geo"] : "";
			$Evo_Rangeplus_vip_eng = isset($_POST["Evo_Rangeplus_vip_eng"]) ? $_POST["Evo_Rangeplus_vip_eng"] : "";
			
			$Evo_Rangeplus_vip_plus_geo = isset($_POST["Evo_Rangeplus_vip_plus_geo"]) ? $_POST["Evo_Rangeplus_vip_plus_geo"] : "";
			$Evo_Rangeplus_vip_plus_eng = isset($_POST["Evo_Rangeplus_vip_plus_eng"]) ? $_POST["Evo_Rangeplus_vip_plus_eng"] : "";
			
			$Evo_Rangeplus_vip_plus_aqcia_geo = isset($_POST["Evo_Rangeplus_vip_plus_aqcia_geo"]) ? $_POST["Evo_Rangeplus_vip_plus_aqcia_geo"] : "";
			$Evo_Rangeplus_vip_plus_aqcia_eng = isset($_POST["Evo_Rangeplus_vip_plus_aqcia_eng"]) ? $_POST["Evo_Rangeplus_vip_plus_aqcia_eng"] : "";
			
		
?>
<table border="0" cellspacing="0" bordercolor="#C0C0C0" width="98%" id="AutoNumber1" height="273" style="border-collapse: collapse" cellpadding="0">
            <tbody>
            <tr>
                <td width="98%" height="16"></td>
            </tr>
            <tr>
                <td width="98%" bgcolor="#EFEFEF" height="54">
                    <p align="center">
                    </p><form method="post">
                        <div align="center">
                            <table border="0" width="97%" id="table1" cellspacing="0" cellpadding="0">
                                <tbody>
                              
                                
                                
                                <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>Standard ქართულად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Range_Standard_geo" class="jqte-testo"><?php echo $row['Evo_Range_Standard_geo']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testo').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testo').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
								<tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>Standard ინგლისურად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Range_Standard_eng" class="jqte-testae"><?php echo $row['Evo_Range_Standard_eng']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testae').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testae').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                         		<tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>Standard+ ქართულად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Range_Standard_plus_geo" class="jqte-testb"><?php echo $row['Evo_Range_Standard_plus_geo']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testb').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testb').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
								<tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>Standard+ ინგლისურად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Range_Standard_plus_eng" class="jqte-testgi"><?php echo $row['Evo_Range_Standard_plus_eng']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testgi').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testgi').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                
                                
                                    
                                
                                
                                
                                
                                
                                
                                <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>Vip ქართულად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Range_vip_geo" class="jqte-testg"><?php echo $row['Evo_Range_vip_geo']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testg').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testg').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
								<tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>Vip ინგლისურად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Range_vip_eng" class="jqte-testd"><?php echo $row['Evo_Range_vip_eng']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testd').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testd').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                 <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>Vip+ ქართულად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Range_vip_plus_geo" class="jqte-testag"><?php echo $row['Evo_Range_vip_plus_geo']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testag').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testag').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
								<tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>Vip+ ინგლისურად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Range_vip_plus_eng" class="jqte-testad"><?php echo $row['Evo_Range_vip_plus_eng']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testad').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testad').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                

                                
                                
                                
                                
                                                                 <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>Vip ქართულად (evro-range+)</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Rangeplus_vip_geo" class="jqte-testaag"><?php echo $row['Evo_Rangeplus_vip_geo']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testaag').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testaag').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
								<tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>Vip ინგლისურად (evro-range+)</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Rangeplus_vip_eng" class="jqte-testaaad"><?php echo $row['Evo_Rangeplus_vip_eng']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testaaad').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testaaad').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                
                                
                                

                                
                                
                                                                                                 <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>Vip plus ქართულად (evro-range+) </b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Rangeplus_vip_plus_geo" class="jqte-testarag"><?php echo $row['Evo_Rangeplus_vip_plus_geo']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testarag').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testarag').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
								<tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b> Vip plus ინგლისურად (evro-range+)</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Rangeplus_vip_plus_eng" class="jqte-testaad"><?php echo $row['Evo_Rangeplus_vip_plus_eng']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testaad').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testaad').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                                                                                                                 <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>დღის აქცია ქართულად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Rangeplus_vip_plus_aqcia_geo" class="jqte-testaraga"><?php echo $row['Evo_Rangeplus_vip_plus_aqcia_geo']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testaraga').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testaraga').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
								<tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>დღის აქცია ინგლისურად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="Evo_Rangeplus_vip_plus_aqcia_eng" class="jqte-testaady"><?php echo $row['Evo_Rangeplus_vip_plus_aqcia_eng']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testaady').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testaady').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="" align="right">&nbsp;</td>
                                    <td width="" align="center">&nbsp;</td>
                                    <td width="">&nbsp;</td>
                                </tr>
                                
                                
                                
                                
                                
                                
                                
                                
                                <tr>
                                    <td width="105" align="right">&nbsp;</td>
                                    <td width="16" align="center">&nbsp;</td>
                                    <td width="816" align="left">
                                    	<input type="submit" name="send" style="padding:10px 20px; background-color:#900; color:#FFF; font-weight:normal;" value="შენახვა" />
                                    </td>
                                </tr>
                                <tr>
                                    <td width="105" align="right">&nbsp;</td>
                                    <td width="16" align="center">&nbsp;</td>
                                    <td width="816" align="left">&nbsp;</td>
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
                <td width="98%" height="155" align="center" valign="top"><table width="100%">
                  <tbody>
                    <tr>
                      <td valign="top" colspan="2"></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
        </tbody></table>
        
        
        
<?php

	if(isset($_POST["send"]))
	{
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Range_Standard_geo` =  '".$Evo_Range_Standard_geo."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Range_Standard_eng` =  '".$Evo_Range_Standard_eng."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Range_Standard_plus_geo` =  '".$Evo_Range_Standard_plus_geo."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Range_Standard_plus_eng` =  '".$Evo_Range_Standard_plus_eng."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Range_vip_geo` =  '".$Evo_Range_vip_geo."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Range_vip_eng` =  '".$Evo_Range_vip_eng."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Range_vip_plus_geo` =  '".$Evo_Range_vip_plus_geo."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Range_vip_plus_eng` =  '".$Evo_Range_vip_plus_eng."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Rangeplus_vip_geo` =  '".$Evo_Rangeplus_vip_geo."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Rangeplus_vip_eng` =  '".$Evo_Rangeplus_vip_eng."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Rangeplus_vip_plus_geo` =  '".$Evo_Rangeplus_vip_plus_geo."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Rangeplus_vip_plus_eng` =  '".$Evo_Rangeplus_vip_plus_eng."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Rangeplus_vip_plus_aqcia_geo` =  '".$Evo_Rangeplus_vip_plus_aqcia_geo."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `freeinfo_ge`.`service` SET  `Evo_Rangeplus_vip_plus_aqcia_eng` =  '".$Evo_Rangeplus_vip_plus_aqcia_eng."' WHERE  `service`.`id` =1;");
		echo '<meta http-equiv="refresh" content="0; url='.$_SERVER['REQUEST_URI'].'">';
	}

?>
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        