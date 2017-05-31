// JavaScript Document

(function(e){e.fn.fix=function(t){var n={"float":"right",minStatue:!1,skin:"gray",durationTime:1e3},t=e.extend(n,t);this.each(function(){var n=e(this),r=n.find(".close_btn"),i=n.find(".show_btn"),s=n.find(".side_content"),o=n.find(".side_list").width(),u=n.find(".side_list"),a=n.offset().top;n.css(t.float,0),t.minStatue&&(e(".show_btn").css("float",t.float),s.css("width",0),i.css("width",25)),t.skin&&n.addClass("side_"+t.skin),e(window).bind("scroll",function(){var r=a+e(window).scrollTop()+200+"px";n.animate({top:r},{duration:t.durationTime,queue:!1})}),r.bind("click",function(){s.animate({width:"0"},"fast"),i.stop(!0,!0).delay(300).animate({width:"33px"},"fast").css("float","left")}),i.click(function(){e(this).animate({width:"0px"},"fast"),n.width(o),s.stop(!0,!0).delay(200).animate({width:"167px"},"fast")})})}})(jQuery)


/*µã»÷Ð¡Í¼ÇÐ»»´óÍ¼*/
$(document).ready(function () {

    


/*²à±ßÀ¸*/
	$(document).ready(function(){
	$("#sidebar ul li").hover(
	function(){
		$(this).find(".sidebox").stop().animate({"width":"145px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#3a6daf"});
		$(this).find(".sidebox i").attr({"class":$(this).find(".sidebox i").attr("class")+"_s"});		
	},function(){
		$(this).find(".sidebox").stop().animate({"width":"72px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#6699cd"});
		$(this).find(".sidebox i").stop().attr({"class":$(this).find(".sidebox i").attr("name")});		
	});
	$("#sidebar ul li i.top").hover(function(){
		$(this).css("background","url('../advleft/toph.png') no-repeat");
	},function(){
		$(this).css("background","url('../advleft/top.png') no-repeat");
	});
	});
});
$(function(){
	$('#sidebar li .js_ht').mouseover(function(){
		$(this).siblings(".ht").stop().animate({"right":"-240px","opacity":"1"}, 500).show(); 
		$(this).closest("li").css("background","#3a6daf");	
	})
	$('#sidebar li .js_ht').mouseout(function(){
		$(this).siblings(".ht").stop().animate({"right":"-300px","opacity":"0"}, 500).hide(); 
		$(this).closest("li").css("background","#6699cd");	
	})
	var top=($(window).height()-$("#sidebar").height())/2+$(window).scrollTop()+"px";
	$("#sidebar").css({'top':top});
	$("#sidebar li.first").hide();
	window.onscroll = function(){
		if($(document).scrollTop() > 100){
			$("#sidebar li.first").show();
		}else{
			$("#sidebar li.first").hide();
		}
	}
	$("#sidebar li.first").click(function(){
		$("#sidebar").animate({'top':top},600);
		$('html,body').animate({'scrollTop':0},600);
		$("#sidebar li.first").hide();
	})


	
})
