/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

$(window).resize(function(){
    if($("body").outerWidth()<=768){
    	$("#menuTerm").addClass('hidden-xs');
    	if($("#myNav .overlay-content").children().length > 0){
    	}else{
    		$("#menuTerm").children().clone().appendTo($("#myNav .overlay-content"));
    	}
    }else{
    	closeNav();
    	$("#myNav .overlay-content").empty();
    }
});
$(document).ready(function() {
	if($("body").outerWidth()<=768){
    	$("#menuTerm").addClass('hidden-xs');
    	if($("#myNav .overlay-content").children().length > 0){
    	}else{
    		$("#menuTerm").children().clone().appendTo($("#myNav .overlay-content"));
    	}
    }else{
    	closeNav();
    	$("#myNav .overlay-content").empty();
    }
});