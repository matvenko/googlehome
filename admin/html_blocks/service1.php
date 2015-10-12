<?php  
        $sql = mysql_query("SELECT * FROM `service` WHERE id = 1");
        $row = mysql_fetch_assoc($sql);
		
		$text_geo = isset($_POST["text_geo"]) ? $_POST["text_geo"] : "";
		$text_rus = isset($_POST["text_rus"]) ? $_POST["text_rus"] : "";
		$text_eng = isset($_POST["text_eng"]) ? $_POST["text_eng"] : "";
		
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
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>ქართულად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="text_geo" class="jqte-test"><?php echo $row['service_geo']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-test').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-test').jqte({"status" : jqteStatus})
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
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>რუსულად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="text_rus" class="jqte-teste"><?php echo $row['service_rus']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-teste').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-teste').jqte({"status" : jqteStatus})
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
                                    <td bgcolor="#FFFFFF" width="105" align="center"><b>ინგლისურად</b></td>
                                    <td bgcolor="#FFFFFF" width="16" align="center">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" width="816" align="left">
                                
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                    
								<textarea name="text_eng" class="jqte-testeng"><?php echo $row['service_eng']; ?></textarea>
                                
                                
                                <script>
                                    $('.jqte-testeng').jqte();
                                    
                                    // settings of status
                                    var jqteStatus = true;
                                    $(".status").click(function()
                                    {
                                        jqteStatus = jqteStatus ? false : true;
                                        $('.jqte-testeng').jqte({"status" : jqteStatus})
                                    });
                                </script>
								
                                <!------------------------------------------------------------ jQUERY TEXT EDITOR ------------------------------------------------------------>
                                
                                    </td>
                                </tr>
                                <tr>
                                    <td width="105" align="right">&nbsp;</td>
                                    <td width="16" align="center">&nbsp;</td>
                                    <td width="816" align="left">&nbsp;</td>
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
		$update = mysql_query("UPDATE  `euroceil_ge`.`service` SET  `service_geo` =  '".$text_geo."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `euroceil_ge`.`service` SET  `service_eng` =  '".$text_eng."' WHERE  `service`.`id` =1;");
		$update = mysql_query("UPDATE  `euroceil_ge`.`service` SET  `service_rus` =  '".$text_rus."' WHERE  `service`.`id` =1;");
		echo '<meta http-equiv="refresh" content="0; url='.$_SERVER['REQUEST_URI'].'">';
	}


?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        