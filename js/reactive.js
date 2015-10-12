var regFields = [];
var auth = new cms_connector('users');
var car_vector = false;
var i = 0;
var pos = 0;


$(document).ready(function(){ 

    // Всплывающие окна

    $("a.emerge_phone").fancybox({
        'padding': 0,
        'showCloseButton': false,
        'hideOnContentClick': true,
        'showNavArrows': false
    });

    $("a.ocall").fancybox({
        'padding': 0,
        'showCloseButton': false,
        'showNavArrows': false

    });

    $("a.omeasure").fancybox({
        'padding': 0,
        'showCloseButton': false,
        'scrolling': false,
        'showNavArrows': false

    });

    $("a.steps_window").fancybox({
        'padding': 0,
        'showCloseButton': false,
        'hideOnContentClick': true,
        'overlayOpacity': 0,
        'showNavArrows': false
    });

    $("a.dlogin").fancybox({
        'padding': 0,
        'showCloseButton': false,
        'showNavArrows': false

    });

    $("a.fpass").fancybox({
        'padding': 0,
        'showCloseButton': false,
        'showNavArrows': false

    });

    // Слайдер
    $('#slides').slides({
        preload: true,
        preloadImage: 'img/loading.gif',
        play: 7000,
        pause: 7000,
        slideSpeed: 1800
    });

    // Полоса прокрутки

    $(window).bind("load", function() { $('#scrollbarY').tinyscrollbar({ size: 310, sizethumb: 134, scroll: true});});

    // Карусель дилерам

    var n = (jQuery(".our_dilers").width())/155;
    n = n - (n%1);

    jQuery(".cities").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
        auto: 800,
        speed: 1000,
        visible: n
    });

    $(window).resize(function(){     
        var cities_size = $('.our_dilers').width();
        n = cities_size/155;
        n = n - (n%1);
        jQuery(".cities").jCarouselLite({
            visible: n 
        });          

    });   

     

    // Всплывающие изображения

    $("a.group_el").fancybox({
        'padding': 0,
        'hideOnContentClick': true,
        'showCloseButton': true,
        'showNavArrows': true,
        'cyclic':true
    });

    // Скрываемые блоки со страницы дилерам 

    /*$(".our_abilities > ul > li > a").click(function(){
    //debugger;
    //$(".abilities_description").stop(true,true);
    var xparent = $(this).parent();
    //debugger;
    $(".abilities_description").hide();
    $(".our_abilities > ul > li > a").removeClass('active_ability');
    if (!$('.abilities_description',xparent).size()) {return false;}                

    if (xparent.hasClass('active_ability')){
    xparent.removeClass("active_ability");
    $('.abilities_description',xparent).hide();            
    } else {
    $('.abilities_description',xparent).show();
    xparent.addClass("active_ability");
    }
    return false;
    });   */


    $(".our_abilities ul li a").click(function(){ 
        var xparent = $(this).parent();         
        if (xparent.hasClass('active_ability')){
            xparent.removeClass("active_ability");
            $('.abilities_description',xparent).toggle();            
        } else {
            $('.abilities_description',xparent).toggle();
            xparent.addClass("active_ability");
        }

    });

    // Сменяемые карты со страницы контакты


    $(".point > ul > li").click(function() {
        $(".point > ul > li").removeClass("a");
        $(this).addClass("a");

    })


    // Скрываемые блоки со страницы контакты

    $(".feedback_title p").toggle(function(){
        $("#contact_us").slideUp(1000);
        $(".feedback_title img").attr("src", "img/open_arrow.gif");

    }, function(){
        $("#contact_us").slideDown(1000);
        $(".feedback_title img").attr("src", "img/close_arrow.gif");
    });

    $(".map_direction_title p").toggle(function(){
        $(".big_map_wrap").animate({"height": "375px"},1000);
        $(".map_direction_title img").attr("src", "img/close_arrow.gif");

    }, function(){
        $(".big_map_wrap").animate({"height": "40px"},1000);
        $(".map_direction_title img").attr("src", "img/open_arrow.gif");
    });

    // Карусель со страницы информации
    
        jQuery(".simg").jCarouselLite({
        btnNext: ".ignext",
        btnPrev: ".igprev",
        visible: 2,
        vertical: true

    });

            

    // Для страницы общая информация

    $(".simg li").live("click",function(){
        $(".simg li").removeClass("gRamka");
        $(this).addClass("gRamka");
    });

    // Для страницы о компании и каталог

    $(".overview  a img").click(function(){
        $(".overview a img").removeClass("galborder");
        $(this).addClass("galborder");
    });      



    // Карусель со страницы видео

    var h = (jQuery(".video_carous").width())/180;
    h = h - (h%1);

    jQuery(".vcwrap").jCarouselLite({
        btnNext: ".vcnext",
        btnPrev: ".vcprev",
        visible: h 
    });

    $(".video_carous li").click(function(){
        $(".video_carous li").removeClass("active_video");
        $(this).addClass("active_video");
    });  

    $(window).resize(function(){     
        var car_size = $('.video_carous').width();
        h = car_size/180;
        h = h - (h%1);
        jQuery(".vcwrap").jCarouselLite({
            visible: h 
        });          

    });



    ///// Галлерея 
    $(".simg ul li a").click(function (){        
        var scr = $(this).attr('rel');
        var rev = $(this).attr('rev');
        $(".igallery img").attr("src", scr);
        $(".igallery p").text("");
        $(".igallery p").text(rev);
        $(".simg ul li").removeClass("gRamka");$(this).parent().addClass("gRamka");
    });

    $(".showContent").click(function(){
        var rel = $(this).attr('rel');         
        $(".showContent").eq(rel).fadeOut(0);
        $(".hideContent").eq(rel).fadeIn(0);        
        $(".benefits ul li div").eq(rel).fadeIn(500);
    });

    $(".hideContent").click(function(){
        var rel = $(this).attr('rel');         
        $(".hideContent").eq(rel).fadeOut(0);
        $(".showContent").eq(rel).fadeIn(0);        
        $(".benefits ul li div").eq(rel).fadeOut(100);
    });

    $(".point ul li").click(function(){
        var rel = $(this).attr('rel');
        $(".address").fadeOut(0);
        $(".address").eq(rel).fadeIn(0);   
        var rev = $(this).attr('rev');
        var re = /\s*,\s*/;
        
        var coords = rev.split(re);
        if (coords){
            initialize(parseFloat(coords[0]),parseFloat(coords[1]));
        }
        

    });

    //////// Видео ////////
    if ($('#player').size()){
        flowplayer("player", "scripts/flowplayer/flowplayer-3.2.8.swf", {
            clip:  {
                autoPlay: false,
                autoBuffering: true
            }
        });
    }

    $(".openVideo").click(function(){
        var rel = $(this).attr('rel');
        $('#player').attr('href',rel);
        flowplayer("player", "scripts/flowplayer/flowplayer-3.2.8.swf", {
            clip:  {
                autoPlay: true,
                autoBuffering: true
            }
        });

    });

    // Аккордеон для каталога
    $('.accordion').toggle();
    $('#one').liteAccordion({
        theme : 'basic',
        containerWidth : 920,
        containerHeight : 240,
        headerWidth : 55,
        slideSpeed : 600,
        pauseOnHover : false,
        firstSlide : 1,
        autoPlay: false
    });

    /*$(".actext a").mouseover(function(){
    $(".popup_message").css({"display":"block"});
    });

    $(".actext a").mouseout(function(){
    $(".popup_message").css({"display":"none"});
    });*/

// Цветная карусель в каталоге
    $('.color_palette_wrap').toggle();



    $(".cp li").live('click',function(){
        var block = $(this).closest('.s-carousel'); 
        $("li",block).removeClass("active_color");
        $(this).addClass("active_color");  
    });

    $('.cpprev').click(function(){ car_vector = 'prev';  });
    $('.cpnext').click(function(){ car_vector = 'next';  });
	//***
	$('.cpprev_all').click(function(){ car_vector = 'prev_all';  });
    $('.cpnext_all').click(function(){ car_vector = 'next_all';  });
	//***


    $('.s-carousel[rel=6]').toggle(0,function(){
        jQuery(".s-carousel[rel=6] .cp").jCarouselLite({
            btnPrev: '.s-carousel[rel=6] .cpnext',
            btnNext: '.s-carousel[rel=6] .cpprev',
			btnPrevAll: '.s-carousel[rel=6] .cpnext_all',
            btnNextAll: '.s-carousel[rel=6] .cpprev_all',
            visible: 19,
            circular: false,
            beforeStart: function(objs){ 
                 if(car_vector == 'next' || car_vector == 'prev'){			
                
                 i=0;
                 pos=-1;
                 jQuery.each(objs, function() { 
                     if(pos == -1 && $(this).hasClass('active_color')){                         
                         pos=i;
                     } 
                     i++;                    
                 });
				 
				
                                
                if(car_vector == 'next' && pos == 18){
                    $(".s-carousel[rel=6] .cp li").removeClass("active_color");
                    objs.eq(pos-1).addClass("active_color"); 
                }

                if(car_vector == 'prev' && pos == 0){
                    $(".s-carousel[rel=6] .cp li").removeClass("active_color");
                    objs.eq(pos+1).addClass("active_color");
                }  
				//var ddd = $(".s-carousel[rel=6] .cp li").size(pos=18);
				//alert(ddd);
		
				}
				//ветка2
				if(car_vector == 'next_all' || car_vector == 'prev_all'){			
                
                 i=8;
                 pos=0;
                 jQuery.each(objs, function() { 
                     if(pos < 0 && $(this).hasClass('active_color')){                         
                         pos=i;
                     } 
                     i++;                    
                 });
                                
                if(car_vector == 'next_all'){
                    $(".s-carousel[rel=6] .cp li").removeClass("active_color");
                    objs.eq(pos-13).addClass("active_color"); 
                }

                if(car_vector == 'prev_all'){
                    $(".s-carousel[rel=6] .cp li").removeClass("active_color");
                    objs.eq(pos+12).addClass("active_color");
                }  }
				
				
            }
        });
    });
    $('.s-carousel[rel=6]').addClass('init');  




    $("#one ol li").live("click",function(){
        
        var rel = $(this).attr('rel'); 
        $(".types").fadeOut(0);
        $(".openVis"+rel).fadeIn(1000);
        //$(this).addClass("active_color");

        var block = $(this).closest('.slide');
        var obj_id = block.attr('rel');
        var sselector = '.s-carousel[rel='+obj_id+']';
        $('.company_gallery_wrap').hide();
        $('.company_gallery_wrap[rel="'+obj_id+'"]').show(1000,function(){
            $('#scrollbarY',this).tinyscrollbar({ size: 310, sizethumb: 134, scroll: true}); 
        });              
        $('.s-carousel').fadeOut(0);
        var scarousel = $(sselector);
        if (scarousel.size()){
            scarousel.fadeIn(1000);
            if (!scarousel.hasClass('init')){
                scarousel.addClass('init');
                var params = {
                    btnPrev: sselector+' .cpnext',
                    btnNext: sselector+' .cpprev',
					btnPrevAll: sselector+'  .cpnext_all',
                    btnNextAll: sselector+'  .cpprev_all',
                    visible: 19,
                    circular: false,
                    beforeStart: function(objs){     
                    if(car_vector == 'next' || car_vector == 'prev'){						
                
                        i=0;
                        pos=-1;
                        jQuery.each(objs, function() { 
                            if(pos == -1 && $(this).hasClass('active_color')){                         
                                pos=i;
                            } 
                            i++;                    
                        });                
                        if(car_vector == 'next' && pos == 18){
                            $(sselector + ' .cp li').removeClass("active_color");
                            objs.eq(pos-1).addClass("active_color"); 
                        }
                        if(car_vector == 'prev' && pos == 0){
                            $(sselector + ' .cp li').removeClass("active_color");
                            objs.eq(pos+1).addClass("active_color");
                        }  
						//var ddd = $(sselector + ' .cp li').size(pos>18);
				        //alert(ddd);
						}
						//ветка2
						if(car_vector == 'next_all' || car_vector == 'prev_all'){						
                        
                        i=0;
                        pos=0;
                        jQuery.each(objs, function() { 
                            if(pos < 0 && $(this).hasClass('active_color')){                         
                                pos=i;
                            } 
                            i++;

									
                        });                
                       if(car_vector == 'next_all'){
                           $(sselector + ' .cp li').removeClass("active_color");
                           objs.eq(pos-13).addClass("active_color"); 
                        }
				        if(car_vector == 'prev_all'){
                          $(sselector + ' .cp li').removeClass("active_color");
                          objs.eq(pos+12).addClass("active_color");
                        }    
						}
						
                    }  
                }
                $(sselector + ' .cp').jCarouselLite(params);
                               
            }
        }
    });
	
    // Всплывающее окно на главной

    $(".close_swindow").click(function(){
        $(".step_window").hide();
        $(".main_steps .step_arrow").hide();
    });

    $(".main_steps .step").click(function(){
        $(".step_window").show();
        $(".main_steps .step_arrow").hide();
        $(" > .step_arrow", this).show();
        $('.step_content').empty();
        $(" > .step_article",this).clone(true,true).appendTo('.step_content').show();
    });

    $("img[src*=cross]").click(function(){
        $.fancybox.close(); 
    });

    //////  Auth ///////// 
    if ($('#dlname').size()) {                     

        var Email = new LiveValidation('dlname',{onlyOnSubmit: false });
        Email.add( Validate.Email,{failureMessage: "Некорректный email"} );
        var Password = new LiveValidation('dlpassword', {validMessage:'', onlyOnSubmit: false});
        Password.add( Validate.Presence, {failureMessage:'Обязательно для заполнения'});            
        regFields.push(Email);
        regFields.push(Password);

        $('#dlform').submit(function(){            
            if ( !LiveValidation.massValidate( regFields )) { return false; }        
            var cform = export_form('dlform');            
            var xform = { "Email" : cform.name, "Pass" : cform.password};
            auth.execute({"ajax_login": xform});
            //debugger;
            if (auth.result.logged) {
                document.location.href = document.location.href;
            } else {
                $('.login-failed').show();
                setInterval(function(){ $('.login-failed').hide();},5000);            
            }
            return false; 
        });

    }

    //// Сертификаты //////
    $(".certificate_view").fancybox({
        'padding': 0,
        'hideOnContentClick': true,
        'showNavArrows': false
    }); 

    //// Калькулятор //////
    
    $(".add a").click(function(){
        $("#calc li.added").show();
    });
    
    $(".explan_wrap").hover(function(){
        $(">.explan",this).show();
    }, function(){
        $(">.explan",this).hide();
    });
    
     //// Таблица ////// 
     
     $(".article table tr:odd").addClass("grey");  

    /* табы в конструкторе потолка  */ 

    
        var block = $(this).closest('.slide');
        var obj_id = block.attr('rel');
        var sselector = '.s-carousel[rel='+obj_id+']';
        $('.company_gallery_wrap').hide();
        $('.company_gallery_wrap[rel="'+obj_id+'"]').show(1000,function(){
            $('#scrollbarY',this).tinyscrollbar({ size: 310, sizethumb: 134, scroll: true}); 
        });              
        $('.s-carousel').fadeOut(0);
        var scarousel = $(sselector);
        if (scarousel.size()){
            scarousel.fadeIn(1000);
            if (!scarousel.hasClass('init')){
                scarousel.addClass('init');
                var params = {
                    btnPrev: sselector+' .cpnext',
                    btnNext: sselector+' .cpprev',
                    visible: 19,
                    circular: false,
                    beforeStart: function(objs){                
                
                        i=0;
                        pos=-1;
                        jQuery.each(objs, function() { 
                            if(pos == -1 && $(this).hasClass('active_color')){                         
                                pos=i;
                            } 
                            i++;                    
                        });                
                        if(car_vector == 'next' && pos == 18){
                            $(sselector + ' .cp li').removeClass("active_color");
                            objs.eq(pos-1).addClass("active_color"); 
                        }
        
                        if(car_vector == 'prev' && pos == 0){
                            $(sselector + ' .cp li').removeClass("active_color");
                            objs.eq(pos+1).addClass("active_color");
                        }  
                    }   
                }
                $(sselector + ' .cp').jCarouselLite(params);
                               
            }
        }
        
    
    

    var tabContainers = $('div.tabs > div'); // получаем массив контейнеров

    $('.tabNavigation>li>a').click(function (){
        
        $('.tabNavigation li').removeClass('a');
        $(this).closest('li').addClass('a');   
        
        tabContainers.hide(); // прячем все табы
        tabContainers.filter(this.hash).show(); // показываем содержимое текущего
        
        var rel = $(this).attr('rel');

        $('.s-carousel').hide();
        var scarousel = $('.s-carousel[rel='+rel+']');
        if (scarousel.size()){
            scarousel.fadeIn(1000);
            if (!scarousel.hasClass('init')){
                scarousel.addClass('init');
                var params = {
                    btnPrev: scarousel.find('.cpnext'),
                    btnNext: scarousel.find('.cpprev'),
//                    btnPrev: sselector+' .cpnext',
//                    btnNext: sselector+' .cpprev',
                    visible: 19,
                    circular: false,
                    beforeStart: function(objs){                
                        pos = $('.cp li', scarousel).index( $('.active_color:first') )

                        if(car_vector == 'next' && pos == 18){
                            $(sselector + ' .cp li').removeClass("active_color");
                            objs.eq(pos-1).addClass("active_color"); 
                        }
        
                        if(car_vector == 'prev' && pos == 0){
                            $(sselector + ' .cp li').removeClass("active_color");
                            objs.eq(pos+1).addClass("active_color");
                        }  
                    }   
                };
                $('.cp', scarousel).jCarouselLite(params);
            }
        }
        
        
        return false;
    }).filter(':first').click();


    /* навигация в конструкторе потолка */
    
       // var tabContainers = $('.designer .big > li'); // получаем массив контейнеров
      //  tabContainers.hide().filter(':first').show(); // прячем все, кроме первого
        // далее обрабатывается клик по вкладке
        
        /*$('div.tabs ul.tabNavigation a').click(function () {
            tabContainers.hide(); // прячем все табы
            
            tabContainers.filter(this.hash).show(); // показываем содержимое текущего
           n = ($(tabContainers).filter(this.hash));
    
        });*/
    
    $(".designer .small li").click( function(){
           // $(".designer .small li").removeClass("a");
            $(this).closest('.small').find('li').removeClass("a");
            var rel = $(this).attr("class");
            $(this).addClass("a");
            //$('.designer .big li').hasClass("rel1").show("slow");
           //alert(rel);
            $('.designer .big li').hide();
            $('.designer .big li[class="'+rel+'"]').show();
            //alert(rel);
           // 
           // debugger;
            
              //  $(this).closest('.designer').find('.big > li');
    });
             
});
