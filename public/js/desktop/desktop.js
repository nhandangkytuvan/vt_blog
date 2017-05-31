$(document).ready(function() {
	$('.row5 .flex1col1').hover(function() {
		var index = $(this).index();
		$(this).addClass('active');
		$(this).siblings('div').removeClass('active');
		$('.row5 .tab-contents >div').eq(index).addClass('active');
		$('.row5 .tab-contents >div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});
	// $('.tabs-buttons-2 .flex4col1 a').hover(function() {
	// 	var index = $(this).parents('.tabs-buttons-2 div.flex4col1').index();
	// 	$(this).addClass('active');
	// 	$(this).parents('.tabs-buttons-2 div.flex4col1').siblings('div').find('a').removeClass('active');
	// 	$('.tabs-contents-2 >div').eq(index).addClass('active');
	// 	$('.tabs-contents-2 >div').eq(index).siblings('div').removeClass('active');
	// }, function() {
		
	// });
	// var myinter = setInterval( home_kythuatnamkhoa, 3000);
	// $('div.row4 div.img1').hover(function() {
	// 	clearInterval(myinter);
 //  		$(this).fadeOut();
 //  		$(this).siblings('div').fadeIn();
	// }, function() {
	// 	myinter = setInterval( home_kythuatnamkhoa, 3000);
	// });
	// $('div.row4 div.img2').hover(function() {
	// 	clearInterval(myinter);
	// }, function() {
 //  		$(this).fadeOut();
 //  		$(this).siblings('div').fadeIn();
 //  		myinter = setInterval( home_kythuatnamkhoa, 3000);
	// });
	
	// var myinter2 = setInterval(home_thuonghieu, 3000);

	$('#popup-desktop').popup({
        blur:true,
        transition: 'all 0.3s',
        scrolllock: false,
        background: false,
        backgroundactive:false,
        onclose: function() {setTimeout(showchat, 20000);}
    });
    var d = new Date();
    var gio = d.getHours();
    var phut = d.getMinutes();
    if((7<gio&&gio<22)||(gio==22&&phut<=30)||(gio==7&&phut>=30)){
        setTimeout(showchat, 15000);
    }


});
function open_tuvan(){
	window.open("http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en","_blank");
}
// kythuat nam khoa slide
// function home_kythuatnamkhoa(){
// 	var obj = $(".row4 .flex2col1.active");
// 	$(".row4 .flex2col1.active >div>div").each(function(index, el) {
// 		if($(el).css('display') == 'none'){
// 			$(el).fadeIn();
// 		}else{
// 			$(el).fadeOut();
// 		}
// 	});
// 	if(obj.next().length){
// 		obj.removeClass('active');
// 		obj.next().addClass('active');
// 	}else{
// 		obj.removeClass('active');
// 		$(".row4 .flex2col1").first().addClass('active');
// 	}
// }
// thuong hieu slide
// function home_thuonghieu(){
// 	var obj = $('.row7 .flex1 >div.active');
// 	obj.find('div.slickmy').slick('slickNext');
// 	obj.removeClass('active');
// 	if(obj.next('div').length){
// 		obj.next('div').addClass('active');
// 	}else{
// 		$('.row7 .flex1 >div').first().addClass('active');
// 	}
// }


function showchat() {
    $('#popup-desktop').popup('show');
}