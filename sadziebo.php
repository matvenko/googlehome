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


<?php

	$host ='localhost';
	$user ='root';
	$passwd ='';
	$db_name ='freeinfo_ge';

	mysql_query("SET NAMES 'utf8'");
	
	//подключаем класс Paging
	require('paging_clas.php');
	
	//соединяемся с базой данных
	$_DB = new mysqli($host,$user,$passwd,$db_name);
	$_DB->set_charset('utf8');
	
	//создаем экземпляр класса Paging
	//в качестве параметра передаем ему указатель на соединение с MySQL
	$_PAGING = new Paging($_DB);
	//соединяемся с базой данных
	$_DB = new mysqli($host,$user,$passwd,$db_name);
	
	//создаем экземпляр класса Paging
	//в качестве параметра передаем ему указатель на соединение с MySQL
	$_PAGING = new Paging($_DB);
	
	if (!$_DB->set_charset("utf8")) {
		printf($_DB->error);
	}


?>
 
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
	
	
	if(isset($_GET["cat"])){
		$cat = $_GET["cat"];	
	}
	
	if(isset($_GET["subcat"])){
		$subcat = $_GET["subcat"];	
	}
	
	if(isset($_GET["qalaqi"])){
		$qalaqi = $_GET["qalaqi"];	
	}
	
	$sityva = $_GET["sityva"] != '' ? $_GET["sityva"] : '';
	
	
	
	
	
	$string = '';


	if (isset($_GET["cat"])){
		$string .= " AND category = {$cat}";
	}
	
	if (isset($_GET["subcat"])){
		$string .= " AND subcat = {$subcat}";
	}
	
	if (isset($_GET["qalaqi"])){
		$string .= " AND qalaqi = '{$qalaqi}'";
	}
	

		
	//statusebi
			
	if ( isset($_GET["vip"]) && !isset($_GET["vip_plus"]) && !isset($_GET["standartplus"]) ){
		$string .= " AND statusi = 3";
	}
	elseif ( isset($_GET["vip"]) && isset($_GET["vip_plus"]) && !isset($_GET["standartplus"]) ){
		$string .=  " AND (statusi = 3 || statusi = 4)";
	}
	elseif ( isset($_GET["vip"]) && !isset($_GET["vip_plus"]) && isset($_GET["standartplus"]) ){
		$string .=  " AND (statusi = 3 || statusi = 2)";
	}
	elseif ( !isset($_GET["vip"]) && isset($_GET["vip_plus"]) && isset($_GET["standartplus"]) ){
		$string .=  " AND (statusi = 4 || statusi = 2)";
	}
	elseif ( !isset($_GET["vip"]) && isset($_GET["vip_plus"]) && !isset($_GET["standartplus"]) ){
		$string .= " AND statusi = 4";
	}
	elseif ( !isset($_GET["vip"]) && !isset($_GET["vip_plus"]) && isset($_GET["standartplus"]) ){
		$string .= " AND statusi = 2";
	}
	

		
	
	
	if (trim($sityva) != '')
	{
			$string .= " AND (compani LIKE '%$sityva%' OR `misamarti_geo` LIKE '%$sityva%' OR `misamarti_eng` LIKE '%$sityva%' OR `about_company_geo` LIKE '%$sityva%' OR `about_company_eng` LIKE '%$sityva%' OR `nomeri` LIKE '%$sityva%' OR `swavlebis_statusi_geo` LIKE '%$sityva%' OR `swavlebis_statusi_eng` LIKE '%$sityva%' OR `samzareulo_geo` LIKE '%$sityva%' OR `samzareulo_eng` LIKE '%$sityva%' OR `sxva_servisi_geo` LIKE '%$sityva%' OR `sxva_servisi_eng` LIKE '%$sityva%' OR `aqcia_pirobebi_geo` LIKE '%$sityva%' OR `aqcia_name_geo` LIKE '%$sityva%' OR `aqcia_name_eng` LIKE '%$sityva%')";
	}

	
	
	



?>

<body>
 

<script>
  (function() {
    var cx = '006281161886951336383:oy33lpw8nkm';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>


    
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
                    <li style="padding-top:5px;"><a href="#"	onclick="changelang('geo')"><img src="img/geo.png"></a>	</li>
                    <li style="padding-top:5px;"><a href="#"	onclick="changelang('eng')"><img src="img/eng.png"></a>	</li>      
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
    
    

    <!--sadziebo-->
    <div class="sadziebo">
        
        <div class="serchi">
        <!--mtvleli-->
        <div class="mtvleli">
        <div class="count">714</div>
        </div>
        
        <!--selectebi-->
        <form method="get">
        <div class="selectebi">
        		<input type="hidden" value="<?php echo $_GET["cat"]; ?>" name="cat" />
        
                <select id="sub" name="subcat" onchange="this.form.submit()">
                </select>
            
      
                <select name="qalaqi">
                    <option <?php if($_GET["qalaqi"] == "თბილისი"){echo 'selected="selected"';} ?>>თბილისი</option>
                    <option <?php if($_GET["qalaqi"] == "მცხეთა"){echo 'selected="selected"';} ?>>მცხეთა</option>          
                </select>
                
                
                 <select>
                    <option selected><?php echo RAIONI ?></option>
                    <option>თბილისი</option>
                    <option>ქუთაისი</option>
                    <option>გორი</option>
                    <option>ბათუმი</option>            
                </select>
                
                
                  <select>
                    <option selected><?php echo UBANI ?></option>
                    <option>თბილისი</option>
                    <option>ქუთაისი</option>
                    <option>გორი</option>
                    <option>ბათუმი</option>            
                </select>
                </div>
                
            
            
            
            
                <!-- chekboxebi-->
                <div class="checkboxebi">
                   <p>
                   <input style="margin-left:25px;" type="checkbox" id="vip_plus" onchange="this.form.submit()" value="1" name="vip_plus"  <?php if(isset($_GET["vip_plus"]) && $_GET["vip_plus"] == "1"){echo 'checked="checked"';} ?> />       <label for="vip_plus"> VIP+ </label>      
                    <input type="checkbox" id="vip" onchange="this.form.submit()" value="1" name="vip"  <?php if(isset($_GET["vip"]) && $_GET["vip"] == "1"){echo 'checked="checked"';} ?> />           <label for="vip"> VIP </label>        
                    <input type="checkbox" id="standartplus" onchange="this.form.submit()" value="1" name="standartplus"  <?php if(isset($_GET["standartplus"]) && $_GET["standartplus"] == "1"){echo 'checked="checked"';} ?> />  <label for="standartplus"> Standard+ </label>   
                     </p>   
                     
                      <gcse:search></gcse:search>
                         
                </div>
                
                
                <!--dzebna-->
         
            
           
            

                
            
            
           
            
                 
        </div></form>
            <div class="sadziebo_reklams"><img src="img/2_38.png"></div>
            <div class="sadziebo_reklams"><img src="img/2_66.png"></div>
        
    </div><!-- sadziebo  -->




 


 
    
    <!--- mtavari ---->
<div class="sadziebo_content">
	
	<!--- row ---->
	<div class="row">
		<div class="cell leftside">
            



<?php

	$roo = $_PAGING->get_page("SELECT * FROM `ganc` WHERE now() <= ganc_periodi ".$string." GROUP BY id	ORDER BY statusi DESC");
	while($news_row = $roo->fetch_assoc()){		

?>

    <div class="blocks">

        <div class="photo"><a href="detaluri.php?detail_id=<?php echo $news_row["id"]; ?>"><img src="upload/<?php echo $news_row["id"]."/".$news_row["logo"]; ?>" /></a></div>

        <div class="info_ruka">
        
            <div class="info">
                <ul>
                    <li><strong><?php echo SAXELI ?>:</strong> <?php echo $news_row["company"]; ?> </li>    
                    <li><strong><?php echo MISAMARTI ?>:</strong> <?php echo $news_row["misamarti_".$lang.""]; ?></li>
                    <li><strong><?php echo TELEFONI ?>:</strong><?php echo $news_row["nomeri"]; ?></li>
                    <li><strong><?php echo SAITI ?>:</strong> <a href="<?php echo $news_row["saiti"]; ?>><?php echo $news_row["saiti"]; ?></a> </li>
                    <li><strong>Facebook:</strong>       <a href="<?php echo $news_row["facebook"]; ?>" target="_blank"><?php echo $news_row["facebook"]; ?></a> </li>               
                </ul>            
            </div><!--info-->
            
            <!--ruka-->
            <div class="ruka" style="border: none;float: right;line-height: 119px;width: 120px;font-size: 22px;color: #316686;font-weight: bold;font-family: cursive; text-shadow: 1px 1px;">
                <em><?php 
						if($news_row["statusi"] == 1){
							$result = "Standart";
						}
	
						if($news_row["statusi"] == 2){
							$result = "Standart+";
						}
						
						if($news_row["statusi"] == 3){
							$result = "VIP";
						}
						
						if($news_row["statusi"] == 4){
							$result = "VIP+";
						}

						echo $result;
				?></em>
            </div><!--ruka-->
            
        </div><!-- info_ruka -->
        
    </div><!--blocks-->

<?php
}


	echo $_PAGING->get_prev_page_link().'&nbsp;&nbsp; ';
	echo $_PAGING->get_page_links() .'&nbsp;&nbsp; ';
	echo $_PAGING->get_next_page_link().'<br /><br /></center>';

?>
     
            
            <!-- <div class="banner"><img src="img/banner_11.png"></div> -->
           

        <div class="clearer_5"></div>
            


        </div><!--left side-->

        
		<div class="cell rightside">
            <div class="reclam_big"><img src="img/reclam_52.png"></div>
            <div class="reclam_big"><img src="img/reclam2_57.png"></div>
            <div class="small_reclam"><img src="img/მთავარი1_30.png"></div>
            <div class="small_reclam"><img src="img/მთავარი1_30.png"></div>
            <div class="small_reclam"><img src="img/მთავარი1_30.png"></div>
            <div class="small_reclam"><img src="img/მთავარი1_30.png"></div>
            <div class="small_reclam"><img src="img/მთავარი1_30.png"></div>
            <div class="small_reclam"><img src="img/მთავარი1_30.png"></div>
        </div>
	</div><!--- end row --->

</div>
<!---- mtavari ---->

    
    
    
    
   <!-- footer-->
    <footer>
        <div class="footer">
        <p><a href="#"> <?php echo REKLAMA ?></a></p>          
        <p> <strong>All Rights Reserved | Freeinfo.ge</strong> <img src="img/top_73.png"> <strong> <a href="#">
         <?php echo SHEMOGVIERTDIT ?></a></strong></p>       
        </div>
    
    
    </footer>
<script type="text/javascript">
var cat = <?php echo $_GET["cat"]; ?>;


var ena = "<?php echo $lang; ?>";


if(ena == "geo")
{
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
}else{


	var marka = new Array(
      new Array("Church Construction/Restoration", "Orphanages", " Socially Vulnerable", " Nursing Homes", " Sick Help"),
      new Array("Maternity Hospitals", "Oncology", "Plastic Medicine", "Dentistry", "Reproductology", "Medical Equipment", "Gynecology/Mamology/Urology", "Neurology", "Psychology", "Diagnostics", "Laboratory Studies", "Pharmaceutical Companies/Pharmacies", "Cardiology", "Pediatrics", "Blood Bank", "Ophthalmology Clinics"),
      new Array("University", "School", "Kindergarten", "College", "Training Center", "Foreign Language Center"),
      new Array("Restaurant", "Café", "Bar", "Fast Food", "Sushi", "Pub/Bear-house", "Pizzeria", "Sakhinkle/ Samtsvade"),
      new Array("Beauty Salon", "Solarium", "Fitness", "Aesthetics Center", "Yoga", "Sauna", "Swimming Pool", "Aerobics", "Sport/ Sanitation Center"),
      new Array("Entertainment Center", "Kids Shop"),
      new Array("Nightclubs", "Karaoke", "Billiards and Bowling Center", "Cinema", "Theatre", "Gallery", "Opera"),
      new Array("Hotel", "Travel Agency", "Air Company", "Tours"),
      new Array("Legal Services", "Notarial Services", "Insurance Services", "Banking Services", "Microfinance Company", "Accounting", "Computer Services", "Advertising Company", "Cargo Shipping Services", "Taxi", "Security Service", "Digital Printing", "Communications", "Photo Studio", "Dry Cleaning/ Washing", "Design/Wedding Decoration", "Clothing Rental Service", "Events Planning", "Website Development", "Others (Skiing/ Hiking Equipment Rental Service)"),
      new Array("Real Estate Agency", "Constraction Company", "Ongoing Constractions", "Interior/Exterior Design", "Heating/ Ventilation and Air Conditioning", "Constraction Materials Store", "Windows and Doors Producing"),
      new Array("Car Rental Service", "Driving School", "Petrol Station", "Gas Station", "AutoGas", "Car Wash", "Car Accessories", "Service Centers", "Auto Service on your Way"),
      new Array("Furniture", "Technology", "Clothes/Shoes", "Sports Shop", "Perfumery", "Optical Salon", "Supermarket in your District")
                        );
	
}
    
// alert(marka[cat].length);

function myFunction(t) {
	
	
	var cat = <?php echo $_GET["cat"]; ?>;
	var subcat = <?php if(isset($_GET["subcat"])){echo $_GET["subcat"];}else{echo "35";} ?>;
	var txt = "";
	var le = marka[t].length;
		
	for(var i=0; i < le; i++ )
	{
		if(subcat == i){
			var dae = 'selected="selected"';	
		}else{
			var dae = "";	
		}
		
		txt += "<option value='"+ i +"' "+ dae +">"+marka[t][i]+"</option>";
	}

	return txt;
		
}

document.getElementById("sub").innerHTML = myFunction(cat);




</script>  
</body>    
 </html>

