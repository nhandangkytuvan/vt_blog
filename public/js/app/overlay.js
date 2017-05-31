$(window).resize(function(){
    if($("body").outerWidth()<=768){
    	$("#menuTerm").addClass('hidden-xs');
    	if($("#myModalMenuTerm .modal-content .modal-body").children().length > 0){
    	}else{
    		$("#menuTerm").children().clone().appendTo($("#myModalMenuTerm .modal-content .modal-body"));
    	}
    }else{
    	$("#myModalMenuTerm .modal-content .modal-body").empty();
    }
});
$(document).ready(function() {
	if($("body").outerWidth()<=768){
    	$("#menuTerm").addClass('hidden-xs');
    	if($("#myModalMenuTerm .modal-content .modal-body").children().length > 0){
    	}else{
    		$("#menuTerm").children().clone().appendTo($("#myModalMenuTerm .modal-content .modal-body"));
    	}
    }else{
    	$("#myModalMenuTerm .modal-content .modal-body").empty();
    }
});