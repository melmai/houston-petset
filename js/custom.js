jQuery(document).ready(function($) {
	$(function() {
		$('.equalize.products').matchHeight();
	});
	
	setTimeout(timingEvent, 10000); 
		
});
	function timingEvent($){
		jQuery(".CTABlock").attr("style", "display:block;");
	}
	
	function CTAexpansionButton($){
		jQuery(".CTABlock").removeClass("blockCollapsed");
		jQuery(".CTABlock").width( 320 );
		jQuery(".CTASection1").hide();
		jQuery(".CTASection2").attr("style", "display:block;");
		jQuery(".CTASection3").hide();
		jQuery("#closeArrow").attr("style", "display:block;");
	}
	
	function CTAcloseButton($){
		jQuery(".CTABlock").addClass("blockCollapsed");
		jQuery(".CTASection1").hide();
		jQuery(".CTASection2").hide();
		jQuery(".CTASection3").attr("style", "display:block;");
		jQuery("#closeArrow").hide();
	}