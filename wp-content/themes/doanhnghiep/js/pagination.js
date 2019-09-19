jQuery(document).ready(function(){

    jQuery('.list_questions>.panel-grid-cell>.so-panel>.container>.panel-layout').append('<ul id="pagin"></ul>');
    jQuery('.wrap_list_post_cskh .container').append('<ul id="pagincskh"></ul>');
    jQuery('.list_post_new_archive ').append('<ul id="pagin_g_new_most"></ul>');
//phantrang
pageSize = 5;
incremSlide = 3;
startPage = 0;
numberPage = 0;

var pageCount =  $(".list_questions>.panel-grid-cell>.so-panel>.container>.panel-layout>.panel-grid").length / pageSize;
var totalSlidepPage = Math.floor(pageCount / incremSlide);
    
for(var i = 0 ; i<pageCount;i++){
    $("#pagin").append('<li><a href="#">'+(i+1)+'</a></li> ');
    if(i>pageSize){
       $("#pagin li").eq(i).hide();
    }
}

var prev = $("<li/>").addClass("prev").html('<i class="fa fa-angle-double-left" aria-hidden="true"></i>').click(function(){
   startPage-=3;
   incremSlide-=3;
   numberPage--;
   slide();
});

prev.hide();

var next = $("<li/>").addClass("next").html('<i class="fa fa-angle-double-right" aria-hidden="true"></i>').click(function(){
   startPage+=3;
   incremSlide+=3;
   numberPage++;
   slide();
});

$("#pagin").prepend(prev).append(next);

$("#pagin li").first().find("a").addClass("current_why");

slide = function(sens){
   $("#pagin li").hide();
   
   for(t=startPage;t<incremSlide;t++){
     $("#pagin li").eq(t+1).show();
   }
   if(startPage == 0){
     next.show();
     prev.hide();
   }else if(numberPage == totalSlidepPage ){
     next.hide();
     prev.show();
   }else{
     next.show();
     prev.show();
   }
    
}
showPage = function(page) {
    $(".list_questions>.panel-grid-cell>.so-panel>.container>.panel-layout>.panel-grid").hide();
    $(".list_questions>.panel-grid-cell>.so-panel>.container>.panel-layout>.panel-grid").each(function(n) {
        if (n >= pageSize * (page - 1) && n < pageSize * page)
            $(this).show().addClass('current_grid_show');
    });        
} 
showPage(1);
$("#pagin li a").eq(0).addClass("current_why");
$("#pagin li a").click(function(e) {
   $("#pagin li a").removeClass("current_why");
   $(this).addClass("current_why");
   showPage(parseInt($(this).text()));
   e.preventDefault();
});

// end phantrang 1

pageSize_cskh = 3;
incremSlide_cskh = 2;
startPage_cskh = 0;
numberPage_cskh = 0;

var pageCount_cskh =  $(".wrap_list_post_cskh .container>.row>.list_post_item").length / pageSize_cskh;
var totalSlidepPage_cskh = Math.floor(pageCount_cskh / incremSlide_cskh);
    
for(var i = 0 ; i<pageCount_cskh;i++){
    $("#pagincskh").append('<li><a href="#">'+(i+1)+'</a></li> ');
    if(i>pageSize_cskh){
       $("#pagincskh li").eq(i).hide();
    }
}

var prev_cskh = $("<li/>").addClass("prev_cskh").html('<i class="fa fa-angle-double-left" aria-hidden="true"></i>').click(function(){
   startPage_cskh-=2;
   incremSlide_cskh-=2;
   numberPage_cskh--;
   slide_cskh();
});

prev_cskh.hide();

var next_cskh = $("<li/>").addClass("next_cskh").html('<i class="fa fa-angle-double-right" aria-hidden="true"></i>').click(function(){
   startPage_cskh+=2;
   incremSlide_cskh+=2;
   numberPage_cskh++;
   slide_cskh();
});

$("#pagincskh").prepend(prev_cskh).append(next_cskh);

$("#pagincskh li").first().find("a").addClass("current_why");

slide_cskh = function(sens){
   $("#pagincskh li").hide();
   
   for(t=startPage_cskh;t<incremSlide_cskh;t++){
     $("#pagincskh li").eq(t+1).show();
   }
   if(startPage_cskh == 0){
     next_cskh.show();
     prev_cskh.hide();
   }else if(numberPage_cskh == totalSlidepPage_cskh ){
     next_cskh.hide();
     prev_cskh.show();
   }else{
     next_cskh.show();
     prev_cskh.show();
   }
}
showPage_cskh = function(page) {
	  $(".wrap_list_post_cskh .container>.row>.list_post_item").hide();
	  $(".wrap_list_post_cskh .container>.row>.list_post_item").each(function(n) {
	      if (n >= pageSize_cskh * (page - 1) && n < pageSize_cskh * page)
	          $(this).fadeIn(300);
	  });        
} 
showPage_cskh(1);
$("#pagincskh li a").eq(0).addClass("current_why");
$("#pagincskh li a").click(function(e) {
		
	 $("#pagincskh li a").removeClass("current_why");
	 $(this).addClass("current_why");
	 showPage_cskh(parseInt($(this).text()));
	 e.preventDefault();
});

// end phantrang 2

pageSize_news_most = 4;
incremSlide_new_most = 1;
startPage_new_most = 0;
numberPage_new_most = 0;

var pageCount_new_most =  $(".list_post_new_archive ul .list_post_item ").length / pageSize_news_most;
var totalSlidepPage_new_most = Math.floor(pageCount_new_most / incremSlide_new_most);
    
for(var i = 0 ; i<pageCount_new_most;i++){
    $("#pagin_g_new_most ").append('<li><a href="#">'+(i+1)+'</a></li> ');
    if(i>pageSize_news_most){
       $("#pagin_g_new_most  li").eq(i).hide();
    }
}

var prev_new_most = $("<li/>").addClass("prev_new_most").html('<i class="fa fa-angle-double-left" aria-hidden="true"></i>').click(function(){
   startPage_new_most-=1;
   incremSlide_new_most-=1;
   numberPage_new_most--;
   slide_new_most();
});

prev_new_most.hide();

var next_new_most = $("<li/>").addClass("next_new_most").html('<i class="fa fa-angle-double-right" aria-hidden="true"></i>').click(function(){
   startPage_new_most+=1;
   incremSlide_new_most+=1;
   numberPage_new_most++;
   slide_new_most();
});


$("#pagin_g_new_most").prepend(prev_cskh).append(next_cskh);

$("#pagin_g_new_most li").first().find("a").addClass("current_why");

slide_new_most = function(sens){
   $(".list_post_new_archive li").hide();
   
   for(t=startPage_new_most;t<incremSlide_new_most;t++){
     $(".list_post_new_archive li").eq(t+1).show();
   }
   if(startPage_new_most == 0){
     next_new_most.show();
     prev_new_most.hide();
   }else if(numberPage_new_most == totalSlidepPage_new_most ){
     next_new_most.hide();
     prev_new_most.show();
   }else{
     next_new_most.show();
     prev_new_most.show();
   }
}
showPage_new_most = function(page) {
    $(".list_post_new_archive ul .list_post_item ").hide();
    $(".list_post_new_archive ul .list_post_item ").each(function(n) {
        if (n >= pageSize_news_most * (page - 1) && n < pageSize_news_most * page)
            $(this).fadeIn(300);
    });        
} 
showPage_new_most(1);
$("#pagin_g_new_most li a").eq(0).addClass("current_why");
$("#pagin_g_new_most li a").click(function(e) {
    
   $("#pagin_g_new_most li a").removeClass("current_why");
   $(this).addClass("current_why");
   showPage_new_most(parseInt($(this).text()));
   e.preventDefault();
});

});	