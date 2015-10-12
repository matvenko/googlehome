<script type="text/javascript">

$(function(){
	
					
	$("[value='next']").click(function(){
		
		var lefti = parseInt($("#inner").position().top);
		
		if(lefti > -525){
		$("#inner").animate({top: "-=105"},1000)
		}else{
			//$("#inner").css("left", 0);
			$("#inner").animate({top: "+=150"},1000)
		}
		$("#res").val(lefti);
	});
	
	$("[value='prev']").click(function(){
		
		var lefti = parseInt($("#inner").position().left);
		
		if(lefti!=0){
		$("#inner").animate({left: "+=900"},1000)
		}
		$("#res").val(lefti);
	});
				
						
	});
			
			

</script>