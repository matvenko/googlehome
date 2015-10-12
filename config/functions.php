<?php


if(isset($_GET["detail_id"])){
	$detail_id = $_GET["detail_id"];	
}else{
	header('Location: index.php');
	exit;	
}


$detail_sql = mysql_query("SELECT * FROM ganc WHERE id = ".$detail_id."");
$detail_row = mysql_fetch_assoc($detail_sql);




$det_category = $detail_row["category"];
$det_subcat = $detail_row["subcat"];


switch($det_category)
{
	
	case "-1":
	$file_text = "";
	break;
	
	case "0":
	$file_text = "<span style='font-size:11px;'>". MIMDINARE_PROEQTEBI . "</span>";
	break;
	
	case "1":
	$file_text = "<span style='font-size:10px;'>". MOMSAXUREBA_TARIFI . "</span>";
	break;
	
	case "2":
	$file_text = "<span style='font-size:10px;'>". SASWAVLO_PROGRAMEBI. "</span>";;
	break;
	
	case "3":
	$file_text = IXILE_MENU;
	break;
	
	case "4":
	$file_text = "<span style='font-size:10px;'>". MOMSAXUREBA_TARIFI . "</span>";
	break;
	
	case "5":
	if ($det_subcat == 0){
		$file_text = "<span style='font-size:10px;'>". MOMSAXUREBA_TARIFI . "</span>";
		}
	else{
			$file_text = PRODUQTI;
			}
	break;
	
	
	case "6":
	if ($det_subcat == 0 || $det_subcat == 1){
		$file_text = IXILE_MENU;
		}
	else if ($det_subcat == 3 || $det_subcat == 4 || $det_subcat == 5 || $det_subcat == 6){
			$file_text = AFISHA;
			}
	else {
		$file_text = "<span style='font-size:10px;'>". MOMSAXUREBA_TARIFI . "</span>";
		}
	break;
	
	case "7":
	$file_text = "<span style='font-size:10px;'>". MOMSAXUREBA_TARIFI . "</span>";
	break;
	
	case "8":
	$file_text = "<span style='font-size:10px;'>". MOMSAXUREBA_TARIFI . "</span>";
	break;
	
	case "9":
	$file_text = "<span style='font-size:10px;'>". MOMSAXUREBA_TARIFI . "</span>";
	break;
	
	case "10":
	$file_text = "<span style='font-size:10px;'>". MOMSAXUREBA_TARIFI . "</span>";
	break;
	
	default:
	$file_text = IXILE_MENU;
	break;
}













?>