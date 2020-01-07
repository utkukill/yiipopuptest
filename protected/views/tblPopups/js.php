<?php
header('Content-Type: text/javascript');
?>window.onload = function() {

	if(!window.jQuery)
	{
		var script = document.createElement('script');
		script.type = "text/javascript";
		script.src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js";
		script.async = false;
		document.getElementsByTagName('head')[0].appendChild(script);
	}		


	var script = document.createElement('script');
	script.type = "text/javascript";
	script.src = "https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js";
	script.async = false;
	document.getElementsByTagName('head')[0].appendChild(script);


	var fileref = document.createElement("link");
	fileref.rel = "stylesheet";
	fileref.type = "text/css";
	fileref.href = "https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css";
	document.getElementsByTagName("head")[0].appendChild(fileref)

	setTimeout(show, 10000);

	function show(){

		$('body').append('<div id="ex1" class="modal"><p><?php echo $model->content; ?></p><a href="#" rel="modal:close">Close</a></div>');  
		$('#ex1').addClass("modal");
		$('#ex1').modal({fadeDuration: 1000, fadeDelay: 0.50});
	}
}