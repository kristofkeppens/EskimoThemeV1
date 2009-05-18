$(document).ready(function () {
	var nav = 0;
	$("#block-block-1 .content div").hide();
	
	var content = $("#block-block-1 .content div");
	content.eq(0).fadeIn("slow");
	$(".why").click(function() {
		if(nav < content.size()-1){
		content.eq(nav).hide();
		nav++;
		content.eq(nav).show();
		} else {
			nav=0;
		}
	})
	
}
);