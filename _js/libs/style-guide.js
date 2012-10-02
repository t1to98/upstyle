$(document).ready(function() {

	$(".style-example").each(function(){
		var $this = $(this);
		var html = $this.html();
		var $code = $this.closest('.style-mod').find('.html-code'); 
		console.log($code);
		console.log(html);
		html = html.replace(/</g, "&lt;");
		html = html.replace(/>/g, "&gt;");
		html = html.trim();
		$code.html(html);
	}); 
	
	$("ul.style-tabs").tabs(".style-panes > .style-pane",{
		current:'active'
	});	

});