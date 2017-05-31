
var is_invite = false;
$(function() {
	// css
	var str = '<style>';
	str += '.cf:before, .cf:after { display: table; content: "" }';
	str += '.cf:after { clear: both }';
	str += '.cf { zoom: 1 }';
	str += '.float_container { background-color:#fffeee; box-sizing:border-box; border: 5px solid #0163b2; border-radius: 6px; z-index: 1000; display: none; position: fixed; width: 440px; left: 50%; bottom: 28%; margin: 0 auto auto -220px; background-image: -moz-linear-gradient(#fffcf7, #fff7e1); background-image: -webkit-linear-gradient(#fffcf7, #fff7e1); background-image: -o-linear-gradient(#fffcf7, #fff7e1); background-image: linear-gradient(#fffcf7, #fff7e1); font-size: 14px; }';
	str += '.float_container .ntitle {overflow:hidden; position:relative; z-index: 1002; background: #0163b2; font-size: 12px; line-height: normal; color: #fff; text-align: center; letter-spacing: 0px; padding:8px 20px 0px 20px;height:47px;}';
	str += '.float_container .ntitle .icon_swt{ position: absolute; z-index: 1003; left: 5px; top: 0; }';
	str += '.float_container .ntitle .close_swt{ position: absolute; cursor:pointer; z-index: 1003; right: 0px; top: 7px; }';
	str += '.float_container dl { display: none; transiton: all .3s linear 0s; margin: 0; padding: 0; }';
	str += '.float_container dt { display: inline-block; width: 10%; float: left; margin: 24px 0 0 8px; text-align: center }';
	str += '.float_container dt img { max-width: 100%; border: 0; vertical-align: middle; -ms-interpolation-mode: bicubic }';
	str += '.float_container dd { margin: 0; display: inline-block; position: relative; width: 83%; float: left; margin-top: 5px; }';
	str += '.float_container .time1 { font-size: 12px; line-height: 1.6; color: #6c6761; width: 95%; margin: 0; margin-left:5%; height: 1.6em; }';
	str += '.float_container .box11 { background-color: #c6e5fa; color: #000; position: relative; margin-left: 5%; padding: 5px 10px 3px 10px; line-height: 20px; border: 1px solid #7ebbe4; border-top-color: #7ebbe4; border-radius: 12px; box-shadow: 0 3px 0 #3ea0dd, inset 0 1px 1px #fff; background-image: -moz-linear-gradient(#c6e5fa, #a6d7f7); background-image: -webkit-linear-gradient(#c6e5fa, #a6d7f7); background-image: -o-linear-gradient(#c6e5fa, #a6d7f7); background-image: linear-gradient(#c6e5fa, #a6d7f7); letter-spacing: -1px; }';
	str += '.float_container .box11 span { color: #de0000; }';
	str += '.float_container .box11 img { width: 22px; vertical-align: bottom; }';
	str += '.float_container .box11:before, .float_container .box11:after { position: absolute; content: "" }';
	str += '.float_container .box11:before { width: 18px; height: 13px; top: -1px; left: -9px;}';
	str += '.float_container .box11:after { width: 40px; height: 26px; bottom: -4px; right: -7px;}';
	str += '.float_container .sbtn { margin-top: 15px; padding: 10px 0; border-top: 1px solid #c7c7c0; border-bottom: 1px solid #979185; background-color: #eaebed; }';
	str += '.float_container .sbtn a { display: inline-block; width: 39%; height: 2em; float: left; margin: 0 5%; border: 1px solid #a6a5a1; border-radius: 12px; background-color: #fefefe; box-shadow: 0 2px 2px #d1d1d3; font-size: 16px; color: #6c6761; line-height: 2; text-align: center; text-decoration: none; transition: all .3s linear 0s; }';
	str += '.float_container .sbtn a:hover { border-color: #959490; background-color: #f7f7f7 }';
	str += '@media screen and (max-width: 320px) {';
	str += '.float_container .ntitle { font-size: 18px; background-size: 32px }';
	str += '.float_container dd { width: 73% }';
	str += '.float_container .box11 { font-size: 13px }';
	str += '.float_container .sbtn a { border-radius: 10px; font-size: 15px }';
	str += '}';
	str += '</style>';
	// html
	str += '<div class="float_container cf" id="footTool">';
	str += '<div class="ntitle"><img class="icon_swt" src="http://www.phongkhamnamkhang.net/public/images/global/chat/icon_swt.png" width="32" height="32"><span></span>TRUNG TÂM TƯ VẤN TRỰC TUYẾN PHÒNG KHÁM<br>NAM KHANG<img class="close_swt" src="http://www.phongkhamnamkhang.net/public/images/global/chat/closeBtn_swt.png" width="20" height="20" ntitle=""></div>';
	str += '<dl class="cf" id="tools2" style="display: block;">';
	str += '<dt><img src="http://www.phongkhamnamkhang.net/public/images/global/chat/zjtouxiang.jpg"></dt>';
	str += '<dd>';
	str += '<div class="time1" id="now1"></div>';
	str += '<a style="text-decoration: none;" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">';
	str += '<div class="box11"><img alt="smile" src="http://www.phongkhamnamkhang.net/public/images/global/chat/smile.gif">Chào bạn, hôm nay đến ca trực của tôi, tôi có thể giúp gì được bạn?</div>';
	str += '</a>';
	str += '</dd>';
	str += '</dl>';
	str += '<dl class="cf" id="tools3">';
	str += '<dt><img src="http://www.phongkhamnamkhang.net/public/images/global/chat/zjtouxiang.jpg"></dt>';
	str += '<dd>';
	str += '<div class="time1" id="now2"></div>';
	str += '<a style="text-decoration: none;" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">';
	str += '<div class="box11">【Giải thích triệu chứng】  【Phương án điều trị】 【Chi phí điều trị】..,Tôi đều có thể trả lời trực tuyến giúp bạn！</div>';
	str += '</a>';
	str += '</dd>';
	str += '</dl>';		
	str += '<div class="sbtn cf"><a class="hvr-wobble-horizontal" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">TƯ VẤN ĐẶT HẸN</a><a class="hvr-wobble-horizontal" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="a-jg">LẬP TỨC TRẢ LỜI</a></div>';
	str += '</div>';
	$("body").eq(0).append(str);
	$(".close_swt").click(function() {
		if (is_invite) {
			LR_RefuseChat();
			is_invite = false;
		}
		$("#footTool").slideUp();
		$(".ntel").hide();
		window.setTimeout(function() {
			dh();
		}, 37000);
	});
	window.setTimeout("dh()",19000);
});

function dh() {
	window.setTimeout(function() {
		var d = new Date();
		var h = d.getHours();
		var i = d.getMinutes();
		var s = d.getSeconds();
		i < 10 ? i = "0" + i : i;
		s < 10 ? i = "0" + s : s;
		$("#now1").html(h + ":" + i + ":" + s);
		$("#tools3").hide();
		$("#footTool").hide().slideDown();
	}, 3000);
	window.setTimeout(function() {
		var d = new Date();
		var h = d.getHours();
		var i = d.getMinutes();
		var s = d.getSeconds();
		i < 10 ? i = "0" + i : i;
		s < 10 ? i = "0" + s : s;
		$("#tools3").slideDown();
		$("#now2").html(h + ":" + i + ":" + s);
	}, 6000);
	window.setTimeout(function() {
		$(".ntel").slideDown();
	}, 9000);
}
/*********************************************************************************************************************************************/












